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
        Schema::create('restinfos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('f_c_id');
            $table->unsignedBigInteger('f_l_id');
            $table->string('address', 255);
            $table->integer('status')->default(0);
            $table->string('avg_price', 255);
            $table->string('href', 255);
            $table->string('weekday', 255)->default('沒有營業');
            $table->string('weekend', 255)->default('沒有營業');
            $table->string('wd_operating', 255)->nullable();
            $table->string('we_operating', 255)->nullable();
            $table->string('wd_close_1', 255)->nullable();
            $table->string('wd_close_2', 255)->nullable();
            $table->string('we_close_1', 255)->nullable();
            $table->string('we_close_2', 255)->nullable();
            $table->string('created_at_date', 255)->default('2024-08-17 07:59:06');
            $table->string('created_at_time', 255)->default('2024-08-17 07:59:06');
            $table->string('updated_at_date', 255)->nullable();
            $table->string('updated_at_time', 255)->nullable();
            $table->timestamps(0); // created_at and updated_at columns as timestamps, allowing NULL
        });
    }

    /**
     * Reverse the migrations.
     *
     * 
     */
    public function down()
    {
        Schema::dropIfExists('restinfos');
    }
};
