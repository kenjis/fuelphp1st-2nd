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


/**
* Person class Tests
*
* @group App
*/
class person_Test extends TestCase
{
	public function test_男性の場合は性別を取得するとmaleである()
	{
		$person = new Person('Rintaro', 'male', '1991/12/14');
		
		$test = $person->get_gender();
		$expected = 'male';
		
		$this->assertEquals($expected, $test);
	}
}
