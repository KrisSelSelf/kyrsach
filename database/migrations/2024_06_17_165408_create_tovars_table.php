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
        Schema::create('tovars', function (Blueprint $table) {
            $table->id();
            $table->string('title', 100)->nullable()->default('text');
            $table->enum('Availability', ['Имеется', 'Не имеется'])->nullable()->default(['Имеется', 'Не имеется']);
            $table->smallInteger('Price')->nullable()->default('number');
            $table->string('description', 100)->nullable()->default('text');
            $table->string('Short_description', 100)->nullable()->default('text');
            $table->enum('Category', ['Праздничные', 'Свадебные', 'Монобукеты', 'Цветочные композиции', 'Поминальные'])->nullable()->default(['Праздничные', 'Свадебные', 'Монобукеты', 'Цветочные композиции', 'Поминальные']);
            $table->enum('Subcategory', ['День матери', '8 марта', '14 февраля', 'Цветные ', 'Монотонные','Односоставные ', 'Однотонные', 'Корзины с цветома', 'Коробки с цветами ', 'Винки','Цветы'])->nullable()->default(['День матери', '8 марта', '14 февраля', 'Цветные ', 'Монотонные','Односоставные ', 'Однотонные', 'Корзины с цветома', 'Коробки с цветами ', 'Винки','Цветы']);
            $table->enum('Seasonality', ['Димисезонные', 'Зимнии', 'Весеннии', 'Летнии', 'Осеннии'])->nullable()->default(['Димисезонные', 'Зимнии', 'Весеннии', 'Летнии', 'Осеннии']);
            $table->enum('Availability', ['Большой', 'Средний', 'Маленький'])->nullable()->default(['Большой', 'Средний', 'Маленький']);
            $table->enum('Type of material', ['Живые', 'Искуственные'])->nullable()->default(['Живые', 'Искуственные']);
            $table->binary('photo')->nullable()->default(12);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tovars');
    }
};
