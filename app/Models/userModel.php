<?php

namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model
{
    protected $table      = 'users'; // Make sure this matches your table name
    protected $primaryKey = 'id';

    protected $useAutoIncrement = true;
    protected $returnType     = 'array';
    protected $useSoftDeletes = false;

    // Allowed fields to insert into the table
    protected $allowedFields = ['full_name', 'mobile_number', 'email', 'password', 'department', 'instagram_id', 'profile_link'];

    // Time fields (optional, depending on your DB schema)
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

    // Validation rules (optional, depending on your needs)
    protected $validationRules    = [];
    protected $validationMessages = [];
    protected $skipValidation     = false;



}
?>
