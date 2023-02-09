<div>
    <main>
        <div class="container-fluid">
            <h3 class="mt-4 text-center"><?php echo $titre; ?><div class="row">
            </h3>
            <form action="<?php echo base_url(); ?>/commande/insertion" method="post" autocomplete="off">
                <div class="form-group mt-2">
                    <div class="input-group">
                        <div class="input-group-addon">
                            <i class="fa fa-user"></i>
                        </div>
                        <input type="text" id="nombre" name="nombre" placeholder="Nombre produit" class="form-control" autofocus required>
                    </div>
                </div>
                <div class="form-group">
                    <div class="input-group">
                        <div class="input-group-addon">
                            <i class="fa fa-envelope"></i>
                        </div>
                        <input type="text" id="nombre_com" name="nombre_com" placeholder="Nombre produit commandé" class="form-control" required>
                    </div>
                </div>
                <!-- <div class="form-group">
                    <div class="input-group">
                        <div class="input-group-addon">
                            <i class="fa fa-asterisk"></i>
                        </div>
                        <input type="text" id="active" name="a" placeholder="Nombre produit" class="form-control" autofocus required>
                    </div>
                </div> -->

                <a href="<?php echo base_url(); ?>/commande" class="btn btn-primary">Annuler</a>
                <button type="submit" class="btn btn-success">Enregistrer</button>

            </form>
        </div>
    </main>

</div>