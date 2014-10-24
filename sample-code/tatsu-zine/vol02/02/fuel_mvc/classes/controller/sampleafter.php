<?php
/**
 * 電子書籍『はじめてのフレームワークとしてのFuelPHP 第2版』の一部です。
 *
 * @version    1.1.0
 * @author     Kenji Suzuki <https://github.com/kenjis>
 * @license    MIT License
 * @copyright  2014 Kenji Suzuki
 * @link       https://github.com/kenjis/fuelphp1st-2nd
 */


class Controller_SampleAfter extends Controller
{
	public function after($response)
	{
		$response .= __METHOD__ . 'が実行されました。<br>';
		return parent::after($response);
	}
	
	public function action_index()
	{
		return __METHOD__ . 'が実行されました。<br>';
	}
	
	public function action_test()
	{
		return __METHOD__ . 'が実行されました。<br>';
	}
}
