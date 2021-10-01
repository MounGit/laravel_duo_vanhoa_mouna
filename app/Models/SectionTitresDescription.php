<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SectionTitresDescription extends Model
{
    use HasFactory;

    protected $table ="section_titres_descriptions";

    protected $fillable =[
    "titreheader",
    "sous_titreheader",
    "boutonheader",
    "url",
    "titreabout",
    "boutonabout",
    "titrefeatures",
    "sous_titrefeatures",
    "titreservice",
    "sous_titreservice",
    "titreportfolio",
    "sous_titreportfolio",
    "titretestimonials",
    "sous_titretestimonials",
    "titreteam",
    "sous_titreteam",
    "titrecontact",
    "sous_titrecontact"
];
}
