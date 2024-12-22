<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     * INSERT INTO `divisions` (`id`, `en_name`, `bn_name`, `slug`, `lat`, `long`, `url`, `status_active`, `is_delete`, `created_by`, `updated_by`, `created_at`, `updated_at`) VALUES (1, 'Dhaka', 'Dhaka', 'dhaka', NULL, NULL, NULL, 1, 0, NULL, NULL, '2024-09-25 16:50:00', '2024-09-25 16:50:00');
     * INSERT INTO `divisions` (`id`, `en_name`, `bn_name`, `slug`, `lat`, `long`, `url`, `status_active`, `is_delete`, `created_by`, `updated_by`, `created_at`, `updated_at`) VALUES (2, 'Chattogram', 'Chattogram', 'chattogram', NULL, NULL, NULL, 1, 0, NULL, NULL, '2024-09-25 16:50:00', '2024-09-25 16:50:00');
     * INSERT INTO `divisions` (`id`, `en_name`, `bn_name`, `slug`, `lat`, `long`, `url`, `status_active`, `is_delete`, `created_by`, `updated_by`, `created_at`, `updated_at`) VALUES (3, 'Khulna', 'Khulna', 'khulna', NULL, NULL, NULL, 1, 0, NULL, NULL, '2024-09-25 16:50:00', '2024-09-25 16:50:00');
     * INSERT INTO `divisions` (`id`, `en_name`, `bn_name`, `slug`, `lat`, `long`, `url`, `status_active`, `is_delete`, `created_by`, `updated_by`, `created_at`, `updated_at`) VALUES (4, 'Rajshahi', 'Rajshahi', 'rajshahi', NULL, NULL, NULL, 1, 0, NULL, NULL, '2024-09-25 16:50:00', '2024-09-25 16:50:00');
     * INSERT INTO `divisions` (`id`, `en_name`, `bn_name`, `slug`, `lat`, `long`, `url`, `status_active`, `is_delete`, `created_by`, `updated_by`, `created_at`, `updated_at`) VALUES (5, 'Sylhet', 'Sylhet', 'sylhet', NULL, NULL, NULL, 1, 0, NULL, NULL, '2024-09-25 16:50:00', '2024-09-25 16:50:00');
     * INSERT INTO `divisions` (`id`, `en_name`, `bn_name`, `slug`, `lat`, `long`, `url`, `status_active`, `is_delete`, `created_by`, `updated_by`, `created_at`, `updated_at`) VALUES (6, 'Barishal', 'Barishal', 'barishal', NULL, NULL, NULL, 1, 0, NULL, NULL, '2024-09-25 16:50:00', '2024-09-25 16:50:00');
     * INSERT INTO `divisions` (`id`, `en_name`, `bn_name`, `slug`, `lat`, `long`, `url`, `status_active`, `is_delete`, `created_by`, `updated_by`, `created_at`, `updated_at`) VALUES (7, 'Mymensingh', 'Mymensingh', 'mymensingh', NULL, NULL, NULL, 1, 0, NULL, NULL, '2024-09-25 16:50:00', '2024-09-25 16:50:00');
     * INSERT INTO `divisions` (`id`, `en_name`, `bn_name`, `slug`, `lat`, `long`, `url`, `status_active`, `is_delete`, `created_by`, `updated_by`, `created_at`, `updated_at`) VALUES (8, 'Rangpur', 'Rangpur', 'rangpur', NULL, NULL, NULL, 1, 0, NULL, NULL, '2024-09-25 16:50:00', '2024-09-25 16:50:00');
     */
    public function up(): void
    {
        Schema::create('divisions', function (Blueprint $table) {
            $table->id();
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
        Schema::dropIfExists('divisions');
    }
};
