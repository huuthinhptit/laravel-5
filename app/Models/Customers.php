<?php

namespace App\Models;

use Eloquent as Model;

/**
 * Class Customers
 * @package App\Models
 * @version June 15, 2017, 3:01 am UTC
 */
class Customers extends Model
{

    public $table = 'customers';
    
    public $timestamps = false;



    public $fillable = [
        'name',
        'age',
        'phone',
        'created_at',
        'updated_at'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'name' => 'string',
        'age' => 'integer',
        'phone' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    
}
