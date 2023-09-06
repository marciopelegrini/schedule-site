<?php

namespace App\Libraries;
use App\Models\UnitModel;
use App\Entities\Unit;

class UnitService extends MyBaseService {
    /**
     * render html Table
     */
    public function renderUnits(): string
    {
        $units = model(UnitModel::class)->orderBy('name', 'ASC')->findAll();

        if(empty($units)) {
            return self::TEXT_FOR_NO_DATA;
        }

        $this->htmlTable->setHeading('Actions', 'Name', 'E-mail', 'Phone', 'Start', 'End', 'Created');

        foreach ($units as $unit) {
            $this->htmlTable->addRow(
                [
                    $this->renderBtnActions($unit),
                    $unit->name,
                    $unit->email,
                    $unit->phone,
                    $unit->starttime,
                    $unit->endtime,
                    $unit->created_at,
                ]
            );
        }

        return $this->htmlTable->generate();
    }

    private function renderBtnActions(Unit $unit): string
    {
        $btnActions = '<div class="btn-group dropup">';
        $btnActions .= '<button type="button" class="btn btn-primary btn-sm dropdown-toggle" data-toggle="dropdown" 
                        aria-haspopup="true" aria-expanded="false">Actions</button>';
        $btnActions .= '<div class="dropdown-menu">';
        $btnActions .= anchor(route_to('units.edit', $unit->id), 'Edit', ['class'=>'dropdown-item']);
        $btnActions .= '<a class="" href="#">Action</a>';
        $btnActions .= '<a class="dropdown-item" href="#">Action</a>';
        $btnActions .= '</div></div>';
        
        return $btnActions;
    }
}