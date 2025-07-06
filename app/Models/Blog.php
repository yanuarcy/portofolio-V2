<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'description',
        'field_of_skill_id',
        'image',
    ];

    public function fieldOfSkill()
    {
        return $this->belongsTo(FieldOfSkill::class, 'field_of_skill_id');
    }
}
