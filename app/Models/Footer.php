<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Footer extends Model
{
    use HasFactory;

    protected $table = "footers";

    protected $fillable = ["titre", "link1", "link2", "link3", "link4", "link5"];
}
