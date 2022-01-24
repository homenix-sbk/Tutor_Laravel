<?php

use Illuminate\Database\Seeder;

class PrefecturesSeeder extends Seeder
{
    public function run()
    {
        $columns = collect(['id', 'name', 'district_id', 'created_at', 'updated_at']);
        $values = collect([
            [1, '北海道', 1, now(), now()],
            [2, '青森県', 2, now(), now()],
            [3, '岩手県', 2, now(), now()],
            [4, '宮城県', 2, now(), now()],
            [5, '秋田県', 2, now(), now()],
            [6, '山形県', 2, now(), now()],
            [7, '福島県', 2, now(), now()],
            [8, '茨城県', 3, now(), now()],
            [9, '栃木県', 3, now(), now()],
            [10, '群馬県', 3, now(), now()],
            [11, '埼玉県', 3, now(), now()],
            [12, '千葉県', 3, now(), now()],
            [13, '東京都', 3, now(), now()],
            [14, '神奈川県', 3, now(), now()],
            [15, '新潟県', 4, now(), now()],
            [16, '富山県', 4, now(), now()],
            [17, '石川県', 4, now(), now()],
            [18, '福井県', 4, now(), now()],
            [19, '山梨県', 4, now(), now()],
            [20, '長野県', 4, now(), now()],
            [21, '岐阜県', 4, now(), now()],
            [22, '静岡県', 4, now(), now()],
            [23, '愛知県', 4, now(), now()],
            [24, '三重県', 5, now(), now()],
            [25, '滋賀県', 5, now(), now()],
            [26, '京都府', 5, now(), now()],
            [27, '大阪府', 5, now(), now()],
            [28, '兵庫県', 5, now(), now()],
            [29, '奈良県', 5, now(), now()],
            [30, '和歌山県', 5, now(), now()],
            [31, '鳥取県', 6, now(), now()],
            [32, '島根県', 6, now(), now()],
            [33, '岡山県', 6, now(), now()],
            [34, '広島県', 6, now(), now()],
            [35, '山口県', 6, now(), now()],
            [36, '徳島県', 7, now(), now()],
            [37, '香川県', 7, now(), now()],
            [38, '愛媛県', 7, now(), now()],
            [39, '高知県', 7, now(), now()],
            [40, '福岡県', 8, now(), now()],
            [41, '佐賀県', 8, now(), now()],
            [42, '長崎県', 8, now(), now()],
            [43, '熊本県', 8, now(), now()],
            [44, '大分県', 8, now(), now()],
            [45, '宮崎県', 8, now(), now()],
            [46, '鹿児島県', 8, now(), now()],
            [47, '沖縄県', 8, now(), now()],
        ]);

        $rows = $values->map(fn($x) => $columns->combine($x))->toArray();
        DB::connection()->table('prefectures')->insert($rows);
    }
}
