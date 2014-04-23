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


// AspectMock\Testクラスをtestとしてインポート
use AspectMock\Test as test;

abstract class AmTestCase extends \Fuel\Core\TestCase
{
	protected function tearDown()
	{
		test::clean(); // 登録したモックをすべて削除
	}
}
