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
 * Model Mail class Tests
 * 
 * @group App
 */
class model_mail_Test extends TestCase
{
	public function setUp()
	{
		$this->post = array(
			'email'   => 'foo@example.com',
			'name'    => '送信者',
			'comment' => 'メール送信のテスト',
		);
	}
	
	public function test_メールを送信するとmail関数が呼ばれる()
	{
		// mail()関数からのデータをリセットしておく
		Config::set('_tests.mail.data', array());
		
		$mail = new Model_Mail();
		$mail->send($this->post);
		
		// mail()関数からのデータを代入
		$mail_data = Config::get('_tests.mail.data');
//		var_dump($mail_data);
//		exit;
		
		$this->assertNotEquals(array(), $mail_data);
	}
	
	public function test_メールヘッダを確認()
	{
		// mail()関数からのデータを代入
		$mail_data = Config::get('_tests.mail.data');
		
		// 管理者 <info@example.jp>
		$expected = '=?UTF-8?B?566h55CG6ICF?= <info@example.jp>';
		$this->assertEquals($expected, $mail_data['to']);
		
		// コンタクトフォーム
		$expected = '=?UTF-8?B?44Kz44Oz44K/44Kv44OI44OV44Kp44O844Og?=';
		$this->assertEquals($expected, $mail_data['subject']);
		
		// From: 送信者 <foo@example.com>
		$pattern = '/' 
			. preg_quote('From: =?UTF-8?B?6YCB5L+h6ICF?= <foo@example.com>', '/') 
			. '/u';
		$this->assertRegExp($pattern, $mail_data['additional_headers']);
	}
	
	public function test_メール本文を確認()
	{
		// mail()関数からのデータを代入
		$mail_data = Config::get('_tests.mail.data');
		
		$pattern = '/名前: ' . preg_quote($this->post['name'], '/') . '/u';
		$this->assertRegExp($pattern, $mail_data['message']);
		
		$pattern = '/メールアドレス: ' . preg_quote($this->post['email'], '/') . '/u';
		$this->assertRegExp($pattern, $mail_data['message']);
		
		$pattern = '/' . preg_quote($this->post['comment'], '/') . '/u';
		$this->assertRegExp($pattern, $mail_data['message']);
	}
	
	public function test_追加パラメータを確認()
	{
		// mail()関数からのデータを代入
		$mail_data = Config::get('_tests.mail.data');
		
		$pattern = '/-oi -f ' . preg_quote($this->post['email'], '/') . '/u';
		$this->assertRegExp($pattern, $mail_data['additional_parameters']);
	}
}
