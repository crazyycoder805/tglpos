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
        Schema::table('sales_1', function (Blueprint $table) {
            //
            $table->text("service_tax_value")->nullable();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('sales_1', function (Blueprint $table) {
            //
            $table->dropColumn([
                'service_tax_value',

            ]);
        });
    }
};
