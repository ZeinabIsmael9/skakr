<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
use App\Models\Cart;  

class Client extends Model
{
    protected $fillable = [
        'full_name',
        'country',
        'address',
        'street',
        'city',
        'phone_number_1',
        'phone_number_2',
    ];
}
