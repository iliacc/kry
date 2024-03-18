<?php

include_once('includes/header.php');

$sqlUsers = "SELECT * FROM utilisateurs";
$sqlRoles = "SELECT * FROM roles";
$sqlSites = "SELECT * FROM sites";
$users = mysqli_query($conn, $sqlUsers);
$roles = mysqli_query($conn, $sqlRoles);
$sites = mysqli_query($conn, $sqlSites);

?>

<div class="content-bek-ofis">
    <!-- Section utilisateurs -->
    <div class="row">
    <div id="users">
        <h3>Utilisateurs</h3>
        <nav class="nav">
            <a class="nav-link" href="#">Ajouter un utilisateur</a>
            <a class="nav-link" href="#">Supprimer un utilisateur</a>
            <a class="nav-link" href="#">Modifier le rôle d'un utilisateur</a>
        </nav>
        <br>
        <?php

        if (mysqli_num_rows($users) > 0) {
            echo '<table class="table">';
            echo '<thead>';
            echo '<tr>';
            echo '<th scope="col">#</th>';
            echo '<th scope="col">Nom d\'utilisateur</th>';
            echo '<th scope="col">Adresse e-mail</th>';
            echo '<th scope="col">Rôle</th>';
            echo '<th scope="col">Site</th>';
            echo '</tr>';
            echo '</thead>';
            echo '<tbody>';
            while ($row = mysqli_fetch_assoc($users)) {
                # code...
                echo '<tr>';
                echo '<th scope="row">' . $row['id'] . '</th>';
                echo '<td> ' . $row['utilisateur'] . '</td>';
                echo '<td> ' . $row['email'] . '</td>';
                echo '<td>unkown</td>';
                echo '<td>unkown</td>';
                echo '</tr>';
            }
            echo '</table>';
        } else {
            echo "Aucun utilisateur trouvé dans la base de données.";
        }
        ?>
    </div>
    </div>
    <div class="row">
        <div class="col" id="roles">
            <h3>Gestion des rôles utilisateurs</h3>
            <?php
            if (mysqli_num_rows($roles) > 0) {
                var_dump($roles);
                echo '<table class="table">';
                echo '<thead>';
                echo '<tr>';
                echo '<th scope="col">#</th>';
                echo '<th scope="col">Rôle</th>';
                echo '</tr>';
                echo '</thead>';
                echo '<tbody>';
                while ($row = mysqli_fetch_assoc($roles)) {
                    echo '<tr>';
                    echo '<th scope="row">' . $row['id'] . '</th>';
                    echo '<td> ' . $row['name'] . '</td>';
                    echo '</tr>';
                }
                echo '</table>';
            } else {
                echo '</p> Aucuns rôles trouvé dans la base de données.</p>';
            }
            ?>
        </div>
        <div class="col" id="sites">
            <h3>Gestion des sites de production</h3>
            <?php
            if (mysqli_num_rows($sites) > 0) {
                echo '<table class="table">';
                echo '<thead>';
                echo '<tr>';
                echo '<th scope="col">#</th>';
                echo '<th scope="col">Rôle</th>';
                echo '</tr>';
                echo '</thead>';
                echo '<tbody>';
                while ($row = mysqli_fetch_assoc($sites)) {
                    echo '<tr>';
                    echo '<th scope="row">' . $row['id'] . '</th>';
                    echo '<td> ' . $row['name'] . '</td>';
                    echo '</tr>';
                }
                echo '</table>';
            } else {
                echo '</p> Aucuns rôles trouvé dans la base de données.</p>';
            }
            ?>
        </div>
    </div>

</div>

<?php

include_once('includes/add_user.php');

mysqli_close($conn);
include_once('includes/footer.php');
?>