<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdatePresensisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('presensis', function (Blueprint $table) {
            // $table->id();
            $table->dropColumn('siswa_id');
            $table->dropColumn('kelas_id');
            // $table->foreignId('mapel_id');
            $table->dateTime('waktu_buka_absen')->after('mapel_id');
            $table->dateTime('waktu_tutup_absen')->after('mapel_id');
            $table->string('keterangan')->after('mapel_id');
            $table->dropColumn('guru_id');
            $table->dropColumn('absensi_id');
            // $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('presensis', function (Blueprint $table) {
            // $table->id();
            $table->foreignId('siswa_id')->after("id");
            $table->foreignId('kelas_id')->after("id");
            // $table->foreignId('mapel_id');
            $table->dropColumn('waktu_buka_absen')->after('mapel_id');
            $table->dropColumn('waktu_tutup_absen')->after('mapel_id');
            $table->foreignId('guru_id')->after('mapel_id');
            $table->foreignId('absensi_id')->after('mapel_id');
            // $table->timestamps();
        });
    }
}
