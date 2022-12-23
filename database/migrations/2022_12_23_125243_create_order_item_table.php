<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrderItemTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('order_item', function (Blueprint $table) {
            $table->bigInteger('order_id')->unique();
            $table->bigInteger('item_id')->unique();
            $table->Integer('quantity');

            $table->foreignId('order_id')->unique()->constrained('orders');
            $table->foreignId('item_id')->unique()->constrained('items');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('order_item');
    }
}
