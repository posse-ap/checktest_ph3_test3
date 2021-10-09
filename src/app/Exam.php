<?php

namespace App;

use Illuminate\Support\Facades\DB;

class Exam
{
    // DB検索するプログラムを書いてほしいです
    // 各functionのコメントに必要なデータの条件を書いているので、満たすよう実装お願いします
    // クエリビルダを使っていい感じに書いてください、せっかくのLaravelなのでrawとか使わないで！！
    // rawを使ってSQLを書いたら点数は半分になります
    // 
    // テーブル構成はLaravelっぽくなっています
    // 詳細はmysqlコンテナに入って確認してください
    // 接続方法は、、、、、そうですよね、設定ファイル見れば良いので書く必要ないですね
    // 
    // 動作確認方法
    // phpfpmコンテナで以下のコマンドを実行
    // ./vendor/bin/phpunit
    // 
    // 
    // 以下実行時のイメージ（全部正解）
    // root@df452a6ee04d:/work/backend# vendor/bin/phpunit
    // 〜〜〜（省略）〜〜〜
    // OK (6 tests, 6 assertions)
    // root@df452a6ee04d:/work/backend#
    // 
    // 
    // 以下実行時のイメージ（1問不正解）
    // root@df452a6ee04d:/work/backend# vendor/bin/phpunit
    // 〜〜〜（省略）〜〜〜
    // FAILURES!
    // Tests: 6, Assertions: 6, Failures: 1.
    // root@df452a6ee04d:/work/backend#

    // Time: 00:00.118, Memory: 18.00 MB

    // OK (6 tests, 6 assertions)
    // root@df452a6ee04d:/work/backend# 

    // サンプル
    // 条件：
    // 　部署テーブルの件数を取得してください
    // 　クエリビルダのみで結果を取得してください
    // 採点：
    // 　結果がOK：100点
    public function Sample()
    {
        $ret = DB::table('depts')->count();

        var_dump('Sample:' . $ret);
        return $ret;
    }


    // 実装依頼1つ目
    // 条件：
    // 　全社員の人数をカウントして返却してください
    // 　クエリビルダのみで結果を取得してください
    // 採点：
    // 　結果がOK：30点
    public function Case1()
    {
        $ret = "";

        var_dump('Case1:' . $ret);
        return $ret;
    }

    // 実装依頼2つ目
    // 条件：
    // 　従業員の中で最も低い年齢を返却してください
    // 　クエリビルダのみで結果を取得してください
    // 採点：
    // 　結果がOK：5点
    // 　＋rawを使っていない：10点
    // 　＋クエリビルダで結果を取得している：5点
    public function Case2()
    {
        $ret = "";

        var_dump('Case2:' . $ret);
        return $ret;
    }

    // 実装依頼3つ目
    // 条件：
    // 　2020年で一番年収が高い従業員の年収を返却してください
    // 　クエリビルダのみで結果を取得してください
    // 採点：
    // 　結果がOK：5点
    // 　＋rawを使っていない：10点
    // 　＋クエリビルダで結果を取得している：5点
    public function Case3()
    {
        $ret = "";

        var_dump('Case3:' . $ret);
        return $ret;
    }

    // 実装依頼4つ目
    // 条件：
    // 　社員数が一番多い部署の部署名を返却する
    // 　クエリビルダのみで結果を取得してください
    // 採点：
    // 　結果がOK：5点
    // 　＋rawについては、selectRaw1回のみ使っている：10点
    // 　＋クエリビルダで結果を取得している：5点
    public function Case4()
    {
        $ret = "";

        var_dump('Case4:' . $ret);
        return $ret;
    }

    // 実装依頼5つ目
    // 条件：
    // 　2019年から2020年で年収が一番上がった人の名前を返却する
    // 　クエリビルダのみで結果を取得してください
    // 採点：
    // 　結果がOK：5点
    // 　＋クエリビルダで結果を取得している：5点
    public function Case5()
    {
        $ret = "";

        var_dump('Case5:' . $ret);
        return $ret;
    }
}
