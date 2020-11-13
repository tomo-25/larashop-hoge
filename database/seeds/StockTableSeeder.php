<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StockTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       DB::table('stocks')->truncate(); //2回目実行の際にシーダー情報をクリア
       DB::table('stocks')->insert([
        'name' => 'フィルムカメラ',
        'detail' => '1960年式のカメラです',
        'fee' => 200000,
        'imgpath' => 'filmcamera.jpg',
    ]);

    DB::table('stocks')->insert([
        'name' => '撥水リュックサック',
        'detail' => 'ショルダーパッドが肩の負担を軽減します。',
        'fee' => 2990,
        'imgpath' => 'bag.jpg',
    ]);
    DB::table('stocks')->insert([
        'name' => 'ウンベラータ セメント鉢１１号 ',
        'detail' => 'プランターカバーと観葉植物のセットです。',
        'fee' => '19900',
        'imgpath' => 'zouka.jpg',
    ]);
    DB::table('stocks')->insert([
        'name' => 'ワーキングチェア',
        'detail' => 'ゆったりと包み込まれるような座り心地です。',
        'fee' => '19900',
        'imgpath' => 'chair.jpg',
    ]);
    DB::table('stocks')->insert([
        'name' => '体にフィットするソファ・本体',
        'detail' => '自由に変形して包み込まれる座り心地です。',
        'fee' => '9990',
        'imgpath' => 'fit.jpg',
    ]);
    DB::table('stocks')->insert([
        'name' => '体にフィットするソファ用綿帆布カバー',
        'detail' => '綿部分はオーガニックコットン100％です。',
        'fee' => '2990',
        'imgpath' => 'sofa.jpg',
    ]);
    DB::table('stocks')->insert([
        'name' => 'あたたかファイバームレにくい厚手敷パッド',
        'detail' => 'ムレにくく快適な敷パッドに仕上げました。',
        'fee' => '4990',
        'imgpath' => 'patto.jpg',
    ]);
    DB::table('stocks')->insert([
        'name' => 'あたたかファイバームレにくい厚手毛布',
        'detail' => 'ムレにくく快適な毛布に仕上げました。',
        'fee' => '3990',
        'imgpath' => 'maikuro.jpg',
    ]);
    DB::table('stocks')->insert([
        'name' => '高密度ポケットコイルマットレス',
        'detail' => '数多くのコイルが安定した寝姿勢を保ちます。',
        'fee' => '37900',
        'imgpath' => 'matto.jpg',
    ]);
    DB::table('stocks')->insert([
        'name' => 'ベッドフレーム',
        'detail' => '寝心地にこだわったウッドスプリング仕様です。',
        'fee' => '32900',
        'imgpath' => 'huremu.jpg',
    ]);
    DB::table('stocks')->insert([
        'name' => '電磁レンジ',
        'detail' => '庫内がフラットタイプの電子レンジ',
        'fee' => 12000,
        'imgpath' => 'rennzi.jpg',
    ]);

    DB::table('stocks')->insert([
        'name' => '冷蔵庫',
        'detail' => '一人暮らしにぴったりのサイズ',
        'fee' => 10800,
        'imgpath' => 'reizou.jpg',
    ]);

    DB::table('stocks')->insert([
        'name' => 'イヤホン',
        'detail' => 'ノイズキャンセリングがついてます',
        'fee' => 20000,
        'imgpath' => 'iyahon.jpg',
    ]);

    DB::table('stocks')->insert([
        'name' => '時計',
        'detail' => '1980年式の掛け時計です',
        'fee' => 120000,
        'imgpath' => 'clock.jpg',
    ]);

    DB::table('stocks')->insert([
        'name' => '地球儀',
        'detail' => '珍しい商品です',
        'fee' => 120000,
        'imgpath' => 'earth.jpg',
    ]);


    DB::table('stocks')->insert([
        'name' => '腕時計',
        'detail' => 'プレゼントにどうぞ',
        'fee' => 9800,
        'imgpath' => 'watch.jpg',
    ]);

    DB::table('stocks')->insert([
        'name' => 'カメラレンズ35mm',
        'detail' => '最新式です',
        'fee' => 79800,
        'imgpath' => 'lens.jpg',
    ]);

    DB::table('stocks')->insert([
        'name' => 'シャンパン',
        'detail' => 'パーティにどうぞ',
        'fee' => 800,
        'imgpath' => 'shanpan.jpg',
    ]);

    DB::table('stocks')->insert([
        'name' => 'ビール',
        'detail' => '大量生産されたビールです',
        'fee' => 200,
        'imgpath' => 'beer.jpg',
    ]);

    DB::table('stocks')->insert([
        'name' => 'やかん',
        'detail' => 'かなり珍しいやかんです',
        'fee' => 1200,
        'imgpath' => 'yakan.jpg',
    ]);

    DB::table('stocks')->insert([
        'name' => '精米',
        'detail' => '米30Kgです',
        'fee' => 11200,
        'imgpath' => 'kome.jpg',
    ]);

    DB::table('stocks')->insert([
        'name' => 'パソコン',
        'detail' => 'ジャンク品です',
        'fee' => 11200,
        'imgpath' => 'pc.jpg',
    ]);

    DB::table('stocks')->insert([
        'name' => 'アコースティックギター',
        'detail' => 'ヤマハ製のエントリーモデルです',
        'fee' => 25600,
        'imgpath' => 'aguiter.jpg',
    ]);

    DB::table('stocks')->insert([
        'name' => 'エレキギター',
        'detail' => '初心者向けのエントリーモデルです',
        'fee' => 15600,
        'imgpath' => 'eguiter.jpg',
    ]);

    DB::table('stocks')->insert([
        'name' => '加湿器',
        'detail' => '乾燥する季節の必需品',
        'fee' => 3200,
        'imgpath' => 'steamer.jpeg',
    ]);

    DB::table('stocks')->insert([
        'name' => 'マウス',
        'detail' => 'ゲーミングマウスです',
        'fee' => 4200,
        'imgpath' => 'mouse.jpeg',
    ]);

    DB::table('stocks')->insert([
        'name' => 'Android Garxy10',
        'detail' => '中古美品です',
        'fee' => 84200,
        'imgpath' => 'mobile.jpg',
    ]);
}
    }
