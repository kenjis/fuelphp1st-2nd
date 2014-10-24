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


class Controller_Status extends Controller
{
	public function action_index()
	{
		// Statusモデルから結果を取得する
		$results = Model_Status::find_body_by_username('foo');
		
		// $resultsをダンプして確認する
		Debug::dump($results);
	}
}
