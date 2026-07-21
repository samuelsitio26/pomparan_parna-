<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Marga extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'slug',
        'branch_group',
        'description',
        'origin_region',
        'order_number',
    ];

    public function tarombos()
    {
        return $this->hasMany(Tarombo::class);
    }
}
