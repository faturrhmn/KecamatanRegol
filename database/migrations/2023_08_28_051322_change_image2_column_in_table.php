<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ChangeImage2ColumnInTable extends Migration
{
    public function up()
    {
        Schema::table('portfolios', function (Blueprint $table) {
            $table->string('image2')->nullable()->change(); // Mengubah untuk dapat menerima NULL
            $table->string('image3')->nullable()->change(); // Mengubah untuk dapat menerima NULL
            $table->string('image4')->nullable()->change(); // Mengubah untuk dapat menerima NULL
            $table->string('image5')->nullable()->change(); // Mengubah untuk dapat menerima NULL
            // atau
            // $table->string('image2')->default('nilai_default')->change(); // Mengubah untuk memiliki nilai default
        });
    }

    public function down()
    {
        // Inversi perubahan, jika perlu
    }
}
