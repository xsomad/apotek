	<div class="col-md-12 col-sm-12 col-xs-12">
		<div class="x_panel">
			<div class="x_title">
				<h2>Kategori Obat</h2>
				<ul class="nav navbar-right panel_toolbox">
					<li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
					</li>
					
					<li><a class="close-link"><i class="fa fa-close"></i></a>
					</li>
				</ul>
				<div class="clearfix"></div>
			</div>

			<div class="x_content">
				<?php if($this->session->flashdata('cat_added')): ?>
                  <button id="melinda" style="display: none;" class="btn btn-default source" onclick="new PNotify({
                                  title: 'Berhasil',
                                  text: '<?php echo $this->session->flashdata('cat_added'); ?>',
                                  type: 'success',
                                  styling: 'bootstrap3'
                              });">Success</button>
                 	</div>
                 	
				<?php endif; ?>

				

				<a href="<?php echo base_url('example/form_cat') ?>"><button type="button" class="btn btn-success" style="margin-bottom: 13px"><span class="fa fa-plus"></span> Tambah Kategori </button></a>
				
				<table id="datatable-buttons" class="table table-striped table-bordered bulk_action">
					<thead>
						<tr>
							<th>ID</th>
							<th>Nama Kategori</th>
							<th>Deskripsi</th>
							<th>Aksi</th>
						</tr>
					</thead>


					<tbody>
						<?php foreach($table_cat as $c){ ?>
						<tr>
							<td><?php echo $c->id_kat ?></td>
							<td><?php echo $c->nama_kategori ?></td>
							<td><?php echo $c->des_kat ?></td>
							<td style=" text-align: center;">
								<?php echo anchor('example/edit_form_cat/'.$c->id_kat, '<button class="btn btn-info btn-xs" type="button"><span class="fa fa-pencil"></span></button>'); ?>
								<?php echo anchor('example/remove_cat/'.$c->id_kat, '<button class="btn btn-danger btn-xs" type="button"><span class="fa fa-trash"></span></button>');?>
					         </td>
						</tr>

						<?php } ?>
					</tbody>
				</table>
			</div>
		</div>
	</div>