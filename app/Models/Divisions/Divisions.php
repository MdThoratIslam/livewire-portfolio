<?php

namespace App\Models\Divisions;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Divisions extends Model
{
    /** @use HasFactory<\Database\Factories\Divisions\DivisionsFactory>
     *     $table->id();
     * $table->string('en_name');
     * $table->string('bn_name');
     * $table->string('slug');
     * $table->string('lat')->nullable();
     * $table->string('long')->nullable();
     * $table->string('url')->nullable();
     * $table->integer('status_active')->default(1);
     * $table->integer('is_delete')->default(0);
     * $table->foreignId('created_by')->nullable()->constrained('users');
     * $table->foreignId('updated_by')->nullable()->constrained('users');
     * $table->timestamps();
     *      */
    use HasFactory;
    $fillable = [
        'en_name',
        'bn_name',
        'slug',
        'lat',
        'long',
        'url',
        'status_active',
        'is_delete',
        'created_by',
        'updated_by',
        'created_at',
        'updated_at'
    ];
}
