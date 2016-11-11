<?php
/**
 * Created by PhpStorm.
 * User: Mohamed
 * Date: 11/11/2016
 * Time: 21:02
 */
?>
<div id="myModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"  aria-hidden="true" ">
<div class="modal-dialog">
    <div class="modal-content">
        <div class="modal-header">
            <button type="button" data-dismiss="modal" class="close"><span aria-hidden="true">×</span><span class="sr-only">Close</span></button>
            <div id="modal-switch-label" class="modal-title text-center">Modification de niveau de sécurité </div>
        </div>
        <div class="modal-body text-center">
            <form class="form-horizontal" role="form" action="login.php" method="post">
                <div class="form-group">
                    <label  class="col-sm-5 control-label"
                            for="nom">Niveau de sécurité élevé </label>
                    <div class="col-sm-4">
                        <input type="checkbox" name="my-checkbox" data-inverse>
                    </div>

                </div>


        </div>
        <!-- Modal Footer -->
        <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-default">Valider</button>
        </div>
        </form>
    </div>
</div>
</div>
