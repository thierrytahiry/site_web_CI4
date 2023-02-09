<div>
    <main>
        <div class="container-fluid">
            <h3 class="mt-4 text-center"><?php echo $titre; ?><div class="row">
            </h3>
            <form action="<?php echo base_url(); ?>/produit/insertion" method="post" autocomplete="off">
                <div class="form-group mt-2">
                    <div class="input-group">
                        <div class="input-group-addon">
                            <i class="fa fa-user"></i>
                        </div>
                        <input type="text" id="nom_pro" name="nom_pro" placeholder="Nombre produit" class="form-control" autofocus required>
                    </div>
                </div>
                <div class="form-group">
                    <div class="input-group">
                        <div class="input-group-addon">
                            <i class="fa fa-envelope"></i>
                        </div>
                        <input type="text" id="quantite" name="quantite" placeholder="Quantité" class="form-control" required>
                    </div>
                </div>
                <div class="form-group mt-2">
                    <div class="input-group">
                        <div class="input-group-addon">
                            <i class="fa fa-euro"></i>
                        </div>
                        <input type="text" id="prix" name="prix" placeholder="prix produit" class="form-control" autofocus required>
                    </div>
                </div>
                <div class="form-group">
                    <div class="input-group">
                        <div class="input-group-addon">
                            <i class="fa fa-dollar"></i>
                        </div>
                        <input type="text" id="prix_unitaire" name="prix_unitaire" placeholder="Prix utnitaire" class="form-control" required>
                    </div>
                </div>
                <div class="form-group mt-2">
                    <div class="input-group">
                        <div class="input-group-addon">
                            <i class="fa fa-euro"></i>
                        </div>
                        <input type="text" id="total_prix" name="total_prix" placeholder="Prix total" class="form-control" autofocus required>
                    </div>
                </div>
                <div class="form-group">
                    <div class="input-group">
                        <div class="input-group-addon">
                            <i class="fa fa-envelope"></i>
                        </div>
                        <input type="text" id="existe" name="existe" placeholder="Produit existe" class="form-control" required>
                    </div>
                </div>
                <div class="form-group mt-2">
                    <div class="input-group">
                        <div class="input-group-addon">
                            <i class="fa fa-user"></i>
                        </div>
                        <input type="text" id="stock" name="stock" placeholder="Stock de produit" class="form-control" autofocus required>
                    </div>
                </div>
                <div class="row form-group">
                    <div class="col col-md-3">
                        <label for="inventaire" class=" form-control-label">Inventaire</label>
                    </div>
                    <div class="col-12 col-md-9">
                        <select name="inventaire" id="inventaire" class="form-control">

                            <option value="1">Oui</option>
                            <option value="0">Non</option>
                        </select>
                    </div>
                </div>
                <div class="row form-group">
                    <div class="col col-md-3">
                        <label for="id_commande" class=" form-control-label">Commande</label>
                    </div>
                    <div class="col-12 col-md-9">
                        <select name="id_commande" id="id_commande" class="form-control">
                            <option value="0">Selectioner commande</option>
                            <?php foreach ($commande as $com) { ?>
                                <option value="<?php echo $com['nombre']; ?>"><?php echo $com['nombre']; ?></option>
                            <?php } ?>
                        </select>
                    </div>
                </div>
                <div class="row form-group">
                    <div class="col col-md-3">
                        <label for="id_categorie" class=" form-control-label">Categorie</label>
                    </div>
                    <div class="col-12 col-md-9">
                        <select name="id_categorie" id="id_categorie" class="form-control">
                            <option value="0">Selectioner categorie</option>
                            <?php foreach ($categorie as $cat) { ?>
                                <option value="<?php echo $cat['nom_cat']; ?>"><?php echo $cat['nom_cat']; ?></option>
                            <?php } ?>
                        </select>
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

                <a href="<?php echo base_url(); ?>/produit" class="btn btn-primary">Annuler</a>
                <button type="submit" class="btn btn-success">Enregistrer</button>

            </form>
        </div>
    </main>

</div>