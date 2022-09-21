<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Item;

class Order extends Model
{
    /**
     * ORDER ATTRIBUTES
     * $this->attributes['id'] - int - contains the article primary key (id)
     * $this->attributes['status'] - string - contains the order status
     * $this->attributes['dateOrder'] - date - contains the date of creation
     * $this->attributes['dateDelivery'] - date - contains the date of delivery
     * $this->attributes['paymentMethod'] - string - contains the payment method order 
        
     * $this->items[] - Item - child items of the order
     * $this->user - User - Owner of the orderr
     */ 
    
    protected $fillable = ['status','dateOrder','dateDelivery','paymentMethod'];

    public static function validate($request)
    {
        $request->validate([
            "status" => "required|max:255",
            "dateOrder" => "required|date",
            "dateDelivery" => "required|date",
            "paymentMethod"=> "required|max:255"
        ]);
    }


    public function getId()
    {
        return $this->attributes['id'];
    }

    public function setId($id)
    {
        $this->attributes['id'] = $id;
    }

    public function getStatus()
    {
        return $this->attributes['status'];
    }

    public function setStatus($status)
    {
        $this->attributes['status'] = $status;
    }

    public function getPaymentMethod()
    {
        return $this->attributes["paymentMethod"];
    }

    public function setPaymentMethod($paymentMethod)
    {
        $this->attributes["paymentMethod"] = $paymentMethod;
    }

    public function getDateOrder()
    {
        return $this->attributes['dateOrder'];
    }

    public function setDateOrder($dateOrder)
    {
        $this->attributes['dateOrder'] = $dateOrder;
    }

    public function getDateDelivery()
    {
        return $this->attributes['dateDelivery'];
    }

    public function setDateDelivery($dateDelivery)
    {
        $this->attributes['dateDelivery'] = $dateDelivery;
    }

    public function getItems()
    {
        return $this->items;
    }

    public function setItems($items)
    {
        $this->items = $items;
    }
    
    public function getUser()
    {
        return $this->User;
    }

    public function setUser($User)
    {
        $this->User = $User;
    }
    
    #public function items()
    #{
    #    return $this->hasMany(Item::class);
    #}
    
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}