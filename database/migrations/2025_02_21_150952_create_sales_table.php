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
            $table->id();
            $table->integer('sale_code')->unique();
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('client_id');
            $table->unsignedBigInteger('branch_id');
            $table->decimal('total', 10, 2);
            $table->date('sale_date');
            $table->timestamps();

            $table->foreign('user_id')
            ->references('id')->on('users')
            ->onUpdate('cascade')->onDelete('restrict');

            $table->foreign('client_id')
            ->references('id')->on('clients')
            ->onUpdate('cascade')->onDelete('restrict');

            $table->foreign('branch_id')
            ->references('id')->on('branches')
            ->onUpdate('cascade')->onDelete('restrict');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sales');
    }
};
