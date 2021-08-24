<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Trade extends Model
{
    use HasFactory;

    public function account(){
        return $this->hasOne(AccountClient::class, 'account_id', 'account_id');
    }
}
