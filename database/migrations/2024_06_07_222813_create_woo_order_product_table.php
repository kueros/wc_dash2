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
		#Equivalente a (sf_dash) woo_order_product
		Schema::create('woo_order_product', function (Blueprint $table) {
			$table->integer('id')->primary();
			$table->string('order_id', 25)->nullable();
			$table->string('line_items_id', 25)->nullable();
			$table->string('line_items_quantity', 10)->nullable();
			$table->string('line_items_price', 50)->nullable();
			$table->string('line_items_sku', 60);
			$table->string('items_grams', 10)->nullable();
			$table->string('items_title', 40)->nullable();
			$table->string('depth', 10)->nullable();
			$table->string('height', 10)->nullable();
			$table->string('width', 10);
		});    
	}


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('woo_woo_order_productuct');
    }
};
