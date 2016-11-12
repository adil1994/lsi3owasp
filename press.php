<?php
/**
 * Created by PhpStorm.
 * User: bouktaib
 * Date: 11/9/2016
 * Time: 6:28 PM
 */

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title> LSI 3 OWASP </title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <link rel="stylesheet" href="css/bootstrap.css" media="screen">
    <link rel="stylesheet" href="css/custom.min.css">
    <!-- Latest compiled and minified JavaScript -->

</head>
<body>
<?php
    include('includes/header.html');
?>


<div class="container">

    <div class="page-header" id="banner">
        <div class="row">
            <div class="col-lg-8 col-md-7 col-sm-6">
                <h1>Darkly</h1>
                <p class="lead">Flatly in night mode</p>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-3 col-md-3 col-sm-4">
                <div class="list-group table-of-contents">
                    <a class="list-group-item" href="./press.php">articles</a>
                    <a class="list-group-item" href="#buttons">Buttons</a>
                    <a class="list-group-item" href="#typography">Typography</a>
                    <a class="list-group-item" href="#tables">Tables</a>
                    <a class="list-group-item" href="#forms">Forms</a>
                    <a class="list-group-item" href="#navs">Navs</a>
                    <a class="list-group-item" href="#indicators">Indicators</a>
                    <a class="list-group-item" href="#progress-bars">Progress bars</a>
                    <a class="list-group-item" href="#containers">Containers</a>
                    <a class="list-group-item" href="#dialogs">Dialogs</a>
                </div>
            </div>
            <div class="col-lg-9 col-md-9 col-ms-8">
                <table class="table table-hover">
                    <tr>

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
                            $num = 1;
                            while ($article=$articles->fetch())
                            {
                                echo '<tr>';
                                echo '<td>  <img style="width: 250px; height: 150px;" src="'.$article["image"].'" alt="press_image"></td>';
                                echo '<td><h4><a href="press.php?id='.$article["id_article"].'">'.$article["titre"].'</h4></a><h6>'.$article["date_creation"].'</h6>';
                                echo ''.substr($article["contenu"], 0, 200).' ...';
                                echo '</td>';
                                echo '</tr>';
                                $num++;
                            }
                        }
                    ?>
                </table>
                <center>
                <ul class="pagination pagination-sm">
                    <li class="disabled"><a href="#">&laquo;</a></li>
                    <li class="active"><a href="#">1</a></li>
                    <li><a href="#">2</a></li>
                    <li><a href="#">3</a></li>
                    <li><a href="#">4</a></li>
                    <li><a href="#">5</a></li>
                    <li><a href="#">&raquo;</a></li>
                </ul>
                </center>
            </div>
        </div>
    </div>
</div>

<?php
include('includes/footer.php');
?>



<script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
<script src="./js/bootstrap.min.js"></script>
<script src="./js/custom.js"></script>
<script type="text/javascript">/* <![CDATA[ */(function(d,s,a,i,j,r,l,m,t){try{l=d.getElementsByTagName('a');t=d.createElement('textarea');for(i=0;l.length-i;i++){try{a=l[i].href;s=a.indexOf('/cdn-cgi/l/email-protection');m=a.length;if(a&&s>-1&&m>28){j=28+s;s='';if(j<m){r='0x'+a.substr(j,2)|0;for(j+=2;j<m&&a.charAt(j)!='X';j+=2)s+='%'+('0'+('0x'+a.substr(j,2)^r).toString(16)).slice(-2);j++;s=decodeURIComponent(s)+a.substr(j,m-j)}t.innerHTML=s.replace(/</g,'&lt;').replace(/>/g,'&gt;');l[i].href='mailto:'+t.value}}catch(e){}}}catch(e){}})(document);/* ]]> */</script></body>
</html>
