<?php

function ajouter_un_projet(){
    global $conn;
    if (isset($_POST['titreProjet']) && isset($_POST['imgProjet']) && isset($_POST['descProjet'])) {
        $titre_projet = $_POST['titreProjet'];
        $img_projet = $_POST['imgProjet'];
        $desc_projet = $_POST['descProjet'];
        // Requête d'insertion
        $sql = "INSERT INTO projets (titre, image, descriptif) VALUES ('$titre_projet', '$img_projet', '$desc_projet')";

        $conn->query($sql);
    }
}
function ajouter_une_compétence(){
    global $conn;
    if (isset($_POST['titreComp']) && isset($_POST['imgComp'])) {
        $titre_comp = $_POST['titreComp'];
        $img_comp = $_POST['imgComp'];

        // Requête d'insertion
        $sql = "INSERT INTO compétences (noms, image) VALUES ('$titre_comp', '$img_comp')";

        $conn->query($sql);
    }
}
global $conn;
if (isset($_POST['validComp']) && isset($_POST['titreComp'])) {
    $titre_comp = $_POST['titreComp'];
    // Requête d'insertion
    $pdo = "INSERT INTO skill (conent) VALUES ('$titre_comp')";
    $conn->query($pdo);
}
 ?>