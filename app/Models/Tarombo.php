<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tarombo extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'title_degree',
        'generation_level',
        'parent_id',
        'marga_id',
        'gender',
        'biography',
    ];

    public function parent()
    {
        return $this->belongsTo(Tarombo::class, 'parent_id');
    }

    public function children()
    {
        return $this->hasMany(Tarombo::class, 'parent_id');
    }

    public function marga()
    {
        return $this->belongsTo(Marga::class);
    }
}
