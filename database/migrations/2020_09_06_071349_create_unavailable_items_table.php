<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUnavailableItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('unavailable_items', function (Blueprint $table) {
            $table->increments('id');
            $table->String('ItemNo');
            $table->String('Date');
            $table->String('Model');
            $table->String('customerName');
            $table->String('phone');
            $table->string('salesperson');
            $table->boolean('iscompleted')->default(0);

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
        Schema::dropIfExists('unavailable_items');
    }
}
