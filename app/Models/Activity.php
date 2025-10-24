<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Activity extends Model
{

    protected $fillable = ['subject_id', 'type', 'grade', 'date'];

    // Esto convierte 'date' en un objeto Carbon automáticamente
    protected $casts = [
        'date' => 'datetime:Y-m-d',
    ];

    public function subject()
    {
        return $this->belongsTo(Subject::class);
    }
}