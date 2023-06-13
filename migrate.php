<?php
// ①（authorsテーブル）
// runメソッドに下記追加
         Schema::create('authors', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name', 255);
            $table->timestamp('created_at')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->timestamp('updated_at')->default(DB::raw('CURRENT_TIMESTAMP on update CURRENT_TIMESTAMP'));
        });
// downメソッドに下記追加
        Schema::drop('authors');

// ②（booksテーブル）
// runメソッドに下記追加
        Schema::create('books', function (Blueprint $table) {
            $table->integer('id')->autoIncrement();
            $table->integer('author_id');
            $table->string('title');
            $table->integer('price');
            $table->timestamp('created_at')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->timestamp('updated_at')->default(DB::raw('current_timestamp on update current_timestamp'));
        });
// downメソッドに下記追加
        Schema::drop('books');
?>
