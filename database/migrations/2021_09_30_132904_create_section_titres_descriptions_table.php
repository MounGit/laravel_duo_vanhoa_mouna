<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSectionTitresDescriptionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('section_titres_descriptions', function (Blueprint $table) {
            $table->id();
            $table->string('titreheader');
            $table->string('sous_titreheader');
            $table->string('boutonheader');
            $table->string('titreabout');
            $table->string('sous_titreabout');
            $table->string('boutonabout');
            $table->string('titrefeatures');
            $table->string('sous_titrefeatures');
            $table->string('titreservice');
            $table->string('sous_titreservice');
            $table->string('titreportfolio');
            $table->string('sous_titreportfolio');
            $table->string('titretestimonials');
            $table->string('sous_titretestimonials');
            $table->string('titreteam');
            $table->string('sous_titreteam');
            $table->string('titrecontact');
            $table->string('sous_titrecontact');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('section_titres_descriptions');
    }
}
