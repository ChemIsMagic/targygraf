<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUniversitiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('universities', function (Blueprint $table) {
            $table->increments('id');

            $table->string('name');
            $table->string('slug', 10)->collation('ascii_bin')->unique();
            $table->tinyInteger('row')->unsigned()->default(0);
            $table->tinyInteger('ordering')->unsigned()->default(0);

            $table->boolean('has_logo')->default(false);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('universities');
    }
}
