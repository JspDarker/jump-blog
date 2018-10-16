<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Account extends Model
{
    //
    public function departments()
    {
        return $this->hasMany(Department::class);
    }
}
