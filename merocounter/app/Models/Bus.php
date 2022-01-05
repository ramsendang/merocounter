<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bus extends Model
{
    use HasFactory;

    protected $fillable= ['busno','busname','busdriver','associatebusdriver','busbrand','busimgname','billbookname','insurencename', 'licenname','conditonname','totalseat','status','createdby','route','rating'];
}
