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
        Schema::create('vetements', function (Blueprint $table) {
            $table->id();
            $table->string('nom');
            $table->float('prixdebase');
            $table->float('prixdevente');
            $table->boolean('TVA')->nullable()->default(false);
            $table->string('description');
            $table->binary('image')->nullable()->default(12);
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
        Schema::dropIfExists('vetements');
    }
};
