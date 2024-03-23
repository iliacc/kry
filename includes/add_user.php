<form>
    <div class="mb-3">
        <label for="username" class="form-label">Nom d'utilisateur</label>
        <input type="text" class="form-control" id="username">
    </div>
    <div class="mb-3">
        <label for="email" class="form-label">Email</label>
        <input type="email" class="form-control" id="email">
    </div>
    <div class="mb-3">
        <label for="password" class="form-label">Mot de passe</label>
        <div class="input-group">
            <input type="text" class="form-control" id="password" name="password" readonly>
            <button type="button" class="btn btn-outline-secondary" id="generatePassword">Générer</button>
        </div>
    </div>
    <div class="mb-3">
        <?php
        if (mysqli_num_rows($roles) > 0) {
            echo '<select class="form-select" id="role">';
            echo '<option selected>Choisir un rôle utilisateur</option>';
            foreach ($dataRoles as $row) {
                echo '<option value="' . $row['id'] . '">' . $row['name'] . '</option>';
            }
            echo '</select>';
        } else {
            echo 'Aucuns rôles utilisateur en base';
        }
        ?>
    </div>
    <div class="mb-3">
    <?php
        if (mysqli_num_rows($sites) > 0) {
            echo '<select class="form-select" id="role">';
            echo '<option selected>Choisir un site de production</option>';
            foreach ($dataSites as $row) {
                echo '<option value="' . $row['id'] . '">' . $row['name'] . '</option>';
            }
            echo '</select>';
        } else {
            echo 'Aucuns sites de production en base';
        }
        ?>
    </div>
    <div class="mb-3">
        <button class="btn btn-success" type="submit">Ajouter</button>
    </div>
</form>

<br><br><br>