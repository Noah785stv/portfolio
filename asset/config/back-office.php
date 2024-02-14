<?php
session_start();
require './init.php';

// Vérifiez si l'utilisateur est connecté, sinon redirigez-le vers login.php
if (!isset($_SESSION['id']) || $_SESSION['id'] != 1) {
    header('Location: ./login.php');
    exit;
}

if (isset($_POST['titreComp']) && isset($_POST['validComp']) && $_POST['validComp'] == 'Ajouter') {
    $pdoStatement = $pdo->prepare('INSERT INTO `skill`(`content`) VALUES (:content)');
    $pdoStatement->bindValue(':content', $_POST['titreComp'], PDO::PARAM_STR);
    $pdoStatement->execute();
}

if (isset($_POST['titreCompWeb']) && isset($_POST['validCompWeb']) && $_POST['validCompWeb'] == 'Ajouter') {
    $pdoStatement = $pdo->prepare('INSERT INTO `skillsweb`(`contentWeb`) VALUES (:contentWeb)');
    $pdoStatement->bindValue(':contentWeb', $_POST['titreCompWeb'], PDO::PARAM_STR);
    $pdoStatement->execute();
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="robots" content="noindex, nofollow">
    <title>BackOffice</title>
    <link rel="stylesheet" href="../css/components/backstyle.css">

</head>
<body>
    <header>
        <h1>Back-Office</h1>
        <p><a href="../../index" id="portfolioAccess">Accéder au portfolio</a></p>
    </header>
    <div class="container">
        <div id="messages">
            <h2 id="h2message">Messages</h2>
    <?php if(isset($_GET['confirm'])) {
        if($_GET['confirm'] == 'supp') {
            echo 'message supprimé';
    }} ?>
            <?php
            if(isset($_GET['id']) && !empty($_GET['id'])) {
                $getid = $_GET['id'];
                $recupUser = $pdo->prepare('SELECT * FROM messages WHERE id = ?');
                $recupUser->execute(array($getid));
                if($recupUser->rowCount() > 0) {
                    $bannirUser = $bdd->prepare('DELETE FROM messages WHERE id = ?');
                    $bannirUser->execute(array($getid));
                }
            }
            $recupMsg = $pdo->query('SELECT * FROM messages');
            while($msg = $recupMsg->fetch()) {
                ?>
                <ul>
                    <li>
                        <?= $msg['mail']?> <a id="supprMsg" class="suppr" href="javascript:if(confirm('Etes vous sûr(e) de vouloir supprimer ce message ?')){window.location.href='./ban/bannirmsg.php?id=<?= $msg['id']; ?>'}">Supprimer</a>
                        <br>
                        <?= $msg['message']?>
                        <hr>
                    </li>
                </ul>
                <?php }?>
        </div>

        <!-- Gérer les compétences -->
        <div id="competence">
            <div id="underContainer1">
                <h2 class="h2Title titreh2-1">Gérer Compétence Dev</h2>
                <h2 class="h2Title titreh2-2">Ajouter Compétence</h2>
                <h2 class="h2Title titreh2-3">Gérer Compétence Web</h2>
            </div>
                <form action="" method="POST" class="formSkill titreh2-1">
                    <input class="formulaire" type="text" placeholder="compétence dev" name='titreComp'>
                    <input class="formulaire" type="submit" value="Ajouter" name='validComp'>
                </form>
                
                <form action="" method="POST" class="formSkill titreh2-3">
                    <input class="formulaire" type="text" placeholder="compétence web" name='titreCompWeb'>
                    <input class="formulaire" type="submit" value="Ajouter" name='validCompWeb'>
                </form>
                <div id="skillContentContainer">
                    <div id="skillContentContainer1">
                        <img src="./ban/bannirdev.php" alt="">
                            <?php 
                        $skillDev = $pdo->prepare('SELECT * FROM skill');
                        $skillDev->execute();
                        $keys = $skillDev->fetchAll();
                        foreach ($keys as $key) {
                            echo '<li class="devSkillName">'.$key['content'].'</li>'?><a id="supprComp" class="suppr" href="javascript:if(confirm('Etes vous sûr(e) de vouloir supprimer cette compétence ?')){window.location.href='./ban/bannirdev.php?idSkill=<?= $key["idSkill"]; ?>'}">Supprimer</a><hr>
                            <?php
                                }
                                ?>
                    </div>
                    <img src="./../img/logo/LogoSansBaseline.webp" alt="" id="imgNoahBo">
                    <div id="skillContentContainer2">
                            
                        <?php 
                        $skillWeb = $pdo->prepare('SELECT * FROM skillsweb');
                        $skillWeb->execute();
                        $keys = $skillWeb->fetchAll();
                        foreach ($keys as $key) {
                            echo '<li class="devSkillName">'.$key['contentWeb'].'</li>'?><a id="supprCompWeb" class="suppr" href="javascript:if(confirm('Etes vous sûr(e) de vouloir supprimer cette compétence ?')){window.location.href='./ban/bannirweb.php?idWeb=<?= $key["idWeb"]; ?>'}">Supprimer</a><hr>
                                    <?php
                                        }
                                        ?>
                    </div>
                </div>
        </div>
    </div>
    <div id="background">
        
        </div>
    <script src="../js/back.js"></script>
</body>
</html>