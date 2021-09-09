<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TradeRequest extends Model
{
    use HasFactory;
    protected $table = 'trade_requests';
    public function myRequest(){
        return $this->hasOne(Trade::class, 'id', 'trade_id');
    }
    public function myTrade(){
        return $this->hasOne(Trade::class, 'id', 'trade_request_id');
    }
}
