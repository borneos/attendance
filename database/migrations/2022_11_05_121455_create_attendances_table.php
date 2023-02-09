<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAttendancesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('attendances', function (Blueprint $table) {
            $table->id();
            $table->longText('event')->nullable();
            $table->string('name', 100);
            $table->longText('address')->nullable();
            $table->string('whatsapp', 15);
            $table->string('instagram', 100)->nullable();
            $table->string('institution', 150)->nullable();
            $table->integer('time_visit')->nullable();
            $table->longText('reason')->nullable();
            $table->longText('info')->nullable();
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
        Schema::dropIfExists('attendance');
    }
}
