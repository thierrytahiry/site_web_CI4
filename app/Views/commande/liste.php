<div class="table-responsive table-responsive-data2 mt-3">

    <h1 class="text-center">Liste de commandes</h1>
    <div class="container">
        <p>
            <a href="<?php echo base_url(); ?>/commande/ajouter" class="btn btn-info">Ajouter</a>
            <a href="<?php echo base_url(); ?>/commande/eliminer" class="btn btn-warning">Réstaurer</a>
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
                <th>Nombre</th>
                <th>Nombre commandé</th>
                <th>Active</th>
                <th>Date Commande</th>
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
                    <td><?php echo $donne['id_com']; ?></td>
                    <td>
                        <?php echo $donne['nombre']; ?>
                    </td>
                    <td class="desc"><?php echo $donne['nombre_com']; ?></td>
                    <td><?php echo $donne['active']; ?></td>
                    <td><?php echo $donne['created_at']; ?></td>

                    <td>


                        <a href="<?php echo base_url() . '/commande/editer/' . $donne['id_com']; ?>" class="btn btn-warning">
                            <i class="fas fa-pencil-alt"></i>
                        </a>
                        <a href="<?php echo base_url() . '/commande/annuler/' . $donne['id_com']; ?>" class=" btn btn-danger">
                            <i class="fas fa-trash"></i>
                        </a>

                    </td>
                </tr>
            <?php } ?>

            </tr>
        </tbody>
    </table>
</div>