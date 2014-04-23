<h2>一覧</h2>
<br>
<?php if ($forms): ?>
<table class="table table-striped">
	<thead>
		<tr>
			<th>日時</th>
			<th>名前</th>
			<th>メールアドレス</th>
			<th>コメント</th>
			<th>IPアドレス</th>
			<th></th>
		</tr>
	</thead>
	<tbody>
<?php foreach ($forms as $item): ?>		<tr>

			<td><?php echo Date::forge($item->created_at)->format('mysql'); ?></td>
			<td><?php echo $item->name; ?></td>
			<td><?php echo $item->email; ?></td>
			<td><?php echo Str::truncate($item->comment, 50, '...', true); ?></td>
			<td><?php echo $item->ip_address; ?></td>
			<td>
				<?php echo Html::anchor('admin/form/view/'.$item->id, '表示'); ?>

			</td>
		</tr>
<?php endforeach; ?>	</tbody>
</table>

<?php else: ?>
<p>問い合わせはありません。</p>

<?php endif; ?>
