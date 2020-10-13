<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Webhooks extends Model
{
    use HasFactory;

    public function cities() {
    	return $this->belongsTo('App\Models\Cities');
    }
}
