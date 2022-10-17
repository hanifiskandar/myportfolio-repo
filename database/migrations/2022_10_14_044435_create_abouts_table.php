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
        Schema::create('abouts', function (Blueprint $table) {
            $table->id();
            $table->text('title')->nullable();
            $table->string('job')->nullable();
            $table->text('short_intro')->nullable();
            $table->string('about_image')->nullable();
            $table->string('birthday')->nullable();
            $table->string('website')->nullable();
            $table->string('phone')->nullable();
            $table->string('city')->nullable();
            $table->string('age')->nullable();
            $table->string('degree')->nullable();
            $table->string('email')->nullable();
            $table->string('freelance')->nullable();
            $table->text('long_intro')->nullable();
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
        Schema::dropIfExists('abouts');
    }
};
