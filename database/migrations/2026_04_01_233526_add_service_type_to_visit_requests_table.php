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
        Schema::table('visit_requests', function (Blueprint $table) {
            $table->string('service_type', 100)->nullable()->after('phone')->comment('Loại dịch vụ quan tâm');
            $table->unsignedBigInteger('property_id')->nullable()->change();
            $table->time('preferred_time')->nullable()->change();
            $table->string('email', 255)->nullable()->change();
        });
    }

    public function down(): void
    {
        Schema::table('visit_requests', function (Blueprint $table) {
            $table->dropColumn('service_type');
            $table->unsignedBigInteger('property_id')->nullable(false)->change();
            $table->time('preferred_time')->nullable(false)->change();
            $table->string('email', 255)->nullable(false)->change();
        });
    }
};
