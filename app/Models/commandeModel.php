<?php 
namespace App\Models;
use CodeIgniter\Model;

class commandeModel extends Model
{
    protected $table = 'commande';
    protected $primaryKey = 'id_com';

    protected $returnType = 'array';
    protected $useSoftDeletes = false;

    protected $allowedFields = ['nombre','nombre_com','active'];

    protected $useTimestamps = true;
    protected $createdField = 'created_at';
    protected $updatedField = 'updated_at';
    protected $deletedField = 'deleted_at';

    protected $validationRules = [];
    protected $validationMessages = [];
    protected $skipValidation = false;
}

?>