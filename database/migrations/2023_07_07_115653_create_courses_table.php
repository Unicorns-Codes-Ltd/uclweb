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
        Schema::create('courses', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('slug');
            $table->string('cover');

            // price
            $table->decimal('current_price',10,2);
            $table->decimal('regular_price',10,2);
            $table->longtext('materials')->nullable();
            $table->longtext('short_description')->nullable();
            $table->longtext('description')->nullable();
            $table->longtext('curriculam')->nullable();
            $table->string('time_duration')->nullable();
            $table->string('media_link')->nullable();
            $table->string('rating_number')->nullable();
            $table->string('rating_quantity')->nullable();

            // instructor
            $table->unsignedBigInteger('instructor_id');
            $table->foreign('instructor_id')->references('id')->on('users');
            // creator
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users');
            // category
            $table->unsignedBigInteger('category_id')->nullable();
            $table->foreign('category_id')->references('id')->on('categories');

            $table->tinyInteger('status')->default(1)->comment('1 => pending, 2 => onreview, 3 => running');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('courses');
    }
};
