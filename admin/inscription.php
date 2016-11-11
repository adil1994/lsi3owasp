<?php
/**
 * Created by PhpStorm.
 * User: Mohamed
 * Date: 11/11/2016
 * Time: 20:58
 */
?>
<div class="modal fade" id="inscriptionModal" tabindex="-1" role="dialog"
     aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <!-- Entête du modal -->
            <div class="modal-header">
                <button type="button" class="close"
                        data-dismiss="modal">
                    <span aria-hidden="true">&times;</span>
                    <span class="sr-only">Close</span>
                </button>
                <h4 class="modal-title text-center" id="myModalLabel">Création d'un nouveau compte</h4>
            </div>

            <!-- Contenu du modal-->

            <div class="modal-body">

                <form class="form-horizontal" role="form" action="login.php" method="post">
                    <div class="form-group">
                        <label  class="col-sm-3 control-label" for="nom">Nom</label>
                        <div class="col-sm-6">
                            <input type="text" name="nom" class="form-control" id="nom" placeholder="Nom" required/>
                        </div>
                    </div>
                    <div class="form-group">
                        <label  class="col-sm-3 control-label" for="prenom">Prénom</label>
                        <div class="col-sm-6">
                            <input type="text" name="prenom" class="form-control" id="prenom" placeholder="Prénom" required/>
                        </div>
                    </div>
                    <div class="form-group">
                        <label  class="col-sm-3 control-label" for="adresse">Adresse</label>
                        <div class="col-sm-6">
                            <input type="text" name="adresse" class="form-control" id="adresse" placeholder="Adresse"/>
                        </div>
                    </div>
                    <div class="form-group">
                        <label  class="col-sm-3 control-label" for="userName">Login</label>
                        <div class="col-sm-6">
                            <input type="text" name="userName" class="form-control" id="userName" placeholder="User name" required/>
                        </div>
                    </div>
                    <div class="form-group">
                        <label  class="col-sm-3 control-label" for="passInscri">Password</label>
                        <div class="col-sm-6">
                            <input type="text" name="passInscri" class="form-control" id="passInscri" placeholder="Password" required/>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-sm-offset-3 col-sm-9">
                            <button type="submit" class="btn btn-default">Sign in</button>
                        </div>
                    </div>
                </form>

            </div>

            <!-- Modal Footer -->
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close </button>
            </div>
        </div>
    </div>
</div>