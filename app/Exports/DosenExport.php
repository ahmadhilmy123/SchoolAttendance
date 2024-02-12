<?php

namespace App\Exports;

use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;

class DosenExport implements FromView
{
    protected $dosen;

    function __construct($dosen)
    {
        $this->dosen = $dosen;
    }
    public function view() : View
    {
        return view('contents.admin.data-dosen.export', [
            'title' => 'Data Dosen',
            'dosens' => $this->dosen,
        ]);
    }
}
