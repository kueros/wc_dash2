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
		Schema::create('woo_order_product', function (Blueprint $table) {
			$table->integer('woo_id_prod')->primary();
			$table->string('ord_id', 25)->nullable();
			$table->string('items_id', 25)->nullable();
			$table->string('items_sku', 60);
			$table->string('items_title', 40)->nullable();
			$table->string('items_quantity', 8)->nullable();
			$table->string('items_grams', 4)->nullable();
			$table->string('items_price', 8)->nullable();
			$table->string('depth', 4)->nullable();
			$table->string('height', 4)->nullable();
			$table->string('width', 4);
		});    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('woo_order_product');
    }
};
