<h2>Editing <span class='muted'>Inquiry</span></h2>
<br>

<?php echo render('inquiry/_form'); ?>
<p>
	<?php echo Html::anchor('inquiry/view/'.$inquiry->id, 'View'); ?> |
	<?php echo Html::anchor('inquiry', 'Back'); ?></p>
