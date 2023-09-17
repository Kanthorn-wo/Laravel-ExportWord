<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFormsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('forms', function (Blueprint $table) {
            $table->uuid('uuid')->primary();
            $table->foreignId('user_id')->constrained('users', 'id')->onDelete('cascade');

            $table->boolean('loan_1')->default(false); //ความประสงค์เทอม1
            $table->boolean('term_expenses_1')->default(false); //ค่าเทอม1
            $table->string('term_expenses_amout_1')->nullable(); //ค่าเทอม1
            $table->string('cost_living_1')->nullable(); //ค่าครองชีพ

            $table->boolean('loan_2')->default(false); //ความประสงค์เทอม2
            $table->boolean('term_expenses_2')->default(false);
            $table->string('term_expenses_amout_2')->nullable(); //ค่าเทอม2
            $table->string('cost_living_2')->nullable(); //ค่าครองชีพ
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
        Schema::dropIfExists('forms');
    }
}
