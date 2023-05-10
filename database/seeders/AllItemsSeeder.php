<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\{Konser,Customer,Pesanan};
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

class AllItemsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $konser = [
            ['artist_name' => 'Ed Sheeren','date_time' => Carbon::now(), 'venue' => 'Gor Citra', 'price' => 100000, 'ticket_available' => 10],
            ['artist_name' => 'Selena Gomez','date_time' => Carbon::now(), 'venue' => 'Gor Citra', 'price'=>  300000, 'ticket_available' => 10],
        ];

        foreach($konser as $k => $r){
            DB::table('konsers')->insert([
                'artist_name' => $r['artist_name'],
                'date_time' => $r['date_time'],
                'venue' => $r['venue'],
                'price' => $r['price'],
                'ticket_available' => $r['ticket_available'],
                'created_at' =>Carbon::now(),
                'updated_at' =>Carbon::now(),
            ]);
        }

        // $permissions = [
        //     ['name' => 'view Siswa'],
        // ];

        // foreach ($permissions as $key => $s) {
        //     Permission::create([
        //         'name' => $s['name'],
        //     ]);
        // }
    }
}
