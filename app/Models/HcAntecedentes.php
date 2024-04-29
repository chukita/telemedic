<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HcAntecedentes extends Model
{
    use HasFactory;

    protected $table = 'hcantecedentes';
    protected $guarded = [];  // Asegúrate de que todos los campos están asignables masivamente.
}
