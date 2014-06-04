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


class Controller_Check extends Controller
{
	public function action_index()
	{
		echo '<pre>';
		echo 'FuelPHP version: ' . Fuel::VERSION . "\n";
		echo '         locale: ' . setlocale(LC_ALL, '0') . "\n";
		echo '           date: ' . Date::forge()->format('mysql') . "\n";
		echo 'default_charset: ' . ini_get('default_charset') . "\n";
		echo '</pre>';
	}
}
