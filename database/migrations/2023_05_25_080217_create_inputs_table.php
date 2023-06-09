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
        Schema::create('inputs', function (Blueprint $table) {
            $table->increments('ip_id');
            $table->integer('ip_bill');
            $table->float('ip_vat');
            $table->dateTime('ip_dateinput');
            $table->dateTime('ip_datacreate');
            $table->unsignedInteger('sp_id');
            $table->foreign('sp_id')->references('sp_id')->on('suppliers')->onDelete('cascade');
            $table->timestamps();;
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('inputs');
    }
};
