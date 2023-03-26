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
        Schema::create('Employee', function (Blueprint $table) {
            $table->id('ID');
            $table->boolean('is_admin');
            $table->string('name');
            $table->string('email');
            $table->string('password');
            $table->string('father_name');
            $table->string('dob');
            $table->string('gender');
            $table->string('phone_no');
            $table->string('localAddress');
            $table->string('permanentAddress');
            $table->string('employee_id');
            $table->string('department');
            $table->string('designation');
            $table->string('joining_date');
            $table->string('joining_salary');
            $table->timestamps('');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('customer_data');
    }
};
