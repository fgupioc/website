<!-- <button type="button" id="btn-pedido" class="btn btn-success btn-pedidos">Pedido</button> -->


<div class="modal fade" id="completarmodal" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                        aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="exampleModalLabel">Llenar Datos</h4>
            </div>
            <form role="form" id="formularioOrder" method="post" action="formOrder"
                  data-url="<?php echo bloginfo('url'); ?>/wp-admin/admin-ajax.php">
                <div class="modal-body">
                    <div class="message"></div>
                    <div class="form-group">
                        <label for="email">Email :</label>
                        <input type="email" class="form-control" id="emailorder" name="emailorder">
                    </div>
                    <div class="form-group">
                        <label for="email">Nombre :</label>
                        <input type="email" class="form-control" id="nombreorder" name="nombreorder">
                    </div>
                    <div class="form-group">
                        <label for="email">Apellidos :</label>
                        <input type="email" class="form-control" id="apellidosorder" name="apellidosorder">
                    </div>
                    <div class="form-group">
                        <label for="email">Telefono :</label>
                        <input type="email" class="form-control" id="telefonoorder" name="telefonoorder">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button"  class="btn btn-default" data-dismiss="modal">Close</button>
                    <button type="submit" id="btn-pedidoorder" class="btn btn-primary">Enviar</button>
                </div>
            </form>
        </div>
    </div>
</div>