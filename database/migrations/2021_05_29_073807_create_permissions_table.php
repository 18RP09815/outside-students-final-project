<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePermissionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('permissions', function (Blueprint $table) {
            $table->id();
            $table->string('registration_number');
            $table->string('landlord_names');
            $table->string('landlord_phone_number');
            $table->string('landlord_ID_number');
            $table->string('gender');
            $table->string('current_village');
            $table->string('current_cell');
            $table->string('current_sector');
            $table->string('academic_year');
            $table->string('all',40)->nullable()->default('all');
           
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
        Schema::dropIfExists('permissions');
    }
}
