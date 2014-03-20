<div class="row">
	<div class="col-lg-10 col-lg-offset-1">
		<table class="table table-striped table-hover">
			<thead>
				<tr>
					<th>#</th>
					<th>Username</th>
					<th>Email Address</th>
					<th>Roles</th>
					<th>Project Lead</th>
					<th>Admin</th>
					<th>Modify</th>
				</tr>
			</thead>
			<tbody>
				<?php foreach ($users as $user) { ?>
					<tr>
						<td><?= $user->id; ?></td>
						<td><?= $user->username ?></td>
						<td><?= $user->email ?></td>
						<td><?php foreach ($user->getRoles() as $role) {
								echo '<div>'.$role.'</div>';
							}?></td>
						<td class="modify"></td>
						<td class="modify"></td>
						<td class="modify"></td>
					</tr>
				<?php } ?>
			</tbody>
		</table>
	</div>
</div>