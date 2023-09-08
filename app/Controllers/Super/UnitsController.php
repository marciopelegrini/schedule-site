<?php

namespace App\Controllers\Super;

use App\Controllers\BaseController;
use App\Libraries\UnitService;
use App\Models\UnitModel;
use CodeIgniter\Config\Factories;

class UnitsController extends BaseController
{
    private UnitService $unitService;
    private UnitModel $unitModel;

    public function __construct()
    {
        $this->unitService = Factories::class(UnitService::class);
        $this->unitModel = model(UnitModel::class);
    }

    public function index()
    {
        $data = [
            'title' => 'Unidades',
            'units' => $this->unitService->renderUnits()
        ];

        return view('Back/Units/index', $data);
    }

    public function edit(int $id)
    {
        $data = [
            'title' => "Edit unity",
            'unit' => $unit = $this->unitModel->findOrFail($id),
            'timesInterval' => $this->unitService->renderTimesInterval($unit->servicetime)
        ];

        return view('Back/Units/edit', $data);
    }
}