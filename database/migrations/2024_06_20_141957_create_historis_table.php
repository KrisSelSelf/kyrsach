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
        Schema::create('historis', function (Blueprint $table) {
            $table->id();
            $table->foreignid (column:"User_id")->constrained()->cascadeOnDelete()->cascadeOnUpdate();
            $table->foreignid (column:"Zalaz_id")->constrained()->cascadeOnDelete()->cascadeOnUpdate();
            $table->foreignid (column:"Zakaz_Statys")->constrained()->cascadeOnDelete()->cascadeOnUpdate();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('historis');
    }
};
