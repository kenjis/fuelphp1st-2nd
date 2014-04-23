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


class Controller_ViewSample2 extends Controller
{
	public function action_index()
	{
		// Viewオブジェクトを生成する
		$view = View::forge('viewsample');
		
		// Viewに変数をセットする
		$view->set('title', 'ビューのサンプル2');
		$view->set('username', 'Mugi');
		
		// Viewオブジェクトを返す
		return $view;
	}
}
