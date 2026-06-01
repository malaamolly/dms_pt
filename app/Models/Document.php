<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Document extends Model
{
    protected $fillable = [
    'client_id',
    'title',
    'file_path',
    'category_id',
    'uploaded_by',
    'status',
    'expired_date',
];

    // relasi ke client
    public function client()
{
    return $this->belongsTo(Client::class);
}

}