<?php

namespace App\Models;

use App\Entities\Unit;
use CodeIgniter\Model;
use CodeIgniter\Exceptions\PageNotFoundException;

class UnitModel extends Model
{
    protected $DBGroup = 'default';
    protected $table = 'units';
    protected $primaryKey = 'id';
    protected $useAutoIncrement = true;
    protected $returnType = Unit::class;
    protected $useSoftDeletes = false;
    protected $protectFields = true;
    protected $allowedFields = [
        "name",
        "email",
        "phone",
        "coordinator",
        "address",
        "services",
        "starttime",
        "endtime",
        "servicetime",
        "active"
    ];

    // Dates
    protected $useTimestamps = true;
    protected $dateFormat = 'datetime';
    protected $createdField = 'created_at';
    protected $updatedField = 'updated_at';

    // Validation
    protected $validationRules = [];
    protected $validationMessages = [];
    protected $skipValidation = false;
    protected $cleanValidationRules = true;

    // Callbacks
    protected $allowCallbacks = true;
    protected $beforeInsert = [];
    protected $afterInsert = [];
    protected $beforeUpdate = [];
    protected $afterUpdate = [];
    protected $beforeFind = [];
    protected $afterFind = [];
    protected $beforeDelete = [];
    protected $afterDelete = [];

    public function findOrFail(int|string $id): object
    {
        $row = $this->find($id);

        return $row ?? throw new PageNotFoundException("Record {$id} not found.");

    }
}