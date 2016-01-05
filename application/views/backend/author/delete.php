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
			<h2><i class="halflings-icon white edit"></i><span class="break"></span>Create new a category</h2>
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
				<?php
					if(isset($data) && !empty($data))
					{
						echo '<div class="control-group">
						  <label class="control-label" for="author">Author Name:</label>
						  <div class="controls" >
							<input class="span6 input-xlarge uneditable-input" name="author_name" type="text" id="author" placeholder="Author name..." value="'.$data['name'].'" />
						  </div>
						</div>
						<div class="control-group">
						  <label class="control-label" for="author">Born:</label>
						  <div class="controls" >
							<input class="input-xlarge uneditable-input" name="author_born" type="date" id="author" max="'.date("d/m/Y").'" value="'.$data['born'].'" />
						  </div>
						</div>
						<div class="control-group">
						  <label class="control-label" for="author">Field:</label>
						  <div class="controls" >
							<input class="input-xlarge uneditable-input" name="author_field" type="text" id="author" placeholder="Field..." value="'.$data['field'].'" />
						  </div>
						</div>
						<div class="control-group">
						  <div class="control-group hidden-phone">
							  <label class="control-label" for="textarea1">Introduce:</label>
							  <div class="controls">
								<textarea name="author_introduce" class="cleditor" id="textarea1" rows="3">'.$data['introduce'].'</textarea>
							  </div>
							</div>
						</div>';
						echo '<div class="form-actions">
								<input name="submit" type="submit" class="btn btn-danger" value="Delete now"/>
								<button type="reset" class="btn">Cancel</button>
							</div>';
			
					}
					else
					{
						echo '<div class="alert alert-warning">
									<button type="button" class="close" data-dismiss="alert">×</button>
									<strong>Warning!</strong> No data.
								</div>';
						echo '<a class="btn" href="index.php/admin/author">Cancel</a>';
					}
				?>
				  
				</div>
			  </fieldset>
			</form>   
		</div>
	</div><!--/span-->
</div>