<?php
include ('config.php');

if (isset($_POST['botton'])){
    $nom = $_POST['nom'];
    $prenom = $_POSt['prenom'];
    $sexe = $_POST['sexe'];
    $mariés = $_POST['marié'];
    $fruit = $_POST['fruit'];
    $sql = "INSERT INTO inscription  ('Nom','Prenom','age','sexe','marié','fruits') VALUE(?,?,?)";


    try{
        $valider = $conn->prepare($sql);
        $valider->execute([$nom, $prenom, $age]);
        header('location:index.php');
    }catch(PDOExeption $e) {
        echo "connection failed: " .$e->getMessage();
    }
}
?>