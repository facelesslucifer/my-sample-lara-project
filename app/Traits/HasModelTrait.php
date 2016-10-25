<?php

namespace App\Traits;

trait HasModelTrait
{
    public function showStatusOf($record)
    {
        switch ($record) {
            case $record->status_id == 10:
                return 'Active';
                break;
            case $record->status_id == 7:
                return 'Inactive';
                break;
            default:
                return 'Inactive';
        }
    }
}