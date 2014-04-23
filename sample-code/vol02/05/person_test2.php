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


require __DIR__ . '/person.php';

class Person_Test2 extends PHPUnit_Framework_TestCase
{
	public static function setUpBeforeClass()
	{
		fwrite(STDOUT, __METHOD__ . "\n");
	}
	
	protected function setUp()
	{
		fwrite(STDOUT, __METHOD__ . "\n");
	}
	
	public function test_get_gender_male()
	{
		fwrite(STDOUT, __METHOD__ . "\n");
		
		$person = new Person('Rintaro', 'male', '1991/12/14');
		
		$test = $person->get_gender();
		$expected = 'male';
		
		$this->assertEquals($expected, $test);
	}
	
	public function test_get_gender_female()
	{
		fwrite(STDOUT, __METHOD__ . "\n");
	
		$person = new Person('Mayuri', 'female', '1994/2/1');
	
		$test = $person->get_gender();
		$expected = 'female';
	
		$this->assertEquals($expected, $test);
	}
	
	protected function tearDown()
	{
		fwrite(STDOUT, __METHOD__ . "\n");
	}
	
	public static function tearDownAfterClass()
	{
		fwrite(STDOUT, __METHOD__ . "\n");
	}
}
