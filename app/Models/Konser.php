<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Casts\Attribute;
use App\Traits\HasFormatRupiah;
use Carbon\Carbon;

class Konser extends Model
{
    use HasFactory,HasFormatRupiah;

    protected $guarded = ['id'];

    protected function total(): Attribute
    {
        return Attribute::make(
            get: fn ($value) => $this->artist_name . ' - ' . $this->formatRupiah('price'),
        );
    }

    public function guest(){return $this->hasMany(guestStart::class);}
    public function getDateKonserAttribute($date_konser){return Carbon::parse($date_konser);}
}
