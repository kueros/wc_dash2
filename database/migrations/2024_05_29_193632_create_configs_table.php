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
        Schema::create('configs', function (Blueprint $table) {
            $table->id();
            $table->string('woo_id_tienda');
            $table->string('url_create_order');
            $table->string('url_create_order_milo');
            $table->string('url_rate');
            $table->string('url_cancel_order');
            $table->string('url_cancel_order_milo');
            $table->string('url_logistica_inversa');
            $table->string('url_download');
            $table->string('shipping_id');
			$table->string('key_shipping_id');
			$table->string('path_log');
            $table->timestamps();
        });
    }

	/**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('configs');
    }
};
