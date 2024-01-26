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
        Schema::create('suppliers', function (Blueprint $table)
        {
            $table->id();
            $table->string('name_company');
            $table->string('cnpj');
            $table->string('address');
            $table->string('email');
            $table->string('phone_number');
            $table->timestamps();
        });
/*         Schema::table('books', function (Blueprint $table)
        {
            $table->foreignId('supplier_id')->constrained('suppliers');
        }); */

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('suppliers');
    }
};
