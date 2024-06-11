<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
		#Equivalente a (sf_dash) iflow_order_data
		Schema::create('woo_orders', function (Blueprint $table) {
			$table->id();
			$table->string('cli_id')->nullable();
			$table->string('order_id', 25);
			$table->string('shopId');
			$table->string('order_key', 40);
			$table->string('customer', 125);
			$table->string('tracking_id', 50);
			$table->string('shipment_id', 50);
			$table->string('print_url', 200);
			$table->string('code', 4);
			$table->string('resp_milo', 500)->nullable();
			$table->string('active', 2)->nullable();
			$table->timestamps();
        });
    }


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('woo_order');
    }
};
