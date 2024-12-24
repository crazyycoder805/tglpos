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
        Schema::create('subsidaries', function (Blueprint $table) {
            $table->id();
            $table->text("code")->nullable();
            $table->text("description")->nullable();
            $table->text("name")->nullable();
            $table->text("address")->nullable();
            $table->text("phone_no")->nullable();
            $table->text("opu_balance")->nullable();
            $table->text("for_suppliers_or_for_clients")->nullable();

            $table->unsignedBigInteger("group_id")->nullable();
            $table->foreign("group_id")->references("id")->on("groups")->cascadeOnDelete();

            $table->unsignedBigInteger("sub_category_id")->nullable();
            $table->foreign("sub_category_id")->references("id")->on("sub_categories")->cascadeOnDelete();

            $table->unsignedBigInteger("category_id")->nullable();
            $table->foreign("category_id")->references("id")->on("categories")->cascadeOnDelete();

            $table->unsignedBigInteger("business_id")->nullable();
            $table->foreign("business_id")->references("id")->on("businesses")->cascadeOnDelete();

            $table->unsignedBigInteger("type_id")->nullable();
            $table->foreign("type_id")->references("id")->on("types")->cascadeOnDelete();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('subsidaries');
    }
};
