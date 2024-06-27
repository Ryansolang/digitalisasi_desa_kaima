<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class surat extends Model
{
    use HasFactory;

    protected $fillable = [
        'jenis_surat',
        'nama',
        'attachment',
        'attachment_kk',
        'isi',
        'status',
        'email',
        'file_surat',
    ];		
	    

}
