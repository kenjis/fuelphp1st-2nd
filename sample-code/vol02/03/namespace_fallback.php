<?php
/**
 * 電子書籍『はじめてのフレームワークとしてのFuelPHP 第2版』の一部です。
 *
 * @version    1.0
 * @author     Kenji Suzuki <https://github.com/kenjis>
 * @license    MIT License
 * @copyright  2014 Kenji Suzuki
 * @link       https://github.com/kenjis/fuelphp1st-2nd
 */


namespace ABC\Test;  // 以下は名前空間「ABC\Test」

// trim()関数は定義されていないのでグローバル空間のものが呼ばれる
echo trim(' abc '), PHP_EOL;

// グローバル空間を明示して呼び出す
echo \trim(' abc '), PHP_EOL;
