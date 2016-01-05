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
<div class="row-fluid sortable ui-sortable" style="margin: 25px 0px;">
	<div style="float: right">
		<a href="index.php/admin/author/add" class="btn">Add new a author</a>
	</div>
</div>
<div >
	<div class="box span12">
		<div class="box-header" data-original-title="">
			<h2><i class="halflings-icon white edit"></i><span class="break"></span>List author</h2>
			<div class="box-icon">
				<a href="#" class="btn-setting"><i class="halflings-icon white wrench"></i></a>
				<a href="#" class="btn-minimize"><i class="halflings-icon white chevron-up"></i></a>
				<a href="#" class="btn-close"><i class="halflings-icon white remove"></i></a>
			</div>
		</div>
		<div class="box-content">
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
			<table class="table table-striped table-bordered bootstrap-datatable datatable dataTable" id="DataTables_Table_0" aria-describedby="DataTables_Table_0_info">
				<thead>
					<tr role="row">
						<th class="sorting_asc" role="columnheader" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-sort="ascending" style="width: 25px;">STT</th>
						<th class="sorting_asc" role="columnheader" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-sort="ascending" style="width: 50px;">Check</th>
						<th class="sorting" role="columnheader" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" style="width: 200px;">Author Name</th>
						<th class="sorting" role="columnheader" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" style="width: 150px;">Born</th>
						<th class="sorting" role="columnheader" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" style="width: 248px;">Field</th>
						<th class="sorting" role="columnheader" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" style="width: 248px;">Introcude</th>
						<th class="sorting" role="columnheader" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" style="width: 160px;">Actions</th>
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
									<td class="center ">'.date('d/m/Y',strtotime(date($value['born']))).'</td>
									<td class="center ">'.$value['field'].'</td>
									<td class="center ">'.$value['introduce'].'</td>
									<td class="center ">
										<a class="btn btn-success" href="">
											<i class="halflings-icon white zoom-in"></i>  
										</a>
										<a class="btn btn-info" href="index.php/admin/author/edit/'.$value['id'].'">
											<i class="halflings-icon white edit"></i>  
										</a>
										<a class="btn btn-danger" href="index.php/admin/author/del/'.$value['id'].'">
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