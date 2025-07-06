<?php

namespace App\Filament\Resources\FieldOfSkillResource\Pages;

use App\Filament\Resources\FieldOfSkillResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateFieldOfSkill extends CreateRecord
{
    protected static string $resource = FieldOfSkillResource::class;

    public static function afterCreate(): void
    {
        // Redirect ke halaman tabel setelah data berhasil dibuat
        redirect()->to('/admin/field-of-skills');
    }
}
