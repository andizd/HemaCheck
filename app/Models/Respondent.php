<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Respondent extends Model
{
    protected $fillable = [
        'name', 'gender', 'age', 'occupation', 'education', 'weight', 'height'
    ];

    public function screenings()
    {
        return $this->hasOne(Screening::class);
    }
}
