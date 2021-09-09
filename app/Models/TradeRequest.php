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
    public function findAccountRequest(){
        return $this->hasOne(AccountClient::class, 'id', 'account_request_id');
    }

    public function getStatusColorAttribute(){

        if($this->status_trade == 1){
            return 'text-primary';
        }elseif ($this->status_trade == 2) {
            return 'text-warning';
        } else {
            return 'text-success';
        }
    }
    public function getStatusNameAttribute(){

        if($this->status_trade == 1){
            return 'Chưa trao đổi';
        }elseif ($this->status_trade == 2) {
            return 'Đang trao đổi';
        } else {
            return 'Đã xong';
        }
    }
}
