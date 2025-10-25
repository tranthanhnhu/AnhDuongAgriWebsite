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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('slug')->unique();
            $table->text('short_description')->nullable();
            $table->longText('descriptions')->nullable();
            $table->text('additional_info')->nullable();
            $table->string('img_1')->nullable();
            $table->string('img_2')->nullable();
            $table->string('img_3')->nullable();
            $table->decimal('original_price', 10, 2)->nullable();
            $table->decimal('sale_price', 10, 2)->nullable();
            $table->foreignId('prod_category_id')->nullable()->constrained()->onDelete('set null');
            $table->boolean('is_featured')->default(false);
            $table->text('review')->nullable();
            $table->string('link_shoppe')->nullable();
            $table->string('link_fb')->nullable();
            $table->string('link_lazada')->nullable();
            $table->enum('status', ['active', 'inactive'])->default('active');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
