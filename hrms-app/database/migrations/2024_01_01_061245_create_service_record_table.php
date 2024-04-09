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
        Schema::create("service_record", function (Blueprint $table) {
            $table->bigIncrements("sr-id");
            $table->unsignedBigInteger("emp_id");
            $table->date("service-from");
            $table->date("service-to");
            $table->string("designation");
            $table->string("status");
            $table->string("station");
            $table->string("absence-wop");
            $table->string("separation-date-cause-remarks");
            $table->foreign("emp_id")->references('emp_id')->on('employees')->onDelete('cascade');
            $table->timestamps();
        });
       
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('service-record');
    }
};
