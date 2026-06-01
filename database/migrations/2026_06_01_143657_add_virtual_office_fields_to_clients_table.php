<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('clients', function (Blueprint $table) {

            $table->string('email')->nullable();

            $table->date('start_date')->nullable();

            $table->date('end_date')->nullable();

        });
    }

    public function down(): void
    {
        Schema::table('clients', function (Blueprint $table) {

            $table->dropColumn([
                'email',
                'start_date',
                'end_date'
            ]);

        });
    }
};