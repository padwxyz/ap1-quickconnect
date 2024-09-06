<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;

    protected $fillable = [
        'division_id',
        'subdivision_id',
        'photo_profile',
        'name',
        'email',
        'phone',
        'wa_link',
        'status' // Include status in fillable fields
    ];

    public function division()
    {
        return $this->belongsTo(Division::class);
    }

    public function subdivision()
    {
        return $this->belongsTo(Subdivision::class);
    }
}