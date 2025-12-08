<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Screening extends Model
{
    protected $fillable = [];

    public function __construct(array $attributes = [])
    {
        parent::__construct($attributes);

        $this->fillable = array_merge(
            ['respondent_id'],
            array_map(fn($i) => "q$i", range(1,15)),
            ['total_score','kategori']
        );
    }

    public function respondent()
    {
        return $this->belongsTo(Respondent::class);
    }
}
