<!DOCTYPE html>
<html lang="en">
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


<div class="container">

    <div class="page-header" id="banner">
        <div class="row">
            <div class="col-lg-8 col-md-7 col-sm-6">
                <h1>LSI3 OWASP</h1>
                <p class="lead">security for begginers</p>
            </div>
        </div>

        <div class="alert alert-dismissible alert-info">
            <button type="button" class="close" data-dismiss="alert">&times;</button>
            <h4>TODO</h4>
            <p> Add Article to database </p>
        </div>


        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12">

            </div>

        </div>
    </div>
</div>

<?php
include("../includes/footer.php");
?>


<script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
<script src="../js/bootstrap.min.js"></script>
<script src="../js/custom.js"></script>
<script type="text/javascript">/* <![CDATA[ */(function(d,s,a,i,j,r,l,m,t){try{l=d.getElementsByTagName('a');t=d.createElement('textarea');for(i=0;l.length-i;i++){try{a=l[i].href;s=a.indexOf('/cdn-cgi/l/email-protection');m=a.length;if(a&&s>-1&&m>28){j=28+s;s='';if(j<m){r='0x'+a.substr(j,2)|0;for(j+=2;j<m&&a.charAt(j)!='X';j+=2)s+='%'+('0'+('0x'+a.substr(j,2)^r).toString(16)).slice(-2);j++;s=decodeURIComponent(s)+a.substr(j,m-j)}t.innerHTML=s.replace(/</g,'&lt;').replace(/>/g,'&gt;');l[i].href='mailto:'+t.value}}catch(e){}}}catch(e){}})(document);/* ]]> */</script></body>
</html>
