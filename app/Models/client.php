<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    protected $fillable = [
        'client_name',
        'company_type',
        'address',
        'phone'
    ];

    public function documents()
    {
        return $this->hasMany(Document::class);
    }
}