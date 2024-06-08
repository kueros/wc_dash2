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
			$table->integer('woo_id_tienda')->primary();
			$table->string('razon_social', 30);
			$table->string('cuit', 13);
			$table->string('usr_api', 60);
			$table->string('psw_api', 60);
			$table->timestamp('f_alta')->useCurrent();
			$table->timestamp('f_update')->useCurrent()->useCurrentOnUpdate();
			$table->string('id_tienda', 30);
			$table->string('prefijo', 6)->nullable();
			$table->string('ck_tienda', 100);
			$table->string('cs_tienda', 100);
			$table->string('url_tienda', 100);
			$table->string('activo', 2)->nullable();
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
