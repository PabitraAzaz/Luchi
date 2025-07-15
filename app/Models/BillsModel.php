<?php

namespace App\Models;

use CodeIgniter\Model;

class BillsModel extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'bills';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = [
        'bill_id',
        'invoice_number',
        'product_tag_no',
        'hsn',
        'product_name',
        'product_price',
        'product_quantity',
        'purchase_date',
        'customer_name',
        'customer_address',
        'state',
        'pincode',
        'customer_phone_number'
    ];

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


    public function checklogindata($email, $password)
    {
        $result = $this->select('')->where(['email' => $email, 'password' => $password])->first();

        // echo "<pre>";print_r($result);exit;
        return $result;
    }

    public function getData($email)
    {
        $result = $this->select()->where(['email' => $email])->first();
        return $result;
    }
}
