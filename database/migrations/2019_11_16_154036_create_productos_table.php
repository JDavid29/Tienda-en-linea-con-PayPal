<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('productos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre',255);
            $table->string('ficha');
            $table->text('descripcion');
            $table->string('extracto',300);
            $table->decimal('precio', 5, 2);
            $table->string('imagen',300);
            $table->boolean('visible');
            $table->integer('categoria_id')->unsigned();
            $table->foreign('categoria_id')
                            ->references('id')
                            ->on('categorias')
                            ->onDelete('cascade');
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
        Schema::dropIfExists('productos');
    }
}
