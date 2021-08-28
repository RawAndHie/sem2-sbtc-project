<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Trade extends Model
{
    use HasFactory;
    protected $table = 'trades';
    public function account(){
        return $this->hasOne(AccountClient::class, 'id', 'account_id');
    }
    public function category(){
        return $this->hasOne(Category::class, 'id', 'category_id');
    }

}
