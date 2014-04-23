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


class Controller_RoutingTest extends Controller
{
	public function router($resource, $arguments)
	{
		// ルート情報を表示
		Debug::dump($this->request->route);
		// 名前付きパラメータの一覧を表示
		Debug::dump($this->params());
	}
}
