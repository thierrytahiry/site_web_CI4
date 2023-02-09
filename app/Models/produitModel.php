<?php 
namespace App\Models;
use CodeIgniter\Model;

class produitModel extends Model
{
    protected $table = 'produits';
    protected $primaryKey = 'id_pro';

    protected $returnType = 'array';
    protected $useSoftDeletes = false;

    protected $allowedFields = ['nom_pro', 'quantite', 'prix', 'prix_unitaire', 'total_prix', 'existe', 'stock', 'inventaire', 'id_commande', 'id_categorie', 'active'];

    protected $useTimestamps = true;
    protected $createdField = 'created_at';
    protected $updatedField = 'updated_at';
    protected $deletedField = 'deleted_at';

    protected $validationRules = [];
    protected $validationMessages = [];
    protected $skipValidation = false;
}

?>