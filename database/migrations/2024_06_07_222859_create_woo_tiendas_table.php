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
			$table->string('razon_social')->nullable();
			$table->string('cuit')->nullable();
			$table->string('usr_api')->nullable();;
			$table->string('psw_api')->nullable();
			$table->string('f_alta')->nullable();
			$table->string('f_update')->nullable();
			$table->string('id_tienda')->nullable();
			$table->string('prefijo')->nullable();
			$table->string('ck_tienda')->nullable();
			$table->string('cs_tienda')->nullable();
			$table->string('url_tienda')->nullable();
			$table->string('activo')->default('SI');
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
