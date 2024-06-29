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
		Schema::create('woo_tiendas', function (Blueprint $table) {
			$table->id();
			$table->string('woo_id_tienda')->nullable();
			$table->string('url_create_order')->nullable();
			$table->string('url_create_order_milo')->nullable();
			$table->string('url_rate')->nullable();;
			$table->string('url_cancel_order')->nullable();
			$table->string('url_cancel_order_milo')->nullable();
			$table->string('url_logistica_inversa')->nullable();
			$table->string('url_download')->nullable();
			$table->string('shipping_id')->nullable();
			$table->string('key_shipping_id')->nullable();
			$table->string('path_log')->nullable();
			$table->timestamps();
		});
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('woo_tiendas');
    }
};
