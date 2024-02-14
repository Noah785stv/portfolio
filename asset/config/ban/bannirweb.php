<?php
require './../init.php';
session_start();

// echo 'GET parameters: ';
// print_r($_GET);


if(isset($_GET['idWeb']) && !empty($_GET['idWeb'])) {
    $getidSkillWeb = $_GET['idWeb'];
    $recupSkillWeb = $pdo->prepare('SELECT * FROM skillsweb WHERE idWeb = ?');
    $recupSkillWeb->execute(array($getidSkillWeb));
    if($recupSkillWeb->rowCount() > 0) {
        $bannirSkillWeb = $pdo->prepare('DELETE FROM skillsweb WHERE idWeb = ?');
        $bannirSkillWeb->execute(array($getidSkillWeb));

        header('Location: ./../back-office.php');
    }else{
        echo "Aucune compétence trouvée";
        exit();
    }
} else {
    echo "L'identifiant de la compétence web n'a pas été récupéré";
}

?>