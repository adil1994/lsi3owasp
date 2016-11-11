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
$_SESSION['niveau'] = 1;

if(isset($_POST['login']) and isset($_POST['password']))
{
    $login=$_POST['login'];
    $pwd=$_POST['password'];

try
{
    // you need to delete the port option if you are working with 3306 port
    $bdd = new PDO('mysql:host=localhost;port=3307;dbname=lsi3owasp', 'root', '');
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
           header('location:index.html');

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
            header('location:index.html');
        }
        else
            echo "<Strong><div align=\"center\" >vous devais saisir un login et mot de passe correctent </div></strong>";
        }






}
?>
<html>
<head>
    <title>authentification</title>

</head>



<body>

<form action="login.php" method="post">
    <h1>&nbsp;</h1>
    <h1>&nbsp;</h1>
    <table align="center" border="2" width="200" height="300" cellspacing="2" cellpadding="3">
        <tr align="center">
            <td>Login </td>
            <td><input type="text" name="login" ></td>
        </tr>
        <tr align="center">
            <td>Passeword</td>
            <td><input type="password" name="password"></td>
            </div>
        </tr>
        <tr align="center">
            <td colspan="2" ><input type ="submit" name="connexion" value="Log in "></td>
        </tr>

</form>

<form action="login.php" method="post">
    <table align="center"  width="200">
        <tr align="center">
            <input type="hidden" name="insc">
            <td align="center" ><input type="submit" value="creer un nouveau compte"></td>
    </table>
</form>
<?php
if(isset($_POST['passe']))
    //header('location:home.php');


if(isset($_POST['insc']))
    header('location:inscription.php');

?>






</body>

</html>