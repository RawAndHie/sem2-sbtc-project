<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ThanhPho extends Model
{
    use HasFactory;
    protected $table = 'tinhthanhpho';
    public function quanhuyen(){
        return $this->hasMany(QuanHuyen::class, 'matp', 'matp');
    }
}
