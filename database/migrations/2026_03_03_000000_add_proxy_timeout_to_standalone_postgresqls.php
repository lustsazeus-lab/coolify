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
        Schema::table('standalone_postgresqls', function (Blueprint $table) {
            $table->integer('proxy_timeout')->default(3600)->nullable()->comment('Proxy timeout in seconds, 0 means no timeout');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('standalone_postgresqls', function (Blueprint $table) {
            $table->dropColumn('proxy_timeout');
        });
    }
};
