<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'image',
        'field_of_skill_id',
    ];


    public function fieldOfSkill()
    {
        return $this->belongsTo(FieldOfSkill::class, 'field_of_skill_id');
    }
}
