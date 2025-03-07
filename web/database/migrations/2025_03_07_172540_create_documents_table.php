<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up()
    {
        Schema::create('documents', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('department');
            $table->string('file_path'); // Stores the file location
            $table->timestamps();
        });
    }
    

    public function down()
    {
        Schema::dropIfExists('documents'); // Drops the entire table
    }
};
