<?php
// ①AuthorsTableSeederのrunメソッドに下記追加
        DB::table('authors')->insert([
            ['name' => 'Atlas一郎'],
            ['name' => 'Atlas二郎'],
            ['name' => 'Atlas三郎'],
            ['name' => 'Atlas四郎'],
            ['name' => 'Atlas五郎']
        ]);

// ②BooksTableSeederのrunメソッドに下記追加
        DB::table('books')->insert([
            [
                'author_id' => '1',
                'title' => 'Atlas一郎が書いた本',
                'price' => '1000'
            ],
            [
                'author_id' => '2',
                'title' => 'Atlas二郎が書いた本',
                'price' => '2000'
            ],
            [
                'author_id' => '3',
                'title' => 'Atlas三郎が書いた本',
                'price' => '3000'
            ],
            [
                'author_id' => '4',
                'title' => 'Atlas四郎が書いた本',
                'price' => '4000'
            ],
            [
                'author_id' => '5',
                'title' => 'Atlas五郎が書いた本',
                'price' => '5000'
            ]
        ]);

// ③DatabaseSeederのrunメソッドに下記追加
        $this->call(AuthorsTableSeeder::class);
        $this->call(BooksTableSeeder::class);
?>
