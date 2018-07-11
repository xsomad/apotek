	<div class="row">
	<div class="col-md-12 col-sm-12 col-xs-12">
		<div class="x_panel">
			<div class="x_title">
				<h2>Stok Obat</h2>
				<ul class="nav navbar-right panel_toolbox">
					<li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
					</li>
					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
						<ul class="dropdown-menu" role="menu">
							<li><a href="#">Settings 1</a>
							</li>
							<li><a href="#">Settings 2</a>
							</li>
						</ul>
					</li>
					<li><a class="close-link"><i class="fa fa-close"></i></a>
					</li>
				</ul>
				<div class="clearfix">
				</div>
			</div>

			<div class="x_content">
				<?php if($this->session->flashdata('med_added')): ?>
    				<div class="alert alert-info alert-dismissible fade in" role="alert">
		                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span>
		                </button>
	                    <strong><?php echo $this->session->flashdata('med_added'); ?></strong>
                 	</div>
                 	
				<?php endif; ?>

				<a href="<?php echo base_url('example/form_med') ?>"><button type="button" class="btn btn-success" style="margin-bottom: 13px"><span class="fa fa-plus"></span> Tambah Obat </button></a>
				<!--
				<p class="text-muted font-13 m-b-30">
					Responsive is an extension for DataTables that resolves that problem by optimising the table's layout for different screen sizes through the dynamic insertion and removal of columns from the table.
				</p>
			-->
				<table id="datatable-buttons" class="table table-striped table-bordered">
					<thead>
						<tr>
							<th>Nama Obat</th>
							<th>Penyimpanan</th>
							<th>Kategori</th>
							
							<th>Stok</th>
							<th>Kedaluwarsa</th>
							
							<th>Harga Jual</th>
							<th>Unit</th>
							<th>Aksi</th>
						</tr>
					</thead>
					<tbody>
						<?php foreach($table_med as $m){ ?>
						<tr>
							<td><?php echo $m->nama_obat ?></td>
							<td><?php echo $m->penyimpanan ?></td>
							<td><?php echo $m->nama_kategori ?></td>
					
							<td><?php echo $m->stok ?></td>
							<td><?php echo $m->kedaluwarsa ?></td>
							
							<td><?php echo number_format($m->harga_jual) ?></td>
							<td><?php echo $m->unit ?></td>
							<td style=" text-align: center;">
								<?php echo anchor('example/edit_form_med/'.$m->id_obat, '<button class="btn btn-info btn-xs" type="button"><span class="fa fa-pencil"></span></button>'); ?>
								<?php echo anchor('example/remove_med/'.$m->id_obat, '<button class="btn btn-danger btn-xs" type="button"><span class="fa fa-trash"></span></button>');?>
					         </td>
						</tr>

						<?php } ?>
					</tbody>

				</table>
		</div>
	</div>
</div>


 <div class="col-md-6 col-sm-6 col-xs-12">
		<div class="x_panel">
			<div class="x_title">
				<h2>Stripped table <small>Stripped table subtitle</small></h2>
				<ul class="nav navbar-right panel_toolbox">
					<li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
					</li>
					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
						<ul class="dropdown-menu" role="menu">
							<li><a href="#">Settings 1</a>
							</li>
							<li><a href="#">Settings 2</a>
							</li>
						</ul>
					</li>
					<li><a class="close-link"><i class="fa fa-close"></i></a>
					</li>
				</ul>
				<div class="clearfix"></div>
			</div>
			<div class="x_content">
				<canvas id="pieChart"></canvas>
				<?php
$this->db->select('*');
$this->db->from('table_med');
$this->db->where('kedaluwarsa', date('Y-m-d'));
$query = $this->db->get();
// Produces: 
// SELECT * FROM service_taxdate
// WHER end_date =current date ( YYYY-mm-dd)
?>
			</div>
		</div>
	</div>
	</div>





