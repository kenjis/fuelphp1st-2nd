# FuelPHP 1.7.3から1.8.0へのアップデート方法


`1.8/master`ブランチを最新の状態にします。

~~~
$ git fetch origin
$ git checkout 1.8/master
$ git merge origin/1.8/master
~~~

作業用の`develop`ブランチに`1.8/master`をマージします。

~~~
$ git checkout develop
$ git merge 1.8/master
~~~

コンフリクトが発生しますので`composer.json`を修正し、`git add`します。

~~~
$ git add composer.json
~~~

現状を確認します。

~~~
On branch develop
Your branch is up-to-date with 'origin/develop'.
All conflicts fixed but you are still merging.
  (use "git commit" to conclude merge)

Changes to be committed:

	modified:   .travis.yml
	modified:   composer.json
	modified:   composer.phar
	modified:   fuel/app/bootstrap.php
	modified:   fuel/app/classes/controller/welcome.php
	modified:   fuel/app/config/config.php
	modified:   fuel/app/tasks/robots.php
	new file:   fuel/app/tests/presenter/.gitkeep
	modified:   oil
	modified:   public/.htaccess
	modified:   public/index.php
~~~

コミットします。

~~~
$ git commit
~~~

Composerで依存パッケージ（FuelPHPのコアやパッケージを含む）を更新します。

~~~
$ php composer.phar update --prefer-dist
~~~

以下のように Token を訊かれた場合は、<http://blog.a-way-out.net/blog/2015/06/26/fuelphp-1-7-3-installation-trouble/> を参照してください。

~~~
Could not fetch https://api.github.com/repos/fuel/docs, please create a GitHub OAuth token to go over the API rate limit
Head to https://github.com/settings/tokens/new?scopes=repo&description=Composer+on+hostname+2016-04-10+0611
to retrieve a token. It will be stored in "…/.composer/auth.json" for future use by Composer.
Token (hidden): 
~~~

インストールにはかなり時間がかかります。完了すれば、FuelPHP 1.8.0がインストールされました。

`composer.lock`が更新されているのでコミットすれば完了です。
