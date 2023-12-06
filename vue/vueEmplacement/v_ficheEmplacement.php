<html>
<div class="row">
    <h2>Modifier les informations d'emplacement</h2>

    <form action="index.php?ctl=Emplacement&action=modifEmplacement" method="post">
        <!-- Ajoutez les champs nécessaires en fonction de vos besoins -->
        <label for="numero">Nom emplacement:</label>
        <input type="text" id="numero" name="nom" value="<?php echo $data['nom']; ?>" required>
        <br>
        <label for="numero">Nombre casiers:</label>
        <input type="text" name="nb" value="<?php echo $data['nombre_de_casiers']; ?>" required>


        <!-- Ajoutez d'autres champs selon vos besoins -->

        <input type="hidden" name="id" value="<?php echo $data['id']; ?>">

        <button type="submit">Modifier</button>
    </form>
</div>
</html>