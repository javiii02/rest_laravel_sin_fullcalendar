<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
class CreateCrudEventsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('crud_events', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->date('fecha');
            $table->time('hora');
            $table->string('estado');            
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
        Schema::dropIfExists('crud_events');
    }
}