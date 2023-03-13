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
        //
        Schema::table('posts', function (Blueprint $table) {
            $table->string('nama', 100)->after('id')->nullable();
            $table->string('nim', 100)->after('nama');
            $table->string('kelas', 100)->after('nim');
            $table->string('jurusan', 100)->after('kelas');
            $table->string('prodi', 100)->after('jurusan');
            $table->string('asaldaerah', 100)->after('prodi');
            });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
        Schema::table('posts', function (Blueprint $table) {
            $table->dropColumn('nama', 100);
            $table->dropColumn('nim', 100);
            $table->dropColumn('kelas', 100);
            $table->dropColumn('jurusan', 100);
            $table->dropColumn('prodi', 100);
            $table->dropColumn('asaldaerah', 100);
            });
    }
};
