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
		Schema::create('woo_logs', function (Blueprint $table) {
			$table->integer('woo_log_id')->primary();
			$table->char('woo_ord_id', 40)->nullable();
			$table->char('woo_id_tienda', 40)->nullable();
			$table->longText('woo_data_log');
			$table->timestamp('woo_log_date')->nullable()->useCurrent()->useCurrentOnUpdate();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('woo_logs');
    }
};
