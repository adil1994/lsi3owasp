<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="utf-8">
    <title> Add Article </title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <link rel="stylesheet" href="../css/bootstrap.css" media="screen">
    <link rel="stylesheet" href="../css/custom.min.css">
</head>

<body>
<?php
include("../includes/headeradmin.php");
?>
<script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>

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
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title"> new article <?php   ?></h3>
                    <h6 class="">fill up the boxes bellow to add a new article : <?php   ?></h6>
                </div>
                <div class="panel-body">

                    <?php

                        try{
                            $bdd = new PDO('mysql:host=localhost;dbname=lsi3owasp;charset=utf8', 'root', '');
                        }
                        catch(Exception $e) {
                            die('Erreur : '.$e->getMessage());
                        }

                        // low security
                        if(isset($_SESSION["niveau"]) && $_SESSION["niveau"] == 0 ){
                            if(isset($_POST["title"]) && isset($_POST["content"]) && isset($_POST["image"]) ){
                                $query="INSERT INTO article (titre,contenu,image,date_creation,date_modification,id_auteur) VALUES ( '".$_POST["title"]."', '".$_POST["content"]."', '".$_POST["image"]."', '".Date("y-m-d H:m:s")."', '".Date("y-m-d H:m:s")."', '".$_SESSION["id_user"]."')";
                                $bdd->query($query);
                            }
                        }

                        // high security
                        if(isset($_SESSION["niveau"]) && $_SESSION["niveau"] == 1 ){
                            if(isset($_POST["title"]) && isset($_POST["content"]) && isset($_POST["image"]) ){
                                $query="INSERT INTO article (titre,contenu,image,date_creation,date_modification,id_auteur) VALUES ( '".$_POST["title"]."', '".$_POST["content"]."', '".$_POST["image"]."', '".Date("y-m-d H:m:s")."', '".Date("y-m-d H:m:s")."', '".$_SESSION["id_user"]."')";
                                $bdd->query($query);
                            }
                        }

                    ?>
                    <form class="form-horizontal" action="add.php" method="post">
                        <div class="form-group">
                            <label for="inputTitle" class="col-lg-2 control-label">Title :</label>
                            <div class="col-lg-10">
                                <input name="title" class="form-control" id="inputTitle" placeholder="title of article" type="text">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputContent" class="col-lg-2 control-label">Content :</label>
                            <div class="col-lg-10">
                                <textarea name="content" class="form-control" id="inputContent" placeholder="content of article" type="text"></textarea>

                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputImage" class="col-lg-2 control-label">Image :</label>
                            <div class="col-lg-10">
                            <input name="image" class="form-control" id="inputImage" placeholder="image URL" type="text">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-lg-10 col-lg-offset-2">
                                <input  class="btn btn-primary" type="submit" value="add" name="add">
                            </div>
                        </div>
                    </form>
                    <div style="display: none;" id="messageAlert" class="alert alert-success">

                    </div>
                </div>
            </div>
            </div>

        </div>
    </div>
</div>

<?php
include("../includes/footer.php");
?>


<script type="text/javascript" >

    $('form').submit(function () {
        if($('input[name=title]').val()!='' && $('textarea[name=content]').val()!='' && $('input[name=image]').val()!='' ) {
            $.ajax({
                type: 'post',
                url: 'add.php',
                data: $(this).serialize(),
                success: function (result) {
                    $("#messageAlert").html('<button onclick="closeAlert(this)" type="button" class="close">&times;</button><p> article added successfuly </p>').slideDown();
                    $('input[name=title]').val('');
                    $('textarea[name=content]').val('');
                    $('input[name=image]').val('');
                }
            });
            return false;
        }
        else
        {
            $("#messageAlert").html('<button onclick="closeAlert(this)" type="button" class="close">&times;</button><p> please fill up all the boxes with some content  </p>').slideDown();
            return false;
        }

    });

    function closeAlert(caller){
        $(caller).parent().slideUp();
    }
</script>

<script src="../js/bootstrap.min.js"></script>
<script src="../js/custom.js"></script>
<script type="text/javascript">/* <![CDATA[ */(function(d,s,a,i,j,r,l,m,t){try{l=d.getElementsByTagName('a');t=d.createElement('textarea');for(i=0;l.length-i;i++){try{a=l[i].href;s=a.indexOf('/cdn-cgi/l/email-protection');m=a.length;if(a&&s>-1&&m>28){j=28+s;s='';if(j<m){r='0x'+a.substr(j,2)|0;for(j+=2;j<m&&a.charAt(j)!='X';j+=2)s+='%'+('0'+('0x'+a.substr(j,2)^r).toString(16)).slice(-2);j++;s=decodeURIComponent(s)+a.substr(j,m-j)}t.innerHTML=s.replace(/</g,'&lt;').replace(/>/g,'&gt;');l[i].href='mailto:'+t.value}}catch(e){}}}catch(e){}})(document);/* ]]> */</script></body>
</html>
