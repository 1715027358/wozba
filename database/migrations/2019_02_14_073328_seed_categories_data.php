<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class SeedCategoriesData extends Migration
{
    public function up()
    {
        $categories = [
            [
                'name'        => '下载APP',
                'description' => '',
            ],
            [
                'name'        => '账号注册',
                'description' => '',
            ],
            [
                'name'        => '认证绑卡',
                'description' => '',
            ],
            [
                'name'        => '电商相关',
                'description' => '',
            ],
            [
                'name'        => '简单关注',
                'description' => '',
            ],
            [
                'name'        => '简单转发',
                'description' => '',
            ],
            [
                'name'        => '简单投票',
                'description' => '',
            ],
            [
                'name'        => '简单采集',
                'description' => '',
            ],
        ];

        DB::table('categories')->insert($categories);
    }

    public function down()
    {
        DB::table('categories')->truncate();
    }
}
