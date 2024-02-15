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
        Schema::create('sales', function (Blueprint $table) {
            $table->uuid()->primary();
            $table->uuid('product_id');
            $table->foreign('product_id')
                ->references('uuid')
                ->on('users')
                ->onDelete('cascade');
            $table->uuid('seller_id');
            $table->foreign('seller_id')
                ->references('uuid')
                ->on('users')
                ->onDelete('cascade');
            $table->integer('count');
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
