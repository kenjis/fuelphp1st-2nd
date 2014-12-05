# 達人出版会刊行『はじめてのフレームワークとしての FuelPHP 第2版』正誤情報

ここでは、本書の正誤情報を提供します。

## (1)環境構築編 2014 年 10 月 25 日 v1.1.0

### 第 3 章 FuelPHP のインストール設定

(PDF P.87)

リスト「bootstrap.php の変更点」

【誤】
~~~diff
@@ -1,5 +1,8 @@
 <?php

+// set default charset
+ini_set('default_charset', 'UTF-8');
+
 // Load in the Autoloader
 require COREPATH.'classes'.DIRECTORY_SEPARATOR.'autoloader.php';
 class_alias('Fuel\\Core\\Autoloader', 'Autoloader');
~~~

【正】
~~~diff
@@ -1,4 +1,8 @@
 <?php
+
+// set default charset
+ini_set('default_charset', 'UTF-8');
+
 // Bootstrap the framework DO NOT edit this
 require COREPATH.'bootstrap.php';

~~~

---

以下の誤りは、v1.1.0 で修正済みです。

## (1)環境構築編 2014 年 6 月 4 日 v1.0.0

### 第 2 章 PHP 開発環境の構築

(PDF P.48)

「手順 4 vagrant-fuelphp-centos6 のインストール」2段落目

【誤】「2.2.5 msysgit のインストール」、「2.3.4 Git のインストール」

【正】「2.2.3 msysgit のインストール」、「2.3.3 Git のインストール」

--

(PDF P.51)

「2.5.4 システム構成」最後の行

【誤】「2.2.4 NetBeans のインストール」、「2.3.3 NetBeans のインストール」

【正】「2.2.2 NetBeans のインストール」、「2.3.2 NetBeans のインストール」

--

(PDF P.52)

「2.5.5 仮想マシンへの SSH 接続」本文 2行目

【誤】(Windows を除く)

【正】このカッコ書きを削除

本文 3行目

【誤】Windows では

【正】Windows で Git Bash を使わない場合は

--

### 第 4 章 NetBeans の使い方

(PDF P.97)

「4.1.2 関数やメソッドなどの定義への移動」本文 1行目

【誤】ジャップ

【正】ジャンプ

--

## (2)入門編 2014 年 6 月 4 日 v1.0.0

### 第 5 章 FuelPHP でのユニットテスト

(PDF P.87)

「5.2.2 テストの実行」本文 2行目

【誤】これは PHP ファイルを public フォルダに配置した場合です。

【正】この一文を削除

--

## (3)実践編 2014 年 6 月 17 日 v1.0.0

### 第 2 章 コンタクトフォームの改良

(PDF P.40)

「2.1.5 独自の検証ルールの作成」リスト 2.8 のキャプション

【誤】リスト 2.8: MyValidation クラス

【正】リスト 2.8: MyValidationRules クラス

--

(PDF P.52)

リスト 2.20 の直後

【誤】Client オブジェクト

【正】Crawler オブジェクト

--
