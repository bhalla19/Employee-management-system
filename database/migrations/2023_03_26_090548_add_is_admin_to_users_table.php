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
            // $table->string('name');
            // $table->string('email')->unique();
            // $table->timestamp('email_verified_at')->nullable();
            // $table->string('password');
            $table->string('father_name')->nullable();
            $table->date('dob')->nullable();
            $table->string('gender')->nullable();
            $table->string('phone_no')->nullable();
            $table->string('localAddress')->nullable();
            $table->string('permanentAddress')->nullable();
            $table->string('employee_id')->nullable();
            $table->string('department')->nullable();
            $table->string('designation')->nullable();
            $table->date('joining_date')->nullable();
            $table->double('joining_salary')->nullable();
            $table->boolean('is_admin')->default(false);
            // $table->rememberToken();
            // $table->timestamps();
        });
    }


    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
        });
    }
};
