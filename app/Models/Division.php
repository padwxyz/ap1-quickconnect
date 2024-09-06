<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Division extends Model
{
    use HasFactory;

    protected $fillable = ['name'];

    public function subdivisions()
    {
        return $this->hasMany(Subdivision::class);
    }

    public function contacts()
    {
        return $this->hasMany(Contact::class);
    }
}
