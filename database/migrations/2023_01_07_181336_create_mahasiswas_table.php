<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\User;
use App\Models\Kelas;

class CreateMahasiswasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mahasiswas', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(User::class)->constrained()->cascadeOnDelete();
            $table->string('nim')->unique();
            $table->string('phone');
            $table->string('email');
            $table->string('firstName');
            $table->string('lastName');
            $table->string('namaAyah');
            $table->string('namaIbu');
            $table->string('tmpLahir');
            $table->date('tglLahir');
            $table->enum('jnsKelamin', ['Laki-laki', 'Perempuan']);
            $table->string('alamat');
            $table->foreignIdFor(Kelas::class)->constrained()->cascadeOnDelete();
            $table->rememberToken();
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
        Schema::dropIfExists('mahasiwas');
    }
}
