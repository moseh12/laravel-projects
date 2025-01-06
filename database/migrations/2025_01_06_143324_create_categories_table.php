<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCategoriesTable extends Migration
{
    public function up()
    {
        Schema::create('categories', function (Blueprint $table) {
            $table->id(); // ID
            $table->string('name'); // Name
            $table->string('image')->nullable(); // Image path (nullable)
            $table->json('subcategories')->nullable(); // JSON field for subcategories
            $table->json('custom_fields')->nullable(); // JSON field for custom fields
            $table->boolean('active')->default(true); // Active flag (default: true)
            $table->timestamps(); // created_at and updated_at
        });
    }

    public function down()
    {
        Schema::dropIfExists('categories');
    }
}
