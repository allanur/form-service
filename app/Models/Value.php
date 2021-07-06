<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Value extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = ['property_id', 'value', 'order'];

    public function property()
    {
        return $this->belongsTo(Property::class);
    }
}
