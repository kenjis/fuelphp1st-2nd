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
* MyValidationRules class Tests
*
* @group App
*/
class myvalidationrules_Test extends TestCase
{
	public function test_validation_no_tab_and_newline_検証パス()
	{
		$input = 'タブも改行も含まない文字列です。';
		$test = MyValidationRules::_validation_no_tab_and_newline($input);
		$expected = true;
		
		$this->assertEquals($expected, $test);
	}
	
	/**
	* @dataProvider provider_不正な文字列
	*/
	public function test_validation_no_tab_and_newline_検証エラー($input)
	{
		$test = MyValidationRules::_validation_no_tab_and_newline($input);
		$expected = false;
		
		$this->assertEquals($expected, $test);
	}
	
	public function provider_不正な文字列()
	{
		return array(
			array("改行を含む\n文字列です。"),
			array("改行を含む\r文字列です。"),
			array("改行を含む\r\n文字列です。"),
			array("タブを含む\t文字列です。"),
			array("改行と\rタブを含む\t文字列\nです。"),
		);
	}
}
