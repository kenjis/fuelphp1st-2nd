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


return array(
	'required'        => ':label 欄は必須です。',
	'min_length'      => ':label 欄は :param:1 文字以上にしてください。',
	'max_length'      => ':label 欄は :param:1 文字を超えないようにしてください。',
	'exact_length'    => 'The field :label must contain exactly :param:1 characters.',
	'match_value'     => 'The field :label must contain the value :param:1.',
	'match_pattern'   => 'The field :label must match the pattern :param:1.',
	'match_field'     => 'The field :label must match the field :param:1.',
	'valid_email'     => ':label 欄は有効なメールアドレスを入力してください。',
	'valid_emails'    => 'The field :label must contain a list of valid email addresses.',
	'valid_url'       => 'The field :label must contain a valid URL.',
	'valid_ip'        => 'The field :label must contain a valid IP address.',
	'numeric_min'     => 'The minimum numeric value of :label must be :param:1',
	'numeric_max'     => 'The maximum numeric value of :label must be :param:1',
	'numeric_between' => 'The field :label must contain a numeric value between :param:1 and :param:2',
	'valid_string'    => 'The valid string rule :rule(:param:1) failed for field :label',
	'required_with'   => 'The field :label must contain a value if :param:1 contains a value.',
	'valid_date'      => 'The field :label must contain a valid formatted date.',
	
	// 独自ルール
	'no_tab_and_newline' => ':label 欄にはタブや改行を含めないようにしてください。',
);
