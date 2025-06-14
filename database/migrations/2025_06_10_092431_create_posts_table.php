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
        Schema::create('posts', function (Blueprint $table) {
            $table->id();
            $table->string('title',100); //255
            $table->text('description');
            $table->boolean('status');
            $table->timestamps(); //created_at and updated_at

            //more datatypes 
           /* $table->date('date');
            $table->dateTime('date_time');
            $table->time('time');

            $table->decimal('amount')->default(0);
            $table->double('double');
            $table->float('float');
            $table->integer('integer');*/
            

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('posts');
    }
};
