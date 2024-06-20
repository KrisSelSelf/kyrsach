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
        Schema::create('zakazs', function (Blueprint $table) {
            $table->id();
            $table->foreignid (column:"User_id")->constrained()->cascadeOnDelete()->cascadeOnUpdate();
            $table->foreignid (column:"Tovar_id"->constrained()->cascadeOnDelete()->cascadeOnUpdate());
            $table->enum('Statys', ['Прмнят', 'Выполнен', 'Откланён'])->nullable()->default(['Прмнят', 'Выполнен', 'Откланён']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('zakazs');
    }
};
