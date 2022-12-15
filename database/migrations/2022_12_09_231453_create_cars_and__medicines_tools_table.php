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
        Schema::create('cars_and__medicines_tools', function (Blueprint $table) {
            // make cars_id and medicines_tools_id primary key
            $table->primary(['cars_id', 'medicines_tools_id']);
            $table->timestamps();
            // cars_id is a foreign key
            $table->foreignId('cars_id')->constrained()->onDelete('cascade');
            // medicines_tools_id is a foreign key
            $table->foreignId('medicines_tools_id')->constrained()->onDelete('cascade');
            // number is a integer field
            $table->integer('number');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cars_and__medicines_tools');
    }
};
