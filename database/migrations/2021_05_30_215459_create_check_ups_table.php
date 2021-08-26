<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCheckUpsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('check_ups', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->text('height')->nullable();
            $table->text('weight')->nullable();
            $table->text('blood_test')->nullable();
            $table->text('IHC')->nullable();
            $table->date('blood_test_date')->nullable();
            $table->date('check_up_date')->nullable();
            $table->text('child_id')->nullable();
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
        Schema::dropIfExists('check_ups');
    }
}
