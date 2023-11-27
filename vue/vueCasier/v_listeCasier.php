<div class="row">
    <table class="table table-striped mt-3">
        <thead>
            <tr>
                <th>NUMERO</th>
                <th>STATUT</th>
                <th>EMPLACEMENT</th>
                <th>Actions</th>
            </tr>
        </thead>
        <?php foreach ($data as $ligne) { ?>
            <tr>
                <td><?php echo $ligne['numero']; ?></td>
                <td><?php echo $ligne['statut']; ?></td>
                <td><?php echo $ligne['nom']; ?></td>
                <td>
                    <a href="index.php?ctl=Casier&action=fiche&id=<?php echo $ligne['id']; ?>">
                        <img src="./vue/images/editer.png" width="20px" height="20px">
                    </a>
                </td>
            </tr>
        <?php
        }
        echo "</table>";
        ?>