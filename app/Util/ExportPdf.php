<?php

namespace App\Util;

use App\Interfaces\Exports;
use Illuminate\Support\Facades\Storage;
use App\Models\User;

class ExportPdf implements Exports {
    public function save($request){
        $user=User::all();
        $data = compact('user');
        $pdf = Pdf::loadView('admin.user.pdf', $data);
        return $pdf->stream();
    }
}