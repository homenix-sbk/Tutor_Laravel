<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DistrictsSeeder extends Seeder
{
    public function run()
    {
        $columns = collect(['id', 'name', 'created_at', 'updated_at']);
        $values = collect([
            [1, '北海道', now(), now()],
            [2, '東北', now(), now()],
            [3, '関東', now(), now()],
            [4, '中部', now(), now()],
            [5, '近畿', now(), now()],
            [6, '中国', now(), now()],
            [7, '四国', now(), now()],
            [8, '九州沖縄', now(), now()],
        ]);

        $rows = $values->map(fn($x) => $columns->combine($x))->toArray();
        DB::connection()->table('districts')->insert($rows);

    }
}
