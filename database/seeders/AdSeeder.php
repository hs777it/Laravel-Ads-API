<?php

namespace Database\Seeders;

use App\Models\Ad;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class AdSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Ad::create(['title' => 'New Add', 'slug' => 'new_add', 'text' => 'Just New Add', 'phone' => '01050304090', 'status' => '1', 'user_id' => '1', 'domain_id' => '1',]);

        DB::table('ads')->delete();
        $ads = [
            ['title' => 'New Add #1', 'slug' => 'new_add 1', 'text' => 'Just New Add 1', 'phone' => '01050304090', 'status' => '1', 'user_id' => '1', 'domain_id' => '1'],
            ['title' => 'New Add #2', 'slug' => 'new_add 2', 'text' => 'Just New Add 2', 'phone' => '01066604090', 'status' => '1', 'user_id' => '1', 'domain_id' => '1'],
            ['title' => 'New Add #3', 'slug' => 'new_add 3', 'text' => 'Just New Add 3', 'phone' => '01088804090', 'status' => '1', 'user_id' => '1', 'domain_id' => '1'],
            ['title' => 'New Add #4', 'slug' => 'new_add 4', 'text' => 'Just New Add 4', 'phone' => '01022204090', 'status' => '1', 'user_id' => '1', 'domain_id' => '1'],
            ['title' => 'New Add #5', 'slug' => 'new_add 5', 'text' => 'Just New Add 5', 'phone' => '01000004090', 'status' => '1', 'user_id' => '1', 'domain_id' => '1'],
        ];
        Ad::insert($ads);

        // Ad::factory()->count(10)->create();

        /* for ($i = 0; $i < 1000; $i++) {
            DB::table('ads')->insert([
                'title' =>  Str::random(10),
                'slug' => Str::random(7),
            ]);
        } */
    }
}
