<div>
    <main>
        <div class="container-fluid">
            <h3 class="mt-4 text-center"><?php echo $titre; ?><div class="row">
            </h3>
            <form action="<?php echo base_url(); ?>/categories/modification" method="post" autocomplete="off">
                <input type="hidden" name="id_cat" value="<?php echo $donnees['id_cat']; ?>" />
                <div class="form-group mt-2">
                    <div class="input-group">
                        <div class="input-group-addon">
                            <i class="fa fa-user"></i>
                        </div>
                        <input type="text" id="nom_cat" name="nom_cat" placeholder="Nom categorie" class="form-control" value="<?php echo $donnees['nom_cat']; ?>" autofocus required />
                    </div>
                </div>
                <div class="form-group">
                    <div class="input-group">
                        <div class="input-group-addon">
                            <i class="fa fa-envelope"></i>
                        </div>
                        <input type="text" id="nombre_cat" name="nombre_cat" placeholder="Nombre produit commandé" class="form-control" value="<?php echo $donnees['nombre_cat']; ?>" required>
                    </div>
                </div>
            

                <a href="<?php echo base_url(); ?>/categorie" class="btn btn-warning">Annuler</a>
                <button type="submit" class="btn btn-success">Enregistrer</button>

            </form>
        </div>
    </main>

</div>