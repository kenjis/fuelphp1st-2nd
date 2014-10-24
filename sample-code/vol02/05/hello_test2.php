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


require __DIR__ . '/hello.php';

function assertTrue($condition)
{
	if ( ! $condition) {
		throw new Exception('Assertion failed.');
	}
}

$test = hello();
$expected = 'Hello World!';
assertTrue($test === $expected);
