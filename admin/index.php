<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title> LSI 3 OWASP Administration </title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <link rel="stylesheet" href="../css/bootstrap.css" media="screen">
    <link rel="stylesheet" href="../css/custom.min.css">

</head>
<body>

<?php

session_start();
include("../includes/headeradmin.php");



try{
    $bdd = new PDO('mysql:host=localhost;dbname=lsi3owasp;charset=utf8', 'root', '');
}
catch(Exception $e) {
    die('Erreur : '.$e->getMessage());
}

?>

<div class="container">

    <div class="page-header" id="banner">
        <div class="row">
            <div class="col-lg-8 col-md-7 col-sm-6">
                <h1>LSI3 OWASP</h1>
                <p class="lead">security for begginers</p>
            </div>
        </div>
        <hr>
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12">
                <table class="table table-hover">
                    <tr>
                        <th>Image</th>
                        <th>Titre</th>
                        <th>Description</th>
                        <th>Action</th>
                    </tr>

                    <?php
                    try{
                        $bdd = new PDO('mysql:host=localhost;dbname=lsi3owasp;charset=utf8', 'root', '');
                    }
                    catch(Exception $e) {
                        die('Erreur : '.$e->getMessage());
                    }

                    $articles=$bdd->query("select * from article");
                    if($articles->rowCount() > 0) {
                        while ($article=$articles->fetch())
                        {
                            echo '<tr>';
                            echo '<td>  <img style="width: 200px; height: 100px;" src="'.$article["image"].'" alt="press_image"></td>';
                            echo '<td><a href="../press.php?id='.$article["id_article"].'">'.substr($article["titre"],0,50).'...</a></td>';
                            echo '<td>'.substr($article["contenu"], 0, 50).' ...</td>';
                    ?>
                            <td>
                                <form method="POST" action="index.php">
                                    <input type="hidden" name="id_article" value="<?php echo $article["id_article"]?>" >
                                    <input onclick="deleteArticle(this)" class="btn btn-danger" name="delete" type="submit" value="delete">&nbsp;&nbsp;
                                    <input class="btn btn-warning" name="edit" type="submit" value="edit">
                                </form>
                            </td>
                            </tr>

                    <?php
                        }
                    }
                    ?>
                </table>
            </div>


        </div>
    </div>
</div>




<?php
include("../includes/footer.php");


if(isset($_POST["id_article"])){
    // low security
    if(isset($_SESSION["niveau"]) && $_SESSION["niveau"] == 0 ){
        $query="delete from article WHERE id_article=".$_POST["id_article"];
        $bdd->exec($query);
    }
}

?>
<script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
<script type="text/javascript">

        function deleteArticle(caller){
            $(caller).parent().submit(function () {
                $.ajax({
                    type: 'post',
                    url: 'index.php',
                    data: $(this).serialize(),
                    success: function (result) {
                        $(caller).parents('tr').fadeOut();
                    },
                    error : function(result){
                        alert(result);
                    },
                });
                return false;
            });
        }
</script>



<script src="../js/bootstrap.min.js"></script>
<script src="../js/custom.js"></script>
<script type="text/javascript">/* <![CDATA[ */(function(d,s,a,i,j,r,l,m,t){try{l=d.getElementsByTagName('a');t=d.createElement('textarea');for(i=0;l.length-i;i++){try{a=l[i].href;s=a.indexOf('/cdn-cgi/l/email-protection');m=a.length;if(a&&s>-1&&m>28){j=28+s;s='';if(j<m){r='0x'+a.substr(j,2)|0;for(j+=2;j<m&&a.charAt(j)!='X';j+=2)s+='%'+('0'+('0x'+a.substr(j,2)^r).toString(16)).slice(-2);j++;s=decodeURIComponent(s)+a.substr(j,m-j)}t.innerHTML=s.replace(/</g,'&lt;').replace(/>/g,'&gt;');l[i].href='mailto:'+t.value}}catch(e){}}}catch(e){}})(document);/* ]]> */</script>

</body>
</html>
