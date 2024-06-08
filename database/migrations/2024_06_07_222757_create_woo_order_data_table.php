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
		Schema::create('woo_order_data', function (Blueprint $table) {
			$table->integer('woo_id_data')->primary();
			$table->string('ord_id', 25)->nullable();
			$table->string('first_name', 30)->nullable();
			$table->string('last_name', 30)->nullable();
			$table->string('address_1', 40)->nullable();
			$table->string('address_2', 40)->nullable();
			$table->string('city', 30)->nullable();
			$table->string('state', 30)->nullable();
			$table->string('postcode', 10)->nullable();
			$table->string('email', 60)->nullable();
			$table->string('phone', 25)->nullable();
			$table->string('notas', 200)->nullable();
		});
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('woo_order_data');
    }
};
