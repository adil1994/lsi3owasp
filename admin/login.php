<?php
session_start();
?>

<head>
    <meta charset="UTF-8">
    <title>Authentification</title>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
    <link href="../css/bootstrap-switch.css" rel="stylesheet">
    <link rel="stylesheet" href="../css/normalize.css">
    <link rel="stylesheet" href="../css/loginStyle.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src='../js/jquery-3.1.1.js'></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>



<?php
//===================================== code de traitement PHP ==========================================
$_SESSION['login']=0;
$_SESSION['password']=0;
$errorMessage = "";
$conteuError= "<div class=\"alert alert-danger\" role=\"alert\">
               <span class=\"glyphicon glyphicon-exclamation-sign\" aria-hidden=\"true\"></span>
               <span class=\"sr-only\">Error:</span>Login ou mot de passe invalide</div>";



//+++++++++++++++ inclusion du fichier de base de donneés
require("baseDeDonnee.php");


// dans cette partie en défini le niveau de sécurité
if(isset($_POST['my-checkbox']))
{
    $_SESSION['niveau'] = 1;
    echo "je suis le niveau haut";
}
else
{
    $_SESSION['niveau'] = 0;
    echo "je suis le niveau bas";
}


// cette partie concerne la verification du login et du mot de passe

if(isset($_POST['login']) and isset($_POST['password']))
{
    $login=$_POST['login'];

    // appel de la fonction de Hachage MD5
    $pwd= md5($_POST['password']);


    // si le niveau de vulnirabilité est faible en utilise simple query
    if($_SESSION["niveau"]==0){


        $requet = $bdd->query('SELECT id,nom , prenom FROM user WHERE username=\'' . $login . '\' AND password=\'' . $pwd .'\'') or die(print_r($bdd->errorInfo()));

        $existe = count($requet->fetchAll());

        if($existe > 0)
        {

            $_SESSION['login']= $login;
            $_SESSION['login']= $login;
            $_SESSION['password'] = $pwd;// TODO why this line ?

            header('location:index.php');

        }
        else
            $errorMessage= $conteuError;

    }

    // si le niveau de vulnirabilité est élevé en utilise les requettes préparés
    else
    {
        $rep= $bdd->prepare('SELECT nom , prenom FROM user WHERE username=? AND password=?');

        $rep->execute(array($login,$pwd));

        if($resultat=$rep->fetch())
        {
            header('location:index.php');
        }
        else
            $errorMessage= $conteuError;
    }

}


// dans cette partie en verifie les information du nouveau utilisateur

if(isset($_POST['nom']) and isset($_POST['prenom']) and isset($_POST['userName']) and isset($_POST['passInscri'])){

    $nom = htmlspecialchars($_POST['nom']);
    $prenom = htmlspecialchars($_POST['prenom']);
    $adresse = htmlspecialchars($_POST['adresse']);
    $use = htmlspecialchars($_POST['userName']);
    $passHache = md5($_POST['passInscri']); // appel de la fonction MD5 , pas besoin d'ajouter htmlspecialcharts ici
    $date = new DateTime();                 // en utilise la date system
    $dateCreation = $date->format('Y-m-d H:i:s');
    $role = 'user';

    $req = "insert into user (nom, prenom, adresse, username, password, date_creation, role) VALUES ('$nom','$prenom','$adresse','$use','$passHache','$dateCreation','$role')";

    $repo = insertUser($req , 'user');  // la fonction qui insert un utilisateur simple

    // affichage de dialog avec le message de l'opération
    ?>
    <script type="text/javascript">
        $(document).ready(function(){
            var msg = <?php echo(json_encode($repo)); ?>;
            $("#message").html(msg);
            $('#inscriptionEffectuer').modal('show');
        });
    </script>
    <?php

}

?>


<!-- =============================================== les balise HTML ==================================================-->
<html>


<body>

<div class="wrapper">
    <form class="login"  action="login.php" method="post" id="loginForm">
        <p class="title">Log in</p>
        <input type="text" name="login" placeholder="login" autofocus/>
        <i class="fa fa-user"></i>
        <input type="password" name="password"  placeholder="Password" />
        <i class="fa fa-key"></i>
        <div align="center"><?php echo $errorMessage; ?></div>
        <a href="#"  data-toggle="modal" data-target="#inscriptionModal">S'inscrire</a><br/><br/>
        <a href="#"  data-toggle="modal" data-target="#myModal">Modifier de niveau de sécurité</a>
        <button type="submit" form="loginForm">
            <i class="spinner"></i>
            <span class="state">Log in</span>
        </button>

    </form>
</div>

<!-- appel du fichier de onfiguration du niveau de sécurité-->
<?php include("niveauDeSecurite.php");?>


<!-- appel du fichier d'inscription du nouveau utilisateur-->
<?php include("inscription.php");?>


<!-- ici le dialog de reponse au requette d'inscription -->

<div id="inscriptionEffectuer" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"  aria-hidden="true" ">
<div class="modal-dialog">
    <div class="modal-content">
        <div class="modal-header " style="background-color: aqua">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            <div class="text-center"><i class="glyphicon glyphicon-user"></i> Inscription </div>
        </div>
        <div class="modal-body text-center">
            <div id="message" style="font-family: 'Times New Roman';font-size: large" ></div>
        </div>
    </div>
</div>



<script src="../js/bootstrap-switch.js"></script>
<script src="../js/prefixfree.min.js"></script>
<script type="text/javascript">
    $("[name='my-checkbox']").bootstrapSwitch();
</script>



</body>

</html>