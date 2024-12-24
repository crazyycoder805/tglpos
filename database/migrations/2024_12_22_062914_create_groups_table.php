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
        Schema::create('groups', function (Blueprint $table) {
            $table->id();

            $table->text("groups")->nullable();

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
        Schema::dropIfExists('groups');
    }
};
