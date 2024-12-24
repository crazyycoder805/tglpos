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
        Schema::create('sales_2', function (Blueprint $table) {
            $table->id();
            $table->text("service_inv")->nullable();
            $table->text("customer_name")->nullable();
            $table->text("total_qty")->nullable();
            $table->text("total_amount_before_tax")->nullable();
            $table->text("total_amount_after_tax")->nullable();
            $table->text("discount_in_percentage")->nullable();
            $table->text("discounted_final_amount")->nullable();
            $table->text("amount_received")->nullable();
            $table->text("change_return")->nullable();
            $table->text("time")->nullable();
            $table->text("date")->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sales_2');
    }
};
