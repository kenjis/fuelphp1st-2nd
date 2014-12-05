# ラトルズ刊行『はじめてのフレームワークとしての FuelPHP 改訂版』正誤情報

ここでは、本書の正誤情報を提供します。

### 第 3 章 FuelPHP のインストール設定

(P.100)

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
