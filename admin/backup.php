

<?php

    $command = ' zip -r ';

    if(isset($_POST['destination'])){

        if(isset($_POST['verbose']))
            $command = $command. '-p ';

        if(isset($_POST['encrypt']))
            $command = $command+ '-e ';

        $apppath = exec('cd .. &&  pwd');
        $command = $command.' '.$_POST['destination'].' '.$apppath;
        echo '<h1>'.exec($command).'</h1>';
    }

?>





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
        <hr>
        <?php if( !isset($_POST['destination'])) { ?>
            <div class="alert alert-dismissible alert-warning">
                <button type="button" class="close" data-dismiss="alert">&times;</button>
                <h4>Warning!</h4>

                <p> Warnning Dont close this operation or close your browser. Please wait until the loading is done and
                    your application is zipped and backued up or you risk losing all data in application !!!.</p>
            </div>
        <?php
        }
        else {
            ?>
            <div class="alert alert-dismissible alert-success">
                <button type="button" class="close" data-dismiss="alert">&times;</button>
                <strong>Well done!</strong> You successfully Saved your Application at this Destination : <strong><?php echo $_POST['destination']; ?></strong>
            </div>
        <?php
        }
        ?>



        <?php
            if(isset($_POST['verbose']) && $_POST['verbose']) {
        ?>
                <div class="well">
                    Verbose to be shown here
                </div>
        <?php
            }
        ?>

        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12">
                <div class="panel panel-default">
                    <div class="panel-body">
                        <form class="form-horizontal" action="backup.php" method="post">
                            <fieldset>
                                <legend>Backup Application</legend>
                                <div class="form-group">
                                    <label for="inputDestination" class="col-lg-2 control-label">Destination :</label>
                                    <div class="col-lg-10">
                                        <input name="destination" class="form-control" id="inputDestination" placeholder="Destination directory with file name" type="text">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="inputPassword" class="col-lg-2 control-label">Encryption Password :</label>
                                    <div class="col-lg-10">
                                        <input class="form-control" id="inputPassword" placeholder="Password" type="password">
                                        <div class="checkbox">
                                            <label>
                                                <input id="verbose" name="verbose" type="checkbox"> &nbsp; Verbose
                                            </label>
                                        </div>
                                        <div class="checkbox">
                                            <label>
                                                <input id="encrypt" name="encrypt" type="checkbox" checked="false"> &nbsp; Encrypt
                                            </label>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="col-lg-10 col-lg-offset-2">
                                        <button type="submit" class="btn btn-primary">Submit</button>
                                    </div>
                                </div>
                            </fieldset>
                        </form>
                    </div>
                </div>

            </div>

        </div>
    </div>
</div>

<?php
include("../includes/footer.php");
?>



<script src="../js/jquery-1.10.2.min.js"></script>
<script src="../js/bootstrap.min.js"></script>
<script src="../js/custom.js"></script>
<script type="text/javascript">/* <![CDATA[ */(function(d,s,a,i,j,r,l,m,t){try{l=d.getElementsByTagName('a');t=d.createElement('textarea');for(i=0;l.length-i;i++){try{a=l[i].href;s=a.indexOf('/cdn-cgi/l/email-protection');m=a.length;if(a&&s>-1&&m>28){j=28+s;s='';if(j<m){r='0x'+a.substr(j,2)|0;for(j+=2;j<m&&a.charAt(j)!='X';j+=2)s+='%'+('0'+('0x'+a.substr(j,2)^r).toString(16)).slice(-2);j++;s=decodeURIComponent(s)+a.substr(j,m-j)}t.innerHTML=s.replace(/</g,'&lt;').replace(/>/g,'&gt;');l[i].href='mailto:'+t.value}}catch(e){}}}catch(e){}})(document);/* ]]> */</script></body>

<script type="text/javascript">


    $(document).ready(function() {

        $('#encrypt').change(function() {
            $("#inputPassword").prop('disabled', !document.getElementById('encrypt').checked);
        });

    });
</script>

</html>
