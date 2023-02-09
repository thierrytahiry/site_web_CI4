<div class="table-responsive table-responsive-data2 mt-3">

    <h1 class="text-center">Liste de produits</h1>
    <div class="container">
        <p>
        
            <a href="<?php echo base_url(); ?>/produit" class="btn btn-warning">Réstaurer</a>
        </p>
    </div>
    <table class="table table-data2">
        <thead class="container">
            <tr>

                <th>Id</th>
                <th>Nom Pro</th>
                <th>Quantité</th>
                <th>Prix</th>
                <th>Prix Unitaire</th>
                <th>Prix Total</th>
                <th>Produit Existe</th>
                <th>Stock</th>
                <th>Inventaire</th>
                <th>Nombre com</th>
                <th>Nom cat</th>
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
                    <td><?php echo $donne['id_pro']; ?></td>
                    <td>
                        <?php echo $donne['nom_pro']; ?>
                    </td>
                    <td class="desc"><?php echo $donne['quantite']; ?></td>
                    <td><?php echo $donne['prix']; ?></td>
                    <td><?php echo $donne['prix_unitaire']; ?></td>
                    <td><?php echo $donne['total_prix']; ?></td>
                    <td>
                        <?php echo $donne['existe']; ?>
                    </td>
                    <td class="desc"><?php echo $donne['stock']; ?></td>
                    <td><?php echo $donne['inventaire']; ?></td>
                    <td><?php echo $donne['id_commande']; ?></td>
                    <td><?php echo $donne['id_categorie']; ?></td>
                    <td><?php echo $donne['active']; ?></td>
                    <td><?php echo $donne['created_at']; ?></td>

                    <td>


                        <a href="<?php echo base_url() . '/produit/elimination/' . $donne['id_pro']; ?>">
                            <i class="fas fa-arrow-circle-up"></i>
                        </a>

                    </td>
                </tr>
            <?php } ?>

            </tr>
        </tbody>
    </table>
</div>