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

    public function getListPhotoAttribute(){
        $array_image = [];
        if ($this->image){
            $array_image = explode(',',$this->image);
        }
        return $array_image;
    }

    public function getFirstImgAttribute(){
        $array_image = $this->listPhoto;
        if (count($array_image) >0){
            return $array_image[0];
        } else {
            return 'https://t3.ftcdn.net/jpg/03/46/83/96/360_F_346839683_6nAPzbhpSkIpb8pmAwufkC7c5eD7wYws.jpg';
        }
    }

}
