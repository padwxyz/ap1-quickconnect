<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subdivision extends Model
{
    use HasFactory;

    protected $fillable = ['division_id', 'name'];

    public function division()
    {
        return $this->belongsTo(Division::class);
    }

    public function contacts()
    {
        return $this->hasMany(Contact::class);
    }
}
