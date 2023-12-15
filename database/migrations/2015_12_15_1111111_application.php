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
        Schema::create('application', function (Blueprint $table) {
            $table->id();
            $table->foreignId('status_app')->references('id')->on('status');
            $table->foreignId('user_id')->references('id')->on('users');
            $table->string('address');
            $table->dateTime('date', $precision = 0);
            $table->foreignId('type_trash')->references('id')->on('trash_type');
            $table->string('comment');
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
        Schema::dropIfExists('application');
    }
};
