<?php

include_once('includes/header.php');

$sql = "SELECT * FROM utilisateurs";
$users = mysqli_query($conn, $sql);

?>

<div class="accordion">
    <div class="accordion-item">
        <h2 class="accordion-header">
            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                Utilisateurs
            </button>
        </h2>
        <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#accordionExample">
            <div class="accordion-body">

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
    </div>
    <div class="accordion-item">
        <h2 class="accordion-header">
            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                Gestion des demandes
            </button>
        </h2>
        <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
            <div class="accordion-body">
                <strong>This is the first item's accordion body.</strong> It is shown by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
            </div>
        </div>
    </div>
</div>


<?php

// include_once('includes/add_user.php');

mysqli_close($conn);
include_once('includes/footer.php');
?>