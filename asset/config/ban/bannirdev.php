<?php
require './../init.php';
session_start();

// echo 'GET parameters: ';
// print_r($_GET);



if(isset($_GET['idSkill']) && !empty($_GET['idSkill'])) {
    $getidSkill = $_GET['idSkill'];
    $recupSkill = $pdo->prepare('SELECT * FROM skill WHERE idSkill = ?');
    $recupSkill->execute(array($getidSkill));
    if($recupSkill->rowCount() > 0) {
        $bannirSkill = $pdo->prepare('DELETE FROM skill WHERE idSkill = ?');
        $bannirSkill->execute(array($getidSkill));

        header('Location: ./../back-office.php');
    }else{
        echo "Aucune compétence trouvée";
        exit();
    }
} else {
    echo "L'identifiant de la compétence dev n'a pas été récupéré";
}

?>