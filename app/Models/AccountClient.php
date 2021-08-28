<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AccountClient extends Model
{
    protected $table = 'account_clients';
    use HasFactory;

    public function getListPhotoAttribute(){
        $array_image = [];
        if ($this->image_id){
            $array_image = explode(',',$this->image_id);
        }
        return $array_image;
    }
}
