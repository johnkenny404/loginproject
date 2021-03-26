<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class loginproject_individualprofile extends Model
{
    use HasFactory;

    protected $table = 'loginproject_individualprofiles';

    protected $primaryKey = 'id';

    public function loginproject()
    {
        return $this->belongTo(loginproject::class);
    }
}
