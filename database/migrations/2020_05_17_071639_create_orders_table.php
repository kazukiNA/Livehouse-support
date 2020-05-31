<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->increments('id');
            //$table->unsignedInteger('project_id')->nullable($value=true);
            $table->unsignedInteger('reward_id')->nullable($value=true);
            $table->integer('user_id');
            //$table->string('user_name');
            $table->integer('quantity')->nullable($value=true);
            $table->timestamps();
            //$table->foreign('project_id')->references('id')->on('projects');
            $table->foreign('reward_id')->references('id')->on('rewards');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('orders');
    }
}
