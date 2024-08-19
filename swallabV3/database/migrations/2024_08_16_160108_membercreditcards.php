<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * 
     */
    public function up()
    {
        Schema::create('membercreditcards', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->foreignId('m_id')->constrained('members')->onDelete('cascade'); // 外鍵約束
            $table->string('infos', 255);
            $table->string('created_at_date', 255)->default('2024-08-17 07:59:07');
            $table->string('created_at_time', 255)->default('2024-08-17 07:59:07');
            $table->string('updated_at_date', 255)->nullable();
            $table->string('updated_at_time', 255)->nullable();
            $table->timestamps(0); // created_at 和 updated_at 欄位

  
        });
    }

    /**
     * Reverse the migrations.
     *
     * 
     */
    public function down()
    {
        Schema::dropIfExists('membercreditcards');
    }
};

