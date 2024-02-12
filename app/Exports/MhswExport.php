<?php

namespace App\Exports;

use App\Models\Mahasiswa;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;

class MhswExport implements FromView
{
    protected $mhsw;

    function __construct($mhsw)
    {
        $this->mhsw = $mhsw;
    }
    public function view() : View
    {
        return view('contents.admin.mahasiswa.export', [
            'title' => 'Data Mahasiswa',
            'mahasiswas' => $this->mhsw,
        ]);
    }
}
