<div class="row">
	<div class="col-sm-4 col-sm-offset-4">
		<ul>
	        <?php foreach($errors->all() as $error) { ?>
	            <li><?php echo $error; ?></li>
	        <?php } ?>
	    </ul>
		<?php echo Form::open(array('url'=>'users/create', 'class'=>'form-signup')); ?>
			<div class="form-group">
				<label for="username">Username</label>
				<input type="text" name="username" class="form-control" />
			</div>
			<div class="form-group">
				<label for="password">Password</label>
				<input type="password" name="password" class="form-control" />
			</div>
			<div class="form-group">
				<label for="password_confirmation">Verify Password</label>
				<input type="password" name="password_confirmation" class="form-control" />
			</div>
			<div class="form-group">
				<label for="email">Email Address</label>
				<input type="text" name="email" class="form-control" />
			</div>
			<input type="submit" name="submit" value="Register" class="btn btn-large btn-primary btn-block" />
		</form>
	</div>
</div>