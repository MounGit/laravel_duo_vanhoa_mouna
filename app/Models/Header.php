<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Header extends Model
{
    use HasFactory;

    protected $table = "headers";

    protected $fillable = ["name", "nav1", "nav2", "nav3", "nav4", "nav5", "nav6", "nav7"];
}
