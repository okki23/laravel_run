<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMasterpasiensTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('masterpasiens', function (Blueprint $table) {
            $table->string('no_mr',10);
            $table->string('nm_pasien',50);
            $table->date('tgl_lahir');
            $table->string('j_kelamin',1);
            $table->string('t_lahir',50);
            $table->string('alamat',200);
            $table->string('agamaid',1);
            $table->timestamps();
            $table->primary('no_mr');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('masterpasiens');
    }
}
