<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('games', function (Blueprint $table) {
            //------- PK & FK
            $table->id();
            $table->bigInteger('developer_id');
            $table
                ->foreign('developers_id')
                ->references('id')
                ->on('developers')
                ->onDelete('cascade');

            $table->bigInteger('genre_game_id');
            $table
                ->foreign('genre_game_id')
                ->references('id')
                ->on('genre_game')
                ->onDelete('cascade');

            $table->bigInteger('requeriment_minimum_id')->unsigned();
            $table
                ->foreign('requeriment_minimum_id')
                ->references('id')
                ->on('requeriment_minimum')
                ->onDelete('cascade');

            $table->bigInteger('requeriment_recommended_id');
            $table
                ->foreign('requeriment_recommended_id')
                ->references('id')
                ->on('requeriment_recommended')
                ->onDelete('cascade');


            //------- Comuns
            $table->string('platform', 50);
            $table->bigInteger('genre_game_id');
            $table->string('title');
            $table->string('thumbnail', 100);
            $table->double('price', 5, 2);
            $table->date('release_date')->nullable()->default(new DateTime());
            $table->string('age_rating', 3);
            $table->boolean('status_game')->default(true);
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
        Schema::dropIfExists('games');
    }
};
