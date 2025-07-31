<?php

namespace App\Models;

use Database\Factories\SchoolYearFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SchoolYear extends Model
{
    /** @use HasFactory<SchoolYearFactory> */
    use HasFactory;

    protected $table = 'school_years';
    protected $fillable = ['name', 'start_year', 'end_year'];

    public function classrooms(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(Classroom::class);
    }
}
