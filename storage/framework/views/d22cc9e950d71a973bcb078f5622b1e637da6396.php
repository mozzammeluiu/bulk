<?php $__env->startSection('content'); ?>
	<div class="container-fluid app-body">
		<h3>Recent Posts Sent To Buffer </h3>

		<div class="row">
			<div class="col-md-12">
				<table class="table table-hover social-accounts">
					<thead>
					<tr>
						<th>Group Name</th>
						<th>Group Type</th>
						<th>Account Name</th>
						<th>Post Text</th>
						<th>Time</th>
					</tr>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
					</thead>
					<tbody>

					</tbody>
				</table>
			</div>
		</div>
	</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>