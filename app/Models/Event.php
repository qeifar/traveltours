<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Event
 * @package App\Models
 * @version March 10, 2019, 5:18 am UTC
 *
 * @property string title
 * @property date start_date
 * @property date end_date
 */
class Event extends Model
{
    use SoftDeletes;

    public $table = 'events';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'title',
        'start_date',
        'end_date'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'title' => 'string',
        'start_date' => 'date',
        'end_date' => 'date'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    
}
