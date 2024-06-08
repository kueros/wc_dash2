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
		Schema::create('woo_msj', function (Blueprint $table) {
			$table->integer('id_msj')->primary();
			$table->char('tienda_id', 40)->nullable();
			$table->char('order_id', 24)->nullable();
			$table->char('state', 20)->nullable();
			$table->text('comment')->nullable();
			$table->dateTime('datetime')->nullable();
			$table->longText('Aux1')->nullable();
			$table->longText('Aux2')->nullable();
			$table->dateTime('timestamp')->useCurrent()->useCurrentOnUpdate();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('woo_msj');
    }
};
