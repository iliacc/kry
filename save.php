<div class="accordion-item">
    <h2 class="accordion-header">
        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
            Rôles utilisateur
        </button>
    </h2>
    <div id="collapseTwo" class="accordion-collapse" data-bs-parent="#accordionExample">
        <div class="accordion-body">
            <?php
            if (mysqli_num_rows($roles) > 0) {
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
            } else {
                echo '</p> Aucuns rôles trouvé dans la base de données.</p>';
            }
            ?>
        </div>
    </div>
</div>