<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up()
    {
        Schema::create('buttons', function (Blueprint $table) {
            $table->id();
            $table->string('button_name');
            $table->integer('slider_id');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('buttons');
    }
};
