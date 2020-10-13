<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cities extends Model
{
    use HasFactory;

    public function temperature() {
    	return $this->hasMany('App\Models\Temperature');
    }

    public function webhooks() {
    	return $this->hasMany('App\Models\Webhooks');
    }
}
