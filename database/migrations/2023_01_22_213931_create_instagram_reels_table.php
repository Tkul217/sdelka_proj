<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up()
    {
        Schema::create('instagram_reels', function (Blueprint $table) {
            $table->id();
            $table->text('instagram_reels');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('instagram_reels');
    }
};
