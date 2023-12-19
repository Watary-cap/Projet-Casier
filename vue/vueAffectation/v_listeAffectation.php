    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .container {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        form {
            display: flex;
            flex-direction: column;
        }

        label {
            margin-bottom: 8px;
        }

        input {
            padding: 8px;
            margin-bottom: 16px;
        }

        button {
            background-color: #007bff;
            color: #fff;
            padding: 10px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
    </style>
	<br>
	<br>
    <div class="container">
        <h2>Affectation Élève-Casier</h2>
        <form action="index.php?ctl=Affectation&action=listeAffectation" method="post">
            <label for="id_eleve">Nom de l'Élève:</label>
            <input type="text" name="id_eleve" required>

            <label for="id_casier">Numero du Casier:</label>
            <input type="text" name="id_casier" required>

            <button type="submit">Affecter</button>
        </form>
    </div>