<?php

use CoverFactory\Manhole\Domain\Material;
use CoverFactory\Manhole\Domain\Size;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateManholesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('manholes', function (Blueprint $table) {
            $table->uuid('uuid')->unique();
            $table->string('radio');
            $table->enum('material', [Material::IRON, Material::STEEL, Material::STONE]);
            $table->integer('decoration');
            $table->enum('size', [Size::S, Size::M, Size::L, Size::XL]);
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
        Schema::dropIfExists('manholes');
    }
}
