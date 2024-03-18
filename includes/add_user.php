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
        <input type="password" class="form-control" id="password">
    </div>
    <div class="mb-3">
        <?php
        if (mysqli_num_rows($roles) > 0) {
            var_dump($roles);
            echo '<select class="form-select" id="role">';
            echo '<option selected>Choisir un rôle utilisateur</option>';
            while ($row = mysqli_fetch_assoc($roles)) {
                echo '<option value=" ' . $row['id'] . '"> ' . $row['name'] . ' </option> ';
            }
            echo '</select>';
        } else {
            echo 'Aucuns rôles utilisateur en base';
        }
        ?>
    </div>
    <div class="mb-3">
        <select class="form-select" id="site">
            <option selected>Choisir un site</option>
            <option value="1">St-Fons</option>
            <option value="2">Francheville</option>
            <option value="3">Calluire</option>
            <option value="4">Bourgoin</option>
        </select>
    </div>
    <div class="mb-3">
        <button class="btn btn-success" type="submit">Ajouter</button>
    </div>
</form>

<br><br><br>