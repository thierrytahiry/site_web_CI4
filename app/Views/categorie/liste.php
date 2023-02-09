<div class="table-responsive table-responsive-data2 mt-3">

    <h1 class="text-center">Liste de categories</h1>
    <div class="container">
        <p>
            <a href="<?php echo base_url(); ?>/categories/ajouter" class="btn btn-info">Ajouter</a>
            <a href="<?php echo base_url(); ?>/categories/eliminer" class="btn btn-warning">Réstaurer</a>
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
                <th>Nom cat</th>
                <th>Nombre cat</th>
                <th>Active</th>
                <th>Date</th>
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
                    <td><?php echo $donne['id_cat']; ?></td>
                    <td>
                        <?php echo $donne['nom_cat']; ?>
                    </td>
                    <td class="desc"><?php echo $donne['nombre_cat']; ?></td>
                    <td><?php echo $donne['active']; ?></td>
                    <td><?php echo $donne['created_at']; ?></td>

                    <td>


                        <a href="<?php echo base_url() . '/categories/editer/' . $donne['id_cat']; ?>" class="btn btn-warning">
                            <i class="fas fa-pencil-alt"></i>
                        </a>
                        <a href="<?php echo base_url() . '/categories/annuler/' . $donne['id_cat']; ?>" class=" btn btn-danger">
                            <i class="fas fa-trash"></i>
                        </a>

                    </td>
                </tr>
            <?php } ?>

            </tr>
        </tbody>
    </table>
</div>