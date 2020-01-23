<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDetailTransactionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detail_transactions', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('transaction_id');
            $table->unsignedBigInteger('hipam_price_id');
            $table->unsignedBigInteger('hipam_type_id');
            $table->integer('qty');
            $table->integer('price');
            $table->integer('subtotal');
            $table->softDeletes();
            $table->timestamps();
            
            $table->foreign('transaction_id')->references('id')->on('transactions');
            $table->foreign('hipam_price_id')->references('id')->on('hipam_prices');
            $table->foreign('hipam_type_id')->references('id')->on('hipam_types');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('detail_transactions');
    }
}
