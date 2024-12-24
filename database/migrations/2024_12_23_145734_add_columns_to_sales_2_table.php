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
        Schema::table('sales_2', function (Blueprint $table) {
            //
            $table->text("fbr_inv_number")->nullable();
            $table->text("qr_code")->nullable();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('sales_2', function (Blueprint $table) {
            //
            $table->dropColumn([
                'fbr_inv_number',
                'qr_code',

            ]);
        });
    }
};
