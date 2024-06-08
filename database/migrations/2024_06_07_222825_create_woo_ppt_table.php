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
		Schema::create('woo_ppt', function (Blueprint $table) {
			$table->integer('woo_id_ppt')->primary();
			$table->string('store', 60);
			$table->string('country', 40);
			$table->string('cod_state', 4);
			$table->string('state', 40);
		});
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('woo_ppt');
    }
};
