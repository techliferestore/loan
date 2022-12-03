<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('appointment', function (Blueprint $table) {
            $table->id();
            //$table->bigIncrements('id')->unsigned();
            $table->string('treatment')->nullable();
           // $table->string('slug')->nullable();
            //$table->text('intro')->nullable();
            //$table->text('content')->nullable();
            $table->string('doctor')->nullable();
            $table->string('p_name');
            $table->string('phone');
            $table->string('date');
            $table->string('time');

            $table->string('email')->unique();
            //$table->integer('category_id')->unsigned()->nullable();
            //$table->string('category_name')->nullable();
           // $table->integer('is_featured')->nullable();
            $table->string('featured_image')->nullable();

          

            $table->integer('hits')->default(0)->unsigned();
            $table->integer('order')->nullable();
            $table->tinyInteger('status')->default(1);

            $table->integer('moderated_by')->unsigned()->nullable();
            $table->datetime('moderated_at')->nullable();

            $table->integer('created_by')->unsigned()->nullable();
            $table->string('created_by_name')->nullable();
            $table->string('created_by_alias')->nullable();
            $table->integer('updated_by')->unsigned()->nullable();
            $table->integer('deleted_by')->unsigned()->nullable();

            $table->timestamp('published_at')->nullable();
            $table->timestamps();
            $table->softDeletes();
         
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('appointment');
    }
};
