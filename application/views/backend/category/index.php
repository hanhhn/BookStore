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
					<?php
						$smg_flashdata = $this->session->flashdata('smg_flashdata');
						if(isset($smg_flashdata) && !empty($smg_flashdata)) {
							if($smg_flashdata['type']) {
								echo '<div class="alert alert-success">
									<button type="button" class="close" data-dismiss="alert">×</button>
									<strong>Successful!</strong> '.$smg_flashdata['msg'].'.
								</div>';
							}
							else {
								echo '<div class="alert alert-error">
									<button type="button" class="close" data-dismiss="alert">×</button>
									<strong>Error!</strong> '.$smg_flashdata['msg'].'.
								</div>';
							}
						}
					?>
				</div>
				<div class="control-group">
				  <label class="control-label" for="category">Name Category:</label>
				  <div class="controls" >
					<input name="category_name" type="text" id="category" placeholder="Name Category..." value="<?php echo set_value('category_name'); ?>" />
				  </div>
				</div>
				<div class="form-actions">
				  <input name="submit" type="submit" class="btn btn-primary" value="Save changes"/>
				  <button type="reset" class="btn">Cancel</button>
				</div>
			  </fieldset>
			</form>   
		</div>
	</div><!--/span-->
</div>

<div class="row-fluid sortable ui-sortable">
	<div class="box span12">
		<div class="box-header" data-original-title="">
			<h2><i class="halflings-icon white edit"></i><span class="break"></span>List category</h2>
			<div class="box-icon">
				<a href="#" class="btn-setting"><i class="halflings-icon white wrench"></i></a>
				<a href="#" class="btn-minimize"><i class="halflings-icon white chevron-up"></i></a>
				<a href="#" class="btn-close"><i class="halflings-icon white remove"></i></a>
			</div>
		</div>
		<div class="box-content">
			<table class="table table-striped table-bordered bootstrap-datatable datatable dataTable" id="DataTables_Table_0" aria-describedby="DataTables_Table_0_info">
				<thead>
					<tr role="row">
						<th class="sorting_asc" role="columnheader" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Username: activate to sort column descending" style="width: 170px;">STT</th>
						<th class="sorting_asc" role="columnheader" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Username: activate to sort column descending" style="width: 170px;">Check</th>
						<th class="sorting" role="columnheader" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Date registered: activate to sort column ascending" style="width: 248px;">Category Name</th>
						<th class="sorting" role="columnheader" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Actions: activate to sort column ascending" style="width: 289px;">Actions</th>
					</tr>
				</thead>  
			  
				<tbody role="alert" aria-live="polite" aria-relevant="all">
					<?php 
						if(isset($data) && !empty($data))
						{
							foreach($data as $key => $value)
							{
								echo'<tr class="odd">
									<td class=" sorting_1">'.$key.'</td>
									<td class="center "><input type="checkbox"/></td>
									<td class="center ">'.$value['name'].'</td>
									<td class="center ">
										<a class="btn btn-success" href="">
											<i class="halflings-icon white zoom-in"></i>  
										</a>
										<a class="btn btn-info" href="index.php/admin/category/edit/'.$value['id'].'">
											<i class="halflings-icon white edit"></i>  
										</a>
										<a class="btn btn-danger" href="index.php/admin/category/del/'.$value['id'].'">
											<i class="halflings-icon white trash"></i> 
										</a>
									</td>
								</tr>';
							}
						}
					?>
				</tbody>
			</table>            
		</div>
	</div><!--/span-->
</div>