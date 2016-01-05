<ul class="breadcrumb">
	<li>
		<i class="icon-home"></i>
		<a href="index.php/admin/index">Home</a>
		<i class="icon-angle-right"></i> 
	</li>
	<li>
		<i class="icon-create"></i>
		<a><?php if(isset($module) && !empty($module)) echo $module;?></a>
	</li>
</ul>
<div class="row-fluid sortable ui-sortable">
	<div class="box span12">
		<div class="box-header" data-original-title="">
			<h2><i class="halflings-icon white edit"></i><span class="break"></span>Create new a kind</h2>
			<div class="box-icon">
				<a href="#" class="btn-setting"><i class="halflings-icon white wrench"></i></a>
				<a href="#" class="btn-minimize"><i class="halflings-icon white chevron-up"></i></a>
				<a href="#" class="btn-close"><i class="halflings-icon white remove"></i></a>
			</div>
		</div>
		<div class="box-content">
			
			<form class="form-horizontal" method="post" action="">
			  <fieldset>
				<div class="control-group">
					<?php echo validation_errors(); ?>
				</div>
				<div class="control-group">
				  
					<?php
						if(isset($data) && !empty($data))
						{
							echo '<label class="control-label" for="kind">Name Kind:</label>
				  <div class="controls" ><input name="kind_id" type="text" value="'.$data['id'].'" style="display: none;"/>
								<input name="kind_name" type="text" id="kind" placeholder="Name Kind..." value="'.$data['name'].'" /></div>';
						}
						else
						{
							echo '<div class="alert alert-warning">
									<button type="button" class="close" data-dismiss="alert">×</button>
									<strong>Warning!</strong> No data.
								</div>';
						}
					?>
				  
				</div>
				<div class="form-actions">
				<?php 
					if(isset($data) && !empty($data))
					{
						echo '<input name="submit" type="submit" class="btn btn-primary" value="Save changes"/>
							<button type="reset" class="btn">Cancel</button>';
					}
					else
					{
						echo '<a class="btn" href="index.php/admin/kind">Cancel</a>';
					}
				?>
				  
				</div>
			  </fieldset>
			</form>   
		</div>
	</div><!--/span-->
</div>