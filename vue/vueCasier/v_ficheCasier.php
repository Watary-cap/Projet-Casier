<!-- v_ficheCasier.php -->

<div class="row">
    <h2>Modifier les informations du Casier</h2>

    <form action="modifierCasier.php" method="post">
        <!-- Ajoutez les champs nécessaires en fonction de vos besoins -->
        <label for="numero">Nom de l'élève:</label>
        <input type="text" id="numero" name="numero" value="<?php echo $data['numero']; ?>" required>

        <label for="statut">Statut du Casier:</label>
        <select id="statut" name="statut" required>
            <option value="En cours" <?php echo ($data['statut'] === 'Affecté') ? 'selected' : ''; ?>>Affecté</option>
            <option value="Terminé" <éphp echo ($data['statut'] === 'Libre') ? 'selected' : ''; ?>>Libre</option>
            <option value="En attente" <?php echo ($data['statut'] === 'Maintenance') ? 'selected' : ''; ?>>Maintenance</option>
        </select>

        <!-- Ajoutez d'autres champs selon vos besoins -->

        <input type="hidden" name="id" value="<?php echo $data['id']; ?>">
        
        <button type="submit">Modifier</button>
    </form>
</div>
