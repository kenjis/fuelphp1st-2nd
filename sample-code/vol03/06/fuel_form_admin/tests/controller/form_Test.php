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


// AspectMock\Testクラスをtestとしてインポート
use AspectMock\Test as test;

/**
 * Controller Form class Tests
 * 
 * @group App
 * @group AppController
 */
class controller_form_Test extends AmTestCase
{
	public function test_action_index_get()
	{
		// HMVCリクエストを生成
		$request = Request::forge('form/index');
		// リクエストを実行しレスポンスを取得
		$response = $request->execute()->response();
		
		// HTTPステータスコードのテスト
		$status = $response->status;
		$expected = 200;
		$this->assertEquals($expected, $status);
		
		// titleのテスト
		$title = $response->body->title;
		$expected = 'コンタクトフォーム';
		$this->assertEquals($expected, $title);
		
		// HTMLのテスト
		$body = $response->body()->render();
		$pattern = '/' . preg_quote('お問い合わせ', '/') . '/u';
		$this->assertRegExp($pattern, $body);
	}
	
	public function test_action_index_post()
	{
		// Input::method()を単にPOSTを返すモックに置き換え
		$input = test::double('Fuel\Core\Input', ['method' => 'POST']);
		// Fieldset::repopulate()を単にtrueを返すモックに置き換え
		$fs = test::double('Fuel\Core\Fieldset', ['repopulate' => true]);
		
		// HMVCリクエストを実行
		$response = Request::forge('form/index')->execute()->response();
		
		// Fieldset::repopulate()が実行されたことを確認
		$fs->verifyInvoked('repopulate');
	}
	
	public function test_action_confirm_valid()
	{
		// Validation::run()を単にtrueを返すモックに置き換え
		$val = test::double('Fuel\Core\Validation', ['run' => true]);
		
		// HMVCリクエストを実行
		$response = Request::forge('form/confirm')->execute()->response();
		
		// titleのテスト
		$title = $response->body->title;
		$expected = 'コンタクトフォーム: 確認';
		$this->assertEquals($expected, $title);
	}
	
	public function test_action_confirm_invalid()
	{
		// Validation::run()を単にfalseを返すモックに置き換え
		$val = test::double('Fuel\Core\Validation', ['run' => false]);
		
		// HMVCリクエストを実行
		$response = Request::forge('form/confirm')->execute()->response();
		
		// titleのテスト
		$title = $response->body->title;
		$expected = 'コンタクトフォーム: エラー';
		$this->assertEquals($expected, $title);
	}
	
	/**
	 * @expectedException HttpInvalidInputException
	 * @expectedExceptionMessage ページ遷移が正しくありません
	 */
	public function test_action_send_csrf_fail()
	{
		// Security::check_token()を単にfalseを返すモックに置き換え
		$sec = test::double('Fuel\Core\Security', ['check_token' => false]);
		
		// HMVCリクエストを実行
		$response = Request::forge('form/send')->execute()->response();
	}
	
	public function test_action_send_valid_save_ok()
	{
		// Security::check_token()を単にtrueを返すモックに置き換え
		$sec = test::double('Fuel\Core\Security', ['check_token' => true]);
		// Validation::run()を単にtrueを返すモックに置き換え
		$val = test::double('Fuel\Core\Validation', ['run' => true]);
		// Model_Form::save()を単にtrueを返すモックに置き換え
		$model_form = test::double('Model_Form', ['save' => true]);
		// Model_Mail::send()を単にtrueを返すモックに置き換え
		$model_mail = test::double('Model_Mail', ['send' => true]);
		
		// HMVCリクエストを実行
		$response = Request::forge('form/send')->execute()->response();
		
		// titleのテスト
		$title = $response->body->title;
		$expected = 'コンタクトフォーム: 送信完了';
		$this->assertEquals($expected, $title);
	}
	
	public function test_action_send_EmailValidationFailedException()
	{
		Package::load('email');
		
		// Security::check_token()を単にtrueを返すモックに置き換え
		$sec = test::double('Fuel\Core\Security', ['check_token' => true]);
		// Validation::run()を単にtrueを返すモックに置き換え
		$val = test::double('Fuel\Core\Validation', ['run' => true]);
		// Model_Form::save()を単にtrueを返すモックに置き換え
		$model_form = test::double('Model_Form', ['save' => true]);
		// Model_Mail::send()を例外を投げるモックに置き換え
		$model_mail = test::double(
			'Model_Mail',
			['send' => function() { throw new EmailValidationFailedException; }]
		);
		
		// HMVCリクエストを実行
		$response = Request::forge('form/send')->execute()->response();
		
		// titleのテスト
		$title = $response->body->title;
		$expected = 'コンタクトフォーム: 送信エラー';
		$this->assertEquals($expected, $title);
		
		// html_errorのテスト
		$title = $response->body->content->html_error;
		$expected = '<p>メールアドレスに誤りがあります。</p>';
		$this->assertEquals($expected, $title);
	}
	
	public function test_action_send_invalid()
	{
		// Security::check_token()を単にtrueを返すモックに置き換え
		$sec = test::double('Fuel\Core\Security', ['check_token' => true]);
		// Validation::run()を単にfalseを返すモックに置き換え
		$val = test::double('Fuel\Core\Validation', ['run' => false]);
		
		// HMVCリクエストを実行
		$response = Request::forge('form/send')->execute()->response();
		
		// titleのテスト
		$title = $response->body->title;
		$expected = 'コンタクトフォーム: エラー';
		$this->assertEquals($expected, $title);
	}
	
	public function test_action_send_valid_save_fail()
	{
		// Security::check_token()を単にtrueを返すモックに置き換え
		$sec = test::double('Fuel\Core\Security', ['check_token' => true]);
		// Validation::run()を単にtrueを返すモックに置き換え
		$val = test::double('Fuel\Core\Validation', ['run' => true]);
		// Model_Form::save()を単にfalseを返すモックに置き換え
		$model_form = test::double('Model_Form', ['save' => false]);
		
		// HMVCリクエストを実行
		$response = Request::forge('form/send')->execute()->response();
		
		// titleのテスト
		$title = $response->body->title;
		$expected = 'コンタクトフォーム: サーバエラー';
		$this->assertEquals($expected, $title);
	}
	
	public function test_action_send_EmailSendingFailedException()
	{
		Package::load('email');
		
		// Security::check_token()を単にtrueを返すモックに置き換え
		$sec = test::double('Fuel\Core\Security', ['check_token' => true]);
		// Validation::run()を単にtrueを返すモックに置き換え
		$val = test::double('Fuel\Core\Validation', ['run' => true]);
		// Model_Form::save()を単にtrueを返すモックに置き換え
		$model_form = test::double('Model_Form', ['save' => true]);
		// Model_Mail::send()を例外を投げるモックに置き換え
		$model_mail = test::double(
			'Model_Mail',
			['send' => function() { throw new EmailSendingFailedException; }]
		);
		
		// HMVCリクエストを実行
		$response = Request::forge('form/send')->execute()->response();
		
		// titleのテスト
		$title = $response->body->title;
		$expected = 'コンタクトフォーム: 送信エラー';
		$this->assertEquals($expected, $title);
		
		// html_errorのテスト
		$title = $response->body->content->html_error;
		$expected = '<p>メールを送信できませんでした。</p>';
		$this->assertEquals($expected, $title);
	}
}
