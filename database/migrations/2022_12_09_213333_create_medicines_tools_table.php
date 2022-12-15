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
        Schema::create('medicines_tools', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            // tool_name is a string
            $table->string('tool_name');
            // tool_type is a string
            $table->string('tool_type');
            $table->string('tool_image');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('medicines_tools');
    }
};
