<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddFieldsToPackages extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('packages', function (Blueprint $table) {
            $table->string('name', 50);
            $table->longText('description');
            $table->string('city', 50);
            $table->decimal('price', $precision = 5, $scale = 2);
            $table->date("departure");
            $table->date("arrival");
            $table->integer('nights');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('packages', function (Blueprint $table) {
            $table->string('name', 50);
            $table->longText('description');
            $table->string('city', 50);
            $table->decimal('price', $precision = 5, $scale = 2);
            $table->date("departure");
            $table->date("arrival");
            $table->integer('nights');
        });
    }
}
