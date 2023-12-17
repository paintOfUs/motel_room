<?php

namespace App\Models;

use Brick\Math\BigInteger;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class post extends Model
{
    use HasFactory;

     /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string, BigInteger>
     */
    protected $fillable = ['id','title', 'description', 'categories', 'street', 'district', 'city','area','contact_person','phone','user_id','img'];
}
