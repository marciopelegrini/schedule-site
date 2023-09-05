<?php

namespace App\Controllers\Super;

use App\Controllers\BaseController;
use App\Libraries\UnitService;
use CodeIgniter\Config\Factories;

class UnitsController extends BaseController
{
    private UnitService $unitService;

    public function __construct(){
        $this->unitService = Factories::class(UnitService::class);
    }

    public function index()
    {
        $data = [
            'title' => 'Unidades',
            'units' => $this->unitService->renderUnits()
        ];

        return view('Back/Units/index', $data);
    }
}
