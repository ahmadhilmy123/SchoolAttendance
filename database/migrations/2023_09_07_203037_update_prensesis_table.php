<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdatePrensesisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table(
            'presensis',
            function (Blueprint $table) {
                // $table->id();
                $table->foreignId('pertemuan_id')->after('id');
                $table->dateTime('waktu_absen')->after('pertemuan_id');
                // $table->foreignId('siswa_id');
                $table->dropColumn('kelas_id');
                $table->dropColumn('mapel_id');
                // $table->foreignId('guru_id');
                // $table->foreignId('absensi_id');
                // $table->timestamps();
            }
        );
    }


    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table(
            'presensis',
            function (Blueprint $table) {
                // $table->id();
                $table->dropColumn('waktu_absen');
                // $table->foreignId('siswa_id');
                $table->foreignId('kelas_id')->after('siswa_id');
                $table->foreignId('mapel_id')->after('kelas_id');
                $table->dropColumn('pertemuan_id');
                // $table->foreignId('guru_id');
                // $table->foreignId('absensi_id');
                // $table->timestamps();
            }
        );
    }
}
