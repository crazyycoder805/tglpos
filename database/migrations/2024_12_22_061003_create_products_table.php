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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->text("batch_no")->nullable();
            $table->text("product_name")->nullable();
            $table->text("cost_price")->nullable();
            $table->text("sale_price")->nullable();
            $table->text("quantity")->nullable();
            $table->text("packing_size")->nullable();
            $table->text("reorder_level")->nullable();
            $table->date("expiry_date")->nullable();

            $table->unsignedBigInteger("section_id")->nullable();
            $table->foreign("section_id")->references("id")->on("sections")->cascadeOnDelete();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
