<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Shipment extends Model
{
    use HasFactory;
    protected $fillable =
    [
        'user_id', 'code',
        'sender_name',
        'sender_email',
        'sender_phone',
        'sender_address',
        'receiver_name',
        'receiver_email',
        'receiver_phone',
        'receiver_address',
        'status', 'percent',
        'payment_status',
        'shipment_date',
        'delivery_date',
        'description',
        'package_type',
        'amount',
    ];

    public function history(){
        return $this->hasMany(ShipmentHistory::class);
    }
    public function history2(){
        return $this->hasMany(ShipmentHistory::class)->orderByDesc('id')->get();
    }
}
