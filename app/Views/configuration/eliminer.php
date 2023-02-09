<div class="table-responsive table-responsive-data2 mt-3">

    <h1 class="text-center">Liste de commandes restauré(s)</h1>
    <div class="container">
        <p>
            <a href="<?php echo base_url(); ?>/commande" class="btn btn-warning">Annuler</a>
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
                <th>Nombre</th>
                <th>Nombre commandé</th>
                <th>Active</th>
                <th>Date Commande</th>
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
                    <td><?php echo $donne['id_com']; ?></td>
                    <td>
                        <?php echo $donne['nombre']; ?>
                    </td>
                    <td class="desc"><?php echo $donne['nombre_com']; ?></td>
                    <td><?php echo $donne['active']; ?></td>
                    <td><?php echo $donne['created_at']; ?></td>

                    <td>


                        <a href="<?php echo base_url() . '/commande/elimination/' . $donne['id_com']; ?>">
                            <i class="fas fa-arrow-circle-up"></i>
                        </a>

                    </td>
                </tr>
            <?php } ?>

            </tr>
        </tbody>
    </table>
</div>