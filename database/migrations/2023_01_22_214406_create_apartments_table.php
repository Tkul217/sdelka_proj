<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up()
    {
        Schema::create('apartments', function (Blueprint $table) {
            $table->id();
            $table->text('title');
            $table->text('description');
            $table->text('salary');
            $table->text('type');
            $table->text('image')->nullable();
            $table->text('link');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('apartments');
    }
};
