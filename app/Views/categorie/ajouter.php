<div>
    <main>
        <div class="container-fluid">
            <h3 class="mt-4 text-center"><?php echo $titre; ?><div class="row">
            </h3>
            <?php \Config\Services::validation()->listErrors(); ?>
            <form action="<?php echo base_url(); ?>/categories/insertion" method="post" autocomplete="off">
                <?php csrf_field(); ?>
                <div class="form-group mt-2">
                    <div class="input-group">
                        <div class="input-group-addon">
                            <i class="fa fa-user"></i>
                        </div>
                        <input type="text" id="nom_cat" name="nom_cat" placeholder="Nom categorie" class="form-control" autofocus required>
                    </div>
                </div>
                <div class="form-group">
                    <div class="input-group">
                        <div class="input-group-addon">
                            <i class="fa fa-envelope"></i>
                        </div>
                        <input type="text" id="nombre_cat" name="nombre_cat" placeholder="Nombre categorie" class="form-control" required>
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

                <a href="<?php echo base_url(); ?>/categorie" class="btn btn-primary">Annuler</a>
                <button type="submit" class="btn btn-success">Enregistrer</button>

            </form>
        </div>
    </main>

</div>