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
        Schema::table('users', function (Blueprint $table) {
            $table->string('id', 45)->change();
            $table->dropPrimary('id');
        });

        Schema::table('users', function (Blueprint $table) {
            $table->string('id', 45)->primary()->change();
        });
        Schema::table('users', function (Blueprint $table) {
            $table->dropUnique('users_email_unique');
            $table->bigInteger('phone');
            $table->string('active_company_id',45);
            $table->boolean('is_blocked');
            $table->string('emp_code');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropPrimary('id');
            $table->dropColumn('id');
            $table->bigIncrements('id');
            $table->dropColumn(['phone', 'active_company_id', 'is_blocked', 'emp_code']);
        });
    }
};
