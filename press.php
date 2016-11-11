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
<div class="navbar navbar-default navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <a href="index.html" class="navbar-brand">LSI 3 OWASP</a>
            <button class="navbar-toggle" type="button" data-toggle="collapse" data-target="#navbar-main">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
        </div>
        <div class="navbar-collapse collapse" id="navbar-main">
            <ul class="nav navbar-nav">
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="press.php" id="themes">Press <span class="caret"></span></a>
                    <ul class="dropdown-menu" aria-labelledby="themes">
                        <li><a href="press.php">All</a></li>
                        <li><a href="../paper/">Sport</a></li>
                        <li><a href="../readable/">Politics</a></li>
                        <li><a href="../sandstone/">Economie</a></li>
                        <li><a href="../simplex/">International</a></li>
                        <li><a href="../slate/">Europe</a></li>
                        <li><a href="../spacelab/">Africa</a></li>
                        <li><a href="../superhero/">America</a></li>
                    </ul>
                </li>
                <li>
                    <a href="../help/">Help</a>
                </li>
                <li>
                    <a href="http://news.bootswatch.com">Blog</a>
                </li>
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#" id="download">Darkly <span class="caret"></span></a>
                    <ul class="dropdown-menu" aria-labelledby="download">
                        <li><a href="http://jsfiddle.net/bootswatch/1172d9hh/">Open Sandbox</a></li>
                        <li class="divider"></li>
                        <li><a href="./bootstrap.min.css">bootstrap.min.css</a></li>
                        <li><a href="./bootstrap.css">bootstrap.css</a></li>
                        <li class="divider"></li>
                        <li><a href="./variables.less">variables.less</a></li>
                        <li><a href="./bootswatch.less">bootswatch.less</a></li>
                        <li class="divider"></li>
                        <li><a href="./_variables.scss">_variables.scss</a></li>
                        <li><a href="./_bootswatch.scss">_bootswatch.scss</a></li>
                    </ul>
                </li>
            </ul>

            <ul class="nav navbar-nav navbar-right">
                <li><a href="http://builtwithbootstrap.com/" target="_blank">Built With Bootstrap</a></li>
                <li><a href="Admin/index.html" >Administration</a></li>
            </ul>

        </div>
    </div>
</div>


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





    <footer>
        <div class="row">
            <div class="col-lg-12">

                <ul class="list-unstyled">
                    <li class="pull-right"><a href="#top">Back to top</a></li>
                    <li><a href="http://news.bootswatch.com" onclick="pageTracker._link(this.href); return false;">Blog</a></li>
                    <li><a href="http://feeds.feedburner.com/bootswatch">RSS</a></li>
                    <li><a href="https://twitter.com/bootswatch">Twitter</a></li>
                    <li><a href="https://github.com/thomaspark/bootswatch/">GitHub</a></li>
                    <li><a href="../help/#api">API</a></li>
                    <li><a href="../help/#support">Support</a></li>
                </ul>
                <p>Made by <a href="http://thomaspark.co" rel="nofollow">Thomas Park</a>. Contact him at <a href="/cdn-cgi/l/email-protection#1d697572707c6e5d7f7272696e6a7c697e75337e7270"><span class="__cf_email__" data-cfemail="8cf8e4e3e1edffcceee3e3f8fffbedf8efe4a2efe3e1">[email&#160;protected]</span><script data-cfhash='f9e31' type="text/javascript">/* <![CDATA[ */!function(t,e,r,n,c,a,p){try{t=document.currentScript||function(){for(t=document.getElementsByTagName('script'),e=t.length;e--;)if(t[e].getAttribute('data-cfhash'))return t[e]}();if(t&&(c=t.previousSibling)){p=t.parentNode;if(a=c.getAttribute('data-cfemail')){for(e='',r='0x'+a.substr(0,2)|0,n=2;a.length-n;n+=2)e+='%'+('0'+('0x'+a.substr(n,2)^r).toString(16)).slice(-2);p.replaceChild(document.createTextNode(decodeURIComponent(e)),c)}p.removeChild(t)}}catch(u){}}()/* ]]> */</script></a>.</p>
                <p>Code released under the <a href="https://github.com/thomaspark/bootswatch/blob/gh-pages/LICENSE">MIT License</a>.</p>
                <p>Based on <a href="http://getbootstrap.com" rel="nofollow">Bootstrap</a>. Icons from <a href="http://fortawesome.github.io/Font-Awesome/" rel="nofollow">Font Awesome</a>. Web fonts from <a href="http://www.google.com/webfonts" rel="nofollow">Google</a>.</p>

            </div>
        </div>

    </footer>


</div>


<script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
<script src="./js/bootstrap.min.js"></script>
<script src="./js/custom.js"></script>
<script type="text/javascript">/* <![CDATA[ */(function(d,s,a,i,j,r,l,m,t){try{l=d.getElementsByTagName('a');t=d.createElement('textarea');for(i=0;l.length-i;i++){try{a=l[i].href;s=a.indexOf('/cdn-cgi/l/email-protection');m=a.length;if(a&&s>-1&&m>28){j=28+s;s='';if(j<m){r='0x'+a.substr(j,2)|0;for(j+=2;j<m&&a.charAt(j)!='X';j+=2)s+='%'+('0'+('0x'+a.substr(j,2)^r).toString(16)).slice(-2);j++;s=decodeURIComponent(s)+a.substr(j,m-j)}t.innerHTML=s.replace(/</g,'&lt;').replace(/>/g,'&gt;');l[i].href='mailto:'+t.value}}catch(e){}}}catch(e){}})(document);/* ]]> */</script></body>
</html>
