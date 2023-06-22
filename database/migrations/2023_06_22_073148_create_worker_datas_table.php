<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('worker_datas', function (Blueprint $table) {
            $table->id();
            $table->string('career_id');
            $table->string('career_group');
            $table->string('name_career_th');
            $table->string('name_career_en');
            $table->string('name_career_arabic');            
            $table->string('name_img');           
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
        Schema::dropIfExists('worker_datas');
    }
};
