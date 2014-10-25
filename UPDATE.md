# 『はじめてのフレームワークとしての FuelPHP 第2版(改訂版)』追加情報

ここでは、本書の執筆時以降のアップデート情報などの追加情報を提供します。

## (1) 環境構築編

### 2.3 Mac OS X での PHP 開発環境の構築

達人出版会電子版 PDF P.33 / ラトルズ紙版 P.37

MAMP 3.0.5では、Mac OS XをYosemiteにアップデートすると、Apacheが起動しなくなります。`/Applications/MAMP/bin/apache2/bin/envvars`のファイル名を`_envvars`にリネームすると起動できるようになります。

## (2) 入門編

## (3) 実践編編

### 3.1 / 12.1 Fieldset クラスの使用

達人出版会電子版 PDF P.64 / ラトルズ紙版 P.340

本書ではバリデーションをFieldsetクラスに定義していますが、モデル（Orm\ModelやModel_Crud）で定義する方法もあります。
http://fuelphp.jp/docs/1.8/packages/orm/creating_models.html#/propperties や http://fuelphp.jp/docs/1.8/classes/model_crud/introduction.html#/configuration を参照してください。
