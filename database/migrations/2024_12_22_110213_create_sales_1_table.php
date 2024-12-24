<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('sales_1', function (Blueprint $table) {
            $table->id();
            $table->text("time")->nullable();
            $table->text("service_inv")->nullable();

            $table->text("service_barcode")->nullable();
            $table->text("service_description")->nullable();
            $table->text("service_sale_price")->nullable();
            $table->text("service_qty")->nullable();
            $table->text("service_tax")->nullable();
            $table->text("service_total")->nullable();
            $table->text("service_after_tax_total")->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sales_1');
    }
};
