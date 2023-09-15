<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCoopsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('coops', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained('users', 'id')->onDelete('cascade');
            $table->string('establishment_name');
            $table->string('assessor_fname');
            $table->string('assessor_lname');
            $table->string('job_position');
            $table->string('department');
            $table->string('evaluate_item_1');
            $table->string('evaluate_item_2');
            $table->string('evaluate_item_3');
            $table->string('evaluate_item_4');
            $table->string('evaluate_item_5');
            $table->string('comment');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('coops');
    }
}
