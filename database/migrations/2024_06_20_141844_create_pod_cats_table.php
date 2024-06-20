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
        Schema::create('pod_cats', function (Blueprint $table) {
            $table->id();
            $table->foreignid (column:"Tovar_id")->constrained()->cascadeOnDelete()->cascadeOnUpdate();
            $table->foreignid (column:"Tovar_Category")->constrained()->cascadeOnDelete()->cascadeOnUpdate();
            $table->enum('Subcategory', ['День матери', '8 марта', '14 февраля', 'Цветные ', 'Монотонные','Односоставные ', 'Однотонные', 'Корзины с цветома', 'Коробки с цветами ', 'Винки','Цветы'])->nullable()->default(['День матери', '8 марта', '14 февраля', 'Цветные ', 'Монотонные','Односоставные ', 'Однотонные', 'Корзины с цветома', 'Коробки с цветами ', 'Винки','Цветы']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pod_cats');
    }
};
