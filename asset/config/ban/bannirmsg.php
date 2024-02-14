<?php
require './../init.php';
session_start();

// echo 'GET parameters: ';
// print_r($_GET);

if(isset($_GET['id']) && !empty($_GET['id'])) {
    $getid = $_GET['id'];
    $recupUser = $pdo->prepare('SELECT * FROM messages WHERE id = ?');
    $recupUser->execute(array($getid));
    if($recupUser->rowCount() > 0) {
        $bannirUser = $pdo->prepare('DELETE FROM messages WHERE id = ?');
        $bannirUser->execute(array($getid));

        header('Location: ./../back-office.php?confirm=supp');
    }else{
        echo "Aucun message trouvé";
    }
} else {
    echo "L'identifiant du message n'a pas été récupéré";
}


?>