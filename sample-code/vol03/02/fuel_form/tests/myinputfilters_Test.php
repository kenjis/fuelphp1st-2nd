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


/**
* MyInputFilters class Tests
*
* @group App
*/
class myinputfilters_Test extends TestCase
{
	public function test_check_encoding_SJIS文字列を検証すると例外が発生()
	{
		$this->setExpectedException(
			'HttpInvalidInputException', 'Invalid input data'
		);
		
		$input = mb_convert_encoding('SJISの文字列です。', 'SJIS');
		$test = MyInputFilters::check_encoding($input);
	}
	
	public function test_check_encoding_正常な文字列は検証をパスしその文字列が返る()
	{
		$input = '正常なUTF-8の文字列です。';
		$test = MyInputFilters::check_encoding($input);
		$expected = $input;
		
		$this->assertEquals($expected, $test);
	}
	
	/**
	* @dataProvider provider_改行コードを含む文字列
	*/
	public function test_check_control_改行とタブを含む文字列は検証をパス($data)
	{
		$input = $data;
		$test = MyInputFilters::check_control($input);
		$expected = $input;
		
		$this->assertEquals($expected, $test);
	}
	
	public function provider_改行コードを含む文字列()
	{
		return array(
			array("改行を含む\n文字列です。"),
			array("改行を含む\r文字列です。"),
			array("改行を含む\r\n文字列です。"),
			array("タブを含む\t文字列です。"),
			array("改行と\rタブを含む\t文字列\nです。"),
		);
	}
	
	/**
	* @dataProvider provider_制御文字を含む文字列
	*/
	public function test_check_control_制御文字を含む文字列を検証すると例外が発生($data)
	{
		$this->setExpectedException(
			'HttpInvalidInputException', 'Invalid input data'
		);
		
		$input = $data;
		$test = MyInputFilters::check_control($input);
	}
	
	public function provider_制御文字を含む文字列()
	{
		return array(
			array("NULL文字を含む文字列です。\0"),
			array("NULL文字と改行コードを含む文字列です。\0\n"),
		);
	}
}
