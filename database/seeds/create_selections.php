<?php

use Illuminate\Database\Seeder;

class create_selections extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('selections')->insert([
            [
                'category' => 'move',
                'name' => 'ベンチプレス',
            ],
            [
                'category' => 'move',
                'name' => 'スクワット',
            ],
            [
                'category' => 'move',
                'name' => 'デッドリフト',
            ],
            [
                'category' => 'move',
                'name' => 'ラットプルダウン',
            ],
            [
                'category' => 'move',
                'name' => 'ショルルダープレス',
            ],
            [
                'category' => 'move',
                'name' => 'アームカール',
            ],
        ]);
    }
}
