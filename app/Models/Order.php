<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Customer;

class Order extends Model
{
    use HasFactory;

    protected $guarderd = ['id'];

    /**
     * relationship beetween Student and Student Assign Class
     *
     * @return Relationship
     * 
     */
    public function customer(){
        return $this->belongsTo(Customer::class);
    }
}
