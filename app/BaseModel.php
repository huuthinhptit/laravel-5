<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BaseModel extends Model
{
    public static function getStatusList()
    {
        return [
            '1' => 'Enable',
            '0' => 'Disable'
        ];
    }
}