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

$fruits = array('Apple', 'Orange', 'Grape');
?>
<ul>
<?php foreach ($fruits as $item): ?>
<li><?php echo $item; ?></li>
<?php endforeach; ?>
</ul>
