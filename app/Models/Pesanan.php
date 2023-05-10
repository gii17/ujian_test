<?php

namespace App\Models;

use App\Traits\HasFormatRupiah;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Pesanan extends Model
{
    use HasFactory,HasFormatRupiah;

    protected $guarded = ['id'];

    public function konser(){return $this->belongsTo(Konser::class);}
    public function customer(){return $this->belongsTo(Customer::class);}
    public function getTanggalTagihanAttribute($date_time){return Carbon::parse($date_time);}
}
