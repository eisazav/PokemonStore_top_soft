<?php

namespace App\Util;

use App\Interfaces\Exports;
use Illuminate\Support\Facades\Storage;
use App\Models\User;

class ExportExcel implements Exports {
    public function save($request){
        $excel = Excel::download(new UsersExport, 'users.xlsx');
    }
}