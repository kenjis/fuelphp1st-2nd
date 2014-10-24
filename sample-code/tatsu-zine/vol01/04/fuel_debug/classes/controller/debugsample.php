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


class Controller_DebugSample extends Controller
{
	public function action_index()
	{
		$output = '';
		
		for ($i = 0; $i < 10; $i++) {
			$output .= $this->process($i);
		}
		
		return $output;
	}

	public function process($arg)
	{
		$val = 2 * $arg;
		return '2×' . $arg . ' は ' . $val . ' です。<br>';
	}
}
