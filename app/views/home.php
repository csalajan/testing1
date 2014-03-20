<?php if (Session::has('message')) { ?>
<div class="row">
	<p class="alert alert-<?php echo Session::get('alert'); ?>" style="text-align: center;"><?php echo Session::get('message'); ?></p>
</div>
<?php } ?>
