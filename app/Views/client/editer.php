<div>
    <main>
        <div class="container-fluid">
            <h3 class="mt-4 text-center"><?php echo $titre; ?><div class="row">
            </h3>
            <form action="<?php echo base_url(); ?>/client/modification" method="post" autocomplete="off">
                <input type="hidden" name="id_cli" value="<?php echo $donnes['id_cli']; ?>" />
                <div class="form-group mt-2">
                    <div class="input-group">
                        <div class="input-group-addon">
                            <i class="fa fa-user"></i>
                        </div>
                        <input type="text" id="nom" name="nom" class="form-control" value="<?php echo $donnes['nom']; ?>" autofocus required />
                    </div>
                </div>
                <div class="form-group">
                    <div class="input-group">
                        <div class="input-group-addon">
                            <i class="fa fa-user"></i>
                        </div>
                        <input type="text" id="prenom" name="prenom" class="form-control" value="<?php echo $donnes['prenom']; ?>" required>
                    </div>
                </div>

                <div class="form-group mt-2">
                    <div class="input-group">
                        <div class="input-group-addon">
                            <i class="fa fa-user"></i>
                        </div>
                        <input type="text" id="adresse" name="adresse" class="form-control" value="<?php echo $donnes['adresse']; ?>" autofocus required />
                    </div>
                </div>
                <div class="form-group">
                    <div class="input-group">
                        <div class="input-group-addon">
                            <i class="fa fa-envelope"></i>
                        </div>
                        <input type="email" id="email" name="email" class="form-control" value="<?php echo $donnes['email']; ?>" required>
                    </div>
                </div>

                <div class="form-group mt-2">
                    <div class="input-group">
                        <div class="input-group-addon">
                            <i class="fa fa-phone"></i>
                        </div>
                        <input type="text" id="telephone" name="telephone" class="form-control" value="<?php echo $donnes['telephone']; ?>" autofocus required />
                    </div>
                </div>
            


                <a href="<?php echo base_url(); ?>/client" class="btn btn-warning">Annuler</a>
                <button type="submit" class="btn btn-success">Enregistrer</button>

            </form>
        </div>
    </main>

</div>