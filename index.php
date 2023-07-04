<?php
session_start();

?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <link rel="stylesheet" href="style.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <header>
        <section class="haut">
            <div>
                <h1>Panneau d'aministration</h1>
            </div>
        </section>
    </header>

    <div>
        <ul>

            <a href="?bouton=acceuil">
                <li>acceuil</li>
            </a>
            <a href="?bouton=utilisateur">
                <li>Utilisateur</li>
            </a>
            <a href="?bouton=parametre">
                <li>Parametre</li>
            </a>
            <a href="?bouton=connexion">
                <li>connexion</li>
            </a>

        </ul>
    </div>





    <?php
if ($_GET['bouton']=='connexion') {
    echo '<form method ="POST">
    <input class="puut" type="submit" name="destroySession" value="Se deconnecter">
    </form>';
}
if (isset($_POST['destroySession'])) {
    session_destroy();
    echo 'deconnecté';
}
    if (empty($_SESSION)) {
        echo '<div class="btn">
        <form method="POST">
        <label class="puut" for="id">Identifiant</label>
        <input class="put" type="text" name="id">
        <label class="puut" mdp>Mot de passe</label>
        <input class="put"type="text" name="mdp">
        <input class="puut" type="submit" name="envoie" value="Se connecter">
       </div>
    </form> ';
    }


    if (isset($_POST ['envoie'])) {
        if ($_POST['id']== 'Dylan' && $_POST['mdp']== 'moulun') {
            $_SESSION['moi'] =[
                'nom' => 'moulun',
                'prenom' =>'Dylan'
            ];
            
            
    }}


   
    if ($_SESSION && $_GET['bouton']== 'utilisateur') {
        echo $_SESSION['deux']['nom'].'<br>'.$_SESSION['deux']['prenom'].'<br>'.$_SESSION['deux']['age'];

        $_SESSION['deux'] =[
            'nom' => 'moulun',
            'prenom' => 'dylan',
            'age' => '24 ans'
        ];
    }

    if ($_SESSION  && $_GET['bouton']== 'acceuil' ) {
        echo $_SESSION['trois']['bienvenue'].' '.$_SESSION['trois']['nom'].' '.$_SESSION['trois']['prenom'];


        $_SESSION['trois']=[
            'bienvenue' => 'Bienvenue',
            'nom' => 'moulun',
            'prenom' => 'dylan'
        ];
    }

    if ($_SESSION  && $_GET['bouton']== 'parametre' ) {
       echo '<div class="btn">
       <form method="POST">
       <label class="puut" for="nom">Nom</label>
       <input class="put" type="text" name="nom">
       <label class="puut" for="prenom">Prenom</label>
       <input class="put"type="text" name="prenom">
       <label class="puut" for="age">Age</label>
       <input class="put" type="texte" name="age">
       <label class="puut" for="role">Rôle</label>
       <input class="put" type="texte" name="role">
       <input class="puut" type="submit" name="modif" value="Modifier">
      </div>
   </form> ';

    }
    if (isset($_POST['modif'])){
        if (empty($_POST['Prenom']) || empty($_POST['Nom']) || empty($_POST['age']) || empty($_POST['role'])){ ?>
            <p class="alert error">Toutes les informations ont besoin d'être renseigné</p>
        <?php }
        else{
            $_SESSION['deux']['prenom'] = $_POST['prenom'];
            $_SESSION['deux']['nom'] = $_POST['nom'];
            $_SESSION['deux']['age'] = $_POST['age'];
            $_SESSION['deux']['role'] = $_POST['role'];
            ?>
            <p class="message confirmation">Les modification on étais enregistrer</p>
    <?php }
    }

     

    ?>

    <?php



    ?>



























    <!-- <form method="POST">
        <label for="id">Identifiant</label>
        <input type="text" name="id" id="id">
        <label for="nom">Nom</label>
        <input type="text" name=" nom" id="nom">
        <label for="prenom">Prenom</label>
        <input type="text" name="prenom" id="prenom">
        <label for="age">age</label>
        <input type="text" name="age" id="age">
        
        <input type="submit" name="envoyer">
    </form> -->
    <?php


    // if (isset($_POST['envoyer'])) {
    //     echo $_POST['id'];
    // }

    // if (isset($_POST['envoyer'])) {
    //     echo $_POST['nom'];
    // }

    // if (isset($_POST['envoyer'])) {
    //     echo $_POST['prenom'];
    // }

    // if (isset($_POST['envoyer'])) {
    //     echo $_POST['age'];
    // }

    ?>




</body>

</html>