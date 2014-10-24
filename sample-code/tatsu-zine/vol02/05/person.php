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


class Person
{
	// プロパティ
	public	$name;       // 名前
	private $gender;     // 性別
	private $birthdate;  // 生年月日

	// コンストラクタ
	public function __construct($name, $gender, $birthdate) {
		$this->name      = $name;
		$this->gender    = $gender;
		$this->birthdate = $birthdate;
	}

	// 性別を取得するメソッド
	public function get_gender() {
		return $this->gender;
	}
}
