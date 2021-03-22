<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateListingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('listings', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('address');
            $table->string('city');
            $table->string('state');
            $table->integer('zip');
            $table->float('price');
            $table->float('bed');
            $table->float('bath');
            $table->boolean('pool');
            $table->boolean('active');
            $table->json('photos');
            $table->integer('squarefeet');
            $table->date('date_listed');
            $table->json('history');
            $table->json('agents');
            $table->float('latitude');
            $table->float('longitude');
            $table->integer('views');
            $table->integer('saves');
            $table->integer('yearbuilt');
            $table->string('heating');
            $table->string('cooling');
            $table->string('parking');
            $table->string('applicances');
            $table->integer('hoa');
            $table->float('lot');
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
        Schema::dropIfExists('listings');
    }
}
