<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('job_offers', function (Blueprint $table) {
            $table->json('documents')->nullable()->after('deadline');
            $table->text('description')->nullable()->change();
            $table->string('location')->nullable()->change();
            $table->string('type')->nullable()->change();
        });
    }

    public function down(): void
    {
        Schema::table('job_offers', function (Blueprint $table) {
            $table->dropColumn('documents');
            $table->text('description')->nullable(false)->change();
            $table->string('location')->default('Conakry, Guinée')->nullable(false)->change();
            $table->string('type')->default('CDI')->nullable(false)->change();
        });
    }
};
