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


class Controller_Error extends Controller_Template
{
	public function action_invalid($message = null)
	{
		if ($message === null)
		{
			return 'Invalid input data';
		}
		else
		{
			return e($message);
		}
	}
}
