<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * $table->id();
     * $table->foreignId('division_id')->constrained('divisions');
     * $table->string('en_name');
     * $table->string('bn_name');
     * $table->string('slug');
     * $table->string('lat')->nullable();
     * $table->string('long')->nullable();
     * $table->string('url')->nullable();
     * $table->integer('status_active')->default(1);
     * $table->integer('is_delete')->default(0);
     * $table->string('created_by')->nullable();
     * $table->string('updated_by')->nullable();
     * $table->timestamps();
     */
    public function up(): void
    {
        Schema::create('districts', function (Blueprint $table) {
            $table->id();
            $table->foreignId('division_id')->constrained('divisions');
            $table->string('en_name');
            $table->string('bn_name');
            $table->string('slug');
            $table->string('lat')->nullable();
            $table->string('long')->nullable();
            $table->string('url')->nullable();
            $table->integer('status_active')->default(1);
            $table->integer('is_delete')->default(0);
            $table->foreignId('created_by')->nullable()->constrained('users');
            $table->foreignId('updated_by')->nullable()->constrained('users');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('districts');
    }
};
