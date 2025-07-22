<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

//php artisan make:model Address

class Address extends Model
{
    use HasFactory;

    protected $fillable = [
        'address',
        'user_id',

    ];

    //relationship with user optional
    public function user(){
        return $this->belongsTo(User::class);

    }

}
