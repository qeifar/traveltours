<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pic extends Model {

    protected $table = 'pics';
    protected $guarded = ['urlReturn'];

}
