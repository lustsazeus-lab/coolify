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
        $tables = [
            'standalone_mysqls',
            'standalone_mariadbs',
            'standalone_postgresqls',
            'standalone_mongodbs',
            'standalone_redis',
            'standalone_keydbs',
            'standalone_dragonflies',
            'standalone_clickhouses',
        ];

        foreach ($tables as $table) {
            Schema::table($table, function (Blueprint $table) {
                $table->integer('proxy_timeout')->default(3600)->nullable()->comment('Proxy timeout in seconds, 0 means no timeout');
            });
        }
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        $tables = [
            'standalone_mysqls',
            'standalone_mariadbs',
            'standalone_postgresqls',
            'standalone_mongodbs',
            'standalone_redis',
            'standalone_keydbs',
            'standalone_dragonflies',
            'standalone_clickhouses',
        ];

        foreach ($tables as $table) {
            Schema::table($table, function (Blueprint $table) {
                $table->dropColumn('proxy_timeout');
            });
        }
    }
};
