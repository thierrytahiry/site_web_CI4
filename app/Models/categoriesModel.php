<?php 
namespace App\Models;
use CodeIgniter\Model;

class categoriesModel extends Model
{
    protected $table = 'categories';
    protected $primaryKey = 'id_cat';

    protected $returnType = 'array';
    protected $useSoftDeletes = false;

    protected $allowedFields = ['nom_cat', 'nombre_cat','active'];

    protected $useTimestamps = true;
    protected $createdField = 'created_at';
    protected $updatedField = 'updated_at';
    protected $deletedField = 'deleted_at';

    protected $validationRules = [];
    protected $validationMessages = [];
    protected $skipValidation = false;
}

?>