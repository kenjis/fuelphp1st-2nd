# FuelPHP 1.7.2から1.7.3へのアップデート方法


`1.7/master`ブランチを最新の状態にします。

~~~
$ git fetch origin
$ git checkout 1.7/master
$ git merge origin/1.7/master
~~~

作業用の`develop`ブランチに`1.7/master`をマージします。

~~~
$ git checkout develop
$ git merge 1.7/master
~~~

コンフリクトが発生しますので`composer.json`を修正し、`git add`します。

~~~
$ git add composer.json
~~~

現状を確認します。

~~~
$ git status
On branch develop
Your branch is up-to-date with 'origin/develop'.
All conflicts fixed but you are still merging.
  (use "git commit" to conclude merge)

Changes to be committed:

	modified:   composer.json
	modified:   fuel/app/bootstrap.php
	modified:   fuel/app/classes/controller/welcome.php
	modified:   fuel/app/config/config.php
	modified:   fuel/app/config/routes.php
	modified:   fuel/app/tasks/robots.php
	modified:   oil
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

これでFuelPHP 1.7.3がインストールされました。

`composer.lock`が更新されているのでコミットすれば完了です。
