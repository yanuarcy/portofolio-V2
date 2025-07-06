<?php

namespace App\Filament\Resources\FieldOfSkillResource\Pages;

use App\Filament\Resources\FieldOfSkillResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListFieldOfSkills extends ListRecords
{
    protected static string $resource = FieldOfSkillResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
