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

    CONST TABLE = 'konsers';

    protected $guarded = ['id'];
    protected $table   = self::TABLE;

    protected function total(): Attribute
    {
        return Attribute::make(
            get: fn ($value) => $this->name_konser . ' - ' . $this->formatRupiah('price'),
        );
    }

    public function guest(){return $this->hasMany(guestStart::class);}
    public function getDateKonserAttribute($date_konser){return Carbon::parse($date_konser);}
}
