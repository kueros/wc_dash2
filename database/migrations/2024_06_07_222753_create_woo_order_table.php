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
		Schema::create('woo_order', function (Blueprint $table) {
			$table->integer('woo_id')->unique('woo_id');
			$table->string('ord_id', 25);
			$table->string('id_tienda', 50)->nullable();
			$table->dateTime('date_created');
			$table->string('order_key', 40);
			$table->string('customer', 125);
			$table->string('track_id', 40)->nullable();
			$table->string('resp_milo', 500)->nullable();
			$table->timestamp('date_update')->nullable()->useCurrentOnUpdate();
			$table->string('active', 2)->nullable();
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
