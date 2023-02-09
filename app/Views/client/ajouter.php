<div>
    <main>
        <div class="container-fluid">
            <h3 class="mt-4 text-center"><?php echo $titre; ?><div class="row">
            </h3>
            <form action="<?php echo base_url(); ?>/client/insertion" method="post" autocomplete="off">
                <div class="form-group mt-2">
                    <div class="input-group">
                        <div class="input-group-addon">
                            <i class="fa fa-user"></i>
                        </div>
                        <input type="text" id="nom" name="nom" placeholder="Nom client" class="form-control" autofocus required>
                    </div>
                </div>
                <div class="form-group">
                    <div class="input-group">
                        <div class="input-group-addon">
                            <i class="fa fa-user"></i>
                        </div>
                        <input type="text" id="prenom" name="prenom" placeholder="Prénom client" class="form-control" required>
                    </div>
                </div>
                <div class="form-group">
                    <div class="input-group">
                        <div class="input-group-addon">
                            <i class="fa fa-asterisk"></i>
                        </div>
                        <input type="text" id="adresse" name="adresse" placeholder="Adresse client" class="form-control" autofocus required>
                    </div>
                </div>
                <div class="form-group">
                    <div class="input-group">
                        <div class="input-group-addon">
                            <i class="fa fa-envelope"></i>
                        </div>
                        <input type="email" id="email" name="email" placeholder="Adresse email client" class="form-control" required>
                    </div>
                </div>
                <div class="form-group">
                    <div class="input-group">
                        <div class="input-group-addon">
                            <i class="fa fa-phone"></i>
                        </div>
                        <input type="text" id="telephone" name="telephone" placeholder="Numéro téléphone client" class="form-control" autofocus required>
                    </div>
                </div>

                <a href="<?php echo base_url(); ?>/client" class="btn btn-primary">Annuler</a>
                <button type="submit" class="btn btn-success">Enregistrer</button>

            </form>
        </div>
    </main>

</div>