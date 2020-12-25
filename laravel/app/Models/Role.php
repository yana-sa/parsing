<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    use HasFactory;
    protected $table = 'roles';

    /**
     * All of the casts that are assigned this role.
     */
    public function casts()
    {
        return $this->morphedByMany(Cast::class, 'rollable');
    }

    /**
     * All of the videos that are assigned this role.
     */
    public function movies()
    {
        return $this->morphedByMany(Movie::class, 'rollable');
    }
}
