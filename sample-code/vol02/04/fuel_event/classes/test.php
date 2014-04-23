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


class Test
{
	public static function event_test($arg1, $arg2)
	{
		Log::info('イベントのテスト: ' . $arg2[0] . ', ' . $arg2[1] , __METHOD__);
	}
}
