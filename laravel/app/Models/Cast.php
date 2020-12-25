<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cast extends Model
{
    protected $table = 'casts';
    use HasFactory;

    public function roles()
    {
        return $this->morphToMany(Role::class, 'rollable');
    }
}
