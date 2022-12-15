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
        Schema::create('user_and__tools', function (Blueprint $table) {
            // make user_id and medicine_tools_id primary key
            $table->primary(['user_id', 'medicines_tools_id']);
            $table->timestamps();
            // user_id is a foreign key
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
            // medicine_tools_id is a foreign key
            $table->foreignId('medicines_tools_id')->constrained()->onDelete('cascade');
            // amount is a integer field
            $table->integer('amount');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('user_and__tools');
    }
};
