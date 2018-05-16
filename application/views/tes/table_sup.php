<div class="row">
	<div class="col-md-12 col-sm-12 col-xs-12">
		<div class="x_panel">
			<div class="x_title">
				<h2>Pemasok</h2>
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
				<?php if($this->session->flashdata('sup_added')): ?>
    				<div class="alert alert-info alert-dismissible fade in" role="alert">
		                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span>
		                </button>
	                    <strong><?php echo $this->session->flashdata('sup_added'); ?></strong>
                 	</div>
				<?php endif; ?>

				<a href="<?php echo base_url('example/form_sup') ?>"><button type="button" class="btn btn-success" style="margin-bottom: 13px"><span class="fa fa-plus"></span> Tambah Pemasok </button></a>
				<!--
				<p class="text-muted font-13 m-b-30">
					DataTables has most features enabled by default, so all you need to do to use it with your own tables is to call the construction function: <code>$().DataTable();</code>
				</p>
			-->
				<table id="datatable" class="table table-striped table-bordered">
					<thead>
						<tr>
							<th>Nama Supplier</th>
							<th>Alamat</th>
							<th>No Telepon</th>
							<th>Aksi</th>
							
						</tr>
					</thead>

					<tbody>
						<?php foreach($table_sup as $s){ ?>
						<tr>
							<td><?php echo $s->nama_pemasok ?></td>
							<td><?php echo $s->alamat ?></td>
							<td><?php echo $s->telepon ?></td>
							<td style=" text-align: center;">
								<?php echo anchor('example/edit_form_sup/'.$s->id_pem, '<button class="btn btn-info btn-xs" type="button"><span class="fa fa-pencil"></span></button>'); ?>
								<?php echo anchor('example/remove_sup/'.$s->id_pem, '<button class="btn btn-danger btn-xs" type="button"><span class="fa fa-trash"></span></button>');?>
					         </td>
						</tr>

						<?php } ?>

					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>
