<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Order;

class Customer extends Model
{
    use HasFactory;


    protected $guarderd = ['id'];

    /**
     * relationship beetween Customer and his orders
     *
     * @return Relationship
     * 
     */
    public function orders(){
        return $this->hasMany(Order::class);
    }
}
