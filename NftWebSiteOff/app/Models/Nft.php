<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Nft extends Model
{
    use HasFactory;
    protected $table ='nft';
    protected $fillable = [
        "title",
        "author",
        "token",
        "price",
        "nftcontent",
    ];
}
