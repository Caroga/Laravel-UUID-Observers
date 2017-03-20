<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateConsumersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create(
            'consumers',
            function (Blueprint $table) {
                $table->engine = 'InnoDb';

                $table->uuid('id');
                $table->string('name');
                $table->string('url');
                $table->string('api_token')->nullable();
                $table->timestamps();

                $table->primary('id');
            }
        );
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('consumers');
    }
}
