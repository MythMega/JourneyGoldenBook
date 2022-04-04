<?php include'./file/php/head.php'; ?>

<div class="content_big">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <table class="table table-striped table-hover">
                    <thead>
                        <tr>
                        <th scope="col">#</th>
                        <th scope="col">Name</th>
                        <th scope="col">Message</th>
                        <th scope="col">date</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        // Connexion à la base de données
                        try
                        {
                            $bdd = new PDO('mysql:host=localhost;dbname=journeybook;charset=utf8', 'admin', 'admin');
                        }
                        catch(Exception $e)
                        {
                                die('Erreur : '.$e->getMessage());
                        }

                        // On récupère les 25 derniers billets
                        $req = $bdd->query('SELECT id, pseudo, message, DATE_FORMAT(date, \'%d/%m/%Y\') AS date_creation FROM messages ORDER BY id DESC');

                        while ($donnees = $req->fetch())
                        {
                        ?>
                            <tr>
                                    <td><?php echo htmlspecialchars($donnees['id']); ?></span></td>
                                    <td><?php echo htmlspecialchars($donnees['pseudo']); ?></span></td>
                                    <td><?php echo htmlspecialchars($donnees['message']); ?></span></td>
                                    <td><?php echo htmlspecialchars($donnees['date_creation']); ?></span></td>
                            </tr>
                        <?php
                        } // Fin de la boucle des billets
                        $req->closeCursor();
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>


<?php include'./file/php/foot.php'; ?>