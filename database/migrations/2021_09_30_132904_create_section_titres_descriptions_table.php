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
            $table->text('sous_titreheader');
            $table->string('boutonheader');
            $table->string('titreabout');
            $table->text('sous_titreabout');
            $table->string('boutonabout');
            $table->string('titrefeatures');
            $table->text('sous_titrefeatures');
            $table->string('titreservice');
            $table->text('sous_titreservice');
            $table->string('titreportfolio');
            $table->text('sous_titreportfolio');
            $table->string('titretestimonials');
            $table->text('sous_titretestimonials');
            $table->string('titreteam');
            $table->text('sous_titreteam');
            $table->string('titrecontact');
            $table->text('sous_titrecontact');
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
