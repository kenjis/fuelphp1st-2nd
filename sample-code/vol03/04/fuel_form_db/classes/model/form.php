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


class Model_Form extends Model_Crud
{
	// 使用するテーブル名
	protected static $_table_name = 'form';
	// 作成日時
	protected static $_created_at = 'created_at';
	// 更新日時
	protected static $_updated_at = 'updated_at';
}
