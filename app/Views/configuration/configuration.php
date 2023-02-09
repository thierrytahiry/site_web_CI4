<div class="table-responsive table-responsive-data2 mt-3">

    <div class="container">
        <div>
            <main>
                <div class="container-fluid">
                    <h3 class="mt-4 text-center"><?php echo $titre; ?><div class="row">
                    </h3>

                    <?php if (isset($validation)) { ?>
                        <div class="alert alert-danger">
                            <?php echo $validation->error(); ?>
                        </div>

                    <?php } ?>

                    <form action="<?php echo base_url(); ?>/configuration/actualisation" method="post" autocomplete="off">
                        <div class="form-group">
                            <div class="row">
                                <div class="col-12 col-sm-6">
                                    <label for="">PC</label>
                                    <input class="form-control" id="ordinateur" name="ordinateur" type="text" value="<?php echo $nom['valeur'] ?>" required />
                                </div>
                                <div class="col-12 col-sm-6">
                                    <label for="">Souris</label>
                                    <input class="form-control" id="Souris" name="Souris" type="text" value="<?php echo $souris['valeur'] ?>" required />
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <div class="col-12 col-sm-6">
                                    <label for="">Clavier</label>
                                    <input class="form-control" id="Clavier" name="Clavier" type="text" value="<?php echo $clavier['valeur'] ?>" required />
                                </div>
                                <div class="col-12 col-sm-6">
                                    <label for="">Imprimante</label>
                                    <input class="form-control" id="Imprimante" name="Imprimante" type="text" value="<?php echo $imprimante['valeur'] ?>" required />
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <div class="col-12 col-sm-6">
                                    <label for="">Telephone</label>
                                    <input class="form-control" id="Telephone" name="Telephone" type="text" value="<?php echo $telephone['valeur'] ?>" required />
                                </div>
                                <div class="col-12 col-sm-6">
                                    <label for="">PC</label>
                                    <textarea class="form-control" name="pc" id="pc" required><?php echo $pc['valeur'] ?></textarea>
                                </div>
                            </div>
                        </div>


                        <a href="<?php echo base_url(); ?>/configuration" class="btn btn-primary">Annuler</a>
                        <button type="submit" class="btn btn-success">Enregistrer</button>

                    </form>
                </div>
            </main>

        </div>
    </div>

</div>