<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function Order()
    {
        return $this->hasMany(Order::class);
    }

    public static function boot()
    {
        parent::boot();

        static::creating(function ($customer) {
            // Cek apakah tanggal tidak dikirimkan dari formulir
            if (empty($customer->tanggal)) {
                // Jika tidak, atur tanggal ke tanggal sekarang
                $customer->tanggal = now();
            }
        });
    }

}
