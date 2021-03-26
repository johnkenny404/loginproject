<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class loginproject extends Model
{
    use HasFactory;

    protected $table = 'loginprojects';

    protected $primaryKey = 'id';

    public $timestamps = true;


    protected $guarded = [];

    public function loginproject_individualprofiles()
    {
        return $this->hasMany(loginproject_individualprofile::class);
    }


}
