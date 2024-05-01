<?php

namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model
{
    protected $table            = 'users';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = [];

    protected bool $allowEmptyInserts = false;
    protected bool $updateOnlyChanged = true;

    protected array $casts = [];
    protected array $castHandlers = [];

    // Dates
    protected $useTimestamps = true;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

    // Validation
    protected $validationRules      = [];
    protected $validationMessages   = [];
    protected $skipValidation       = false;
    protected $cleanValidationRules = true;

    // Callbacks
    protected $allowCallbacks = true;
    protected $beforeInsert   = [];
    protected $afterInsert    = [];
    protected $beforeUpdate   = [];
    protected $afterUpdate    = [];
    protected $beforeFind     = [];
    protected $afterFind      = [];
    protected $beforeDelete   = [];
    protected $afterDelete    = [];


    public function check_for_login($username, $password, $restaurant_id)
    {

        //where clauses
        $where = [
            'username' => $username,
            'id_restaurant' => $restaurant_id,
            'blocked_until' => null, //não está bloqueado
            'active' => 1, //significa verdadeiro, se for 0, n é permitido fazer login
            'deleted_at' => null, //se o user n foi eliminado, ele obrigatoriamente tem de ter valor null
        ];
                //model
        $user = $this->where($where)->first();

        if(empty($user)){ // login inválido | se o usuário vem vazio, não existe login válido, a causa pode ser qualquer uma do '$where'
            return false;
        }

        if(!password_verify($password, $user['passwrd'])){ //login inválido | se não houver igualdade entre as duas senhas, retorna falso
            return false;
        }

        return $user; //login correto, vai me enviar o user pro meu 'auth.php'
    }
}
