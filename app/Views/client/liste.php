<div class="table-responsive table-responsive-data2 mt-3">

    <h1 class="text-center">Liste des clients</h1>
    <div class="container">
        <p>
            <a href="<?php echo base_url(); ?>/client/ajouter" class="btn btn-info">Ajouter</a>
            <a href="<?php echo base_url(); ?>/client/eliminer" class="btn btn-warning">Réstaurer</a>
        </p>
    </div>
    <table id="example1" class="table table-bordered table-striped">
        <thead class="container">
            <tr>
                <!-- <th>
                    <label class="au-checkbox">
                        <input type="checkbox">
                        <span class="au-checkmark"></span>
                    </label>
                </th> -->
                <th>Id</th>
                <th>Nom</th>
                <th>Prénom</th>
                <th>Adresse</th>
                <th>Email</th>
                <th>Téléphone</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($donnes as $donne) { ?>
                <tr class="tr-shadow">
                    <!-- <td>
                        <label class="au-checkbox">
                            <input type="checkbox">
                            <span class="au-checkmark"></span>
                        </label>
                    </td> -->
                    <td><?php echo $donne['id_cli']; ?></td>
                    <td>
                        <?php echo $donne['nom']; ?>
                    </td>
                    <td class="desc"><?php echo $donne['prenom']; ?></td>
                    <td><?php echo $donne['adresse']; ?></td>
                    <td><?php echo $donne['email']; ?></td>
                    <td><?php echo $donne['telephone']; ?></td>

                    <td>


                        <a href="<?php echo base_url() . '/client/editer/' . $donne['id_cli']; ?>" class="btn btn-warning">
                            <i class="fas fa-pencil-alt"></i>
                        </a>
                        <a href="<?php echo base_url() . '/client/annuler/' . $donne['id_cli']; ?>" class=" btn btn-danger">
                            <i class="fas fa-trash"></i>
                        </a>

                    </td>
                </tr>
            <?php } ?>

            </tr>
        </tbody>
    </table>
</div>