<div class="table-responsive table-responsive-data2 mt-3">

    <h1 class="text-center">Liste de clients restauré(s)</h1>
    <div class="container">
        <p>
            <a href="<?php echo base_url(); ?>/client" class="btn btn-warning">Annuler</a>
        </p>
    </div>
    <table class="table table-data2">
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
                <th>Réstaurer</th>
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
                    <td><?php echo $donne['prenom']; ?></td>
                    <td><?php echo $donne['adresse']; ?></td>
                    <td><?php echo $donne['email']; ?></td>
                    <td><?php echo $donne['telephone']; ?></td>

                    <td>


                        <a href="<?php echo base_url() . '/client/elimination/' . $donne['id_cli']; ?>">
                            <i class="fas fa-arrow-circle-up"></i>
                        </a>

                    </td>
                </tr>
            <?php } ?>

            </tr>
        </tbody>
    </table>
</div>