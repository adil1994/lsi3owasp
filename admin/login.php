<?php
/**
 * Created by PhpStorm.
 * User: bouktaib
 * Date: 11/9/2016
 * Time: 6:43 PM
 */
session_start();
$_SESSION['login']=0;
$_SESSION['password']=0;


// dans cette partie en défini le niveau de sécurité

if(isset($_POST['my-checkbox']))
{
    $_SESSION['niveau'] = 1;
    echo " ana niveau haut :) ";
}
else
{
    $_SESSION['niveau'] = 0;
    echo "ana niveau par defaut";
}



// cette partie concernant la verification du login et du mot de passe

if(isset($_POST['login']) and isset($_POST['password']))
{
    $login=$_POST['login'];
    $pwd=$_POST['password'];

try
{
    // you need to delete the port option if you are working with 3306 port
    $bdd = new PDO('mysql:host=localhost;dbname=lsi3owasp', 'root', '');
}
catch (Exception $e)
{
    die('Erreur : ' . $e->getMessage());
}

    // si le niveau de vulnirabilité est faible
    if($_SESSION["niveau"]==0){


        $requet = $bdd->query('SELECT nom , prenom FROM user WHERE username=\'' . $login . '\' AND password=\'' . $pwd .'\'') or die(print_r($bdd->errorInfo()));

        $existe = count($requet->fetchAll());

       if($existe > 0)
       {

           $_SESSION['login']= $login;
           $_SESSION['password'] = $pwd;
           header('location:index.php');

       }
       else
           echo "<Strong><div align=\"center\" >vous devais saisir un login et mot de passe correctent </div></strong>";

    }

    // si le niveau de vulnirabilité est élevé
    else
    {
      $rep= $bdd->prepare('SELECT nom , prenom FROM user WHERE username=? AND password=?');

      $rep->execute(array($login,$pwd));

        if($resultat=$rep->fetch())
        {
            header('location:index.php');
        }
        else
            echo "<Strong><div align=\"center\" >vous devais saisir un login et mot de passe correctent </div></strong>";
        }

}


// dans cette partie en verifie les information du nouveau utilisateur

if(isset($_POST['nom']) and $_POST['prenom']){

    // utilisation du algorithme md5 pour les mots de passe et echappement du données saisi par l'utilisateur , selon le niveau de sécurité
    echo "je fonctionne ghada nkon wajda :) ";
}



?>

<html>
<head>
    <meta charset="UTF-8">
    <title>Authentification</title>
    <script src="../js/jquery.min.js"></script>
    <script src='../js/jquery-3.1.1.js'></script>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
    <link href="../css/bootstrap-switch.css" rel="stylesheet">
    <link rel="stylesheet" href="../css/normalize.css">
    <link rel="stylesheet" href="../css/loginStyle.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <script src="../js/prefixfree.min.js"></script>

</head>

<body>

<div class="wrapper">
    <form class="login"  action="login.php" method="post" id="loginForm">
        <p class="title">Log in</p>
        <input type="text" name="login" placeholder="login" autofocus/>
        <i class="fa fa-user"></i>
        <input type="password" name="password"  placeholder="Password" />
        <i class="fa fa-key"></i>
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

<script src="../js/jquery.min.js"></script>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.js "></script>
<script src="../js/bootstrap-switch.js"></script>

<script type="text/javascript">
    $("[name='my-checkbox']").bootstrapSwitch();
</script>

</body>

</html>