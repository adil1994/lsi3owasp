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
    <link rel="stylesheet" href="css/about.css">

    <!-- Latest compiled and minified JavaScript -->

</head>
<body>
<?php
include('includes/header.html');
?>


<div class="container">

    <div class="page-header" id="banner">

        <link rel="stylesheet" type="text/css" href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css">
        <div class="container bootstrap snippet">
            <section id="team" class="white-bg padding-top-bottom">
                <div class="container bootstrap snippet">
                    <h1 class="section-title text-center page-title">Meet our team</h1>
                    <p class="section-description text-center">We are a small team with great skills. See the faces behind the lines of code. </p>
                    <div class="row member-content">
                        <div class="col-sm-3 col-sm-offset-1 member-thumb  fade-right in">
                            <img class="img-responsive img-center img-thumbnail img-circle" src="images/bahra.jpg" alt="">
                            <h4>Bahra Mohamed</h4>
                            <p class="title">Lead Designer &amp; Founder</p>
                        </div>
                        <div class="col-sm-7">
                            <div class="details">
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                                <ul class="social-content">
                                    <li><a href="mailto:mail@example.com"><i class="fa fa-envelope fa-fw"></i></a></li>
                                    <li><a href="#link"><i class="fa fa-twitter fa-fw"></i></a></li>
                                    <li><a href="#link"><i class="fa fa-facebook fa-fw"></i></a></li>
                                    <li><a href="#link"><i class="fa fa-linkedin fa-fw"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="row member-content right">
                        <div class="col-sm-3 col-sm-push-8 member-thumb">
                            <img class="img-responsive img-center img-thumbnail img-circle" src="images/hamza.jpg" alt="">
                            <h4>Hanafi Hamza</h4>
                            <p class="title">Designer</p>
                        </div>
                        <div class="col-sm-7 col-sm-pull-2">
                            <div class="details">
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                                <ul class="social-content">
                                    <li><a href="mailto:mail@example.com"><i class="fa fa-envelope fa-fw"></i></a></li>
                                    <li><a href="#link"><i class="fa fa-twitter fa-fw"></i></a></li>
                                    <li><a href="#link"><i class="fa fa-facebook fa-fw"></i></a></li>
                                    <li><a href="#link"><i class="fa fa-linkedin fa-fw"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="row member-content">
                        <div class="col-sm-3 col-sm-offset-1 member-thumb">
                            <img class="img-responsive img-center img-thumbnail img-circle" src="images/adil.jpg" alt="">
                            <h4>Bouktaib Adil</h4>
                            <p class="title">Lead Developer</p>
                        </div>
                        <div class="col-sm-7   ">
                            <div class="details">
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                                <ul class="social-content">
                                    <li><a href="mailto:mail@example.com"><i class="fa fa-envelope fa-fw"></i></a></li>
                                    <li><a href="#link"><i class="fa fa-twitter fa-fw"></i></a></li>
                                    <li><a href="#link"><i class="fa fa-facebook fa-fw"></i></a></li>
                                    <li><a href="#link"><i class="fa fa-linkedin fa-fw"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
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
