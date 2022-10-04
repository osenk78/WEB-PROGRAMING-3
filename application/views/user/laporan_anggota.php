<!-- Begin Page Content -->
<div class="container-fluid">
	<?= $this->session->flashdata('pesan'); ?>
	<div class="row">
		<div class="col-lg-12">
			<?php if (validation_errors()) { ?>78
			<div class="alert alert-danger" role="alert">
				<?= validation_errors(); ?>
			</div>
		<?php } ?>
		<?= $this->session->flashdata('pesan'); ?>
		<a href="<?= base_url('laporan/cetak_laporan_user'); ?>" class="btn btn-primary mb-3"><i class="fas fa-print"></i> Print</a>
		<a href="<?= base_url('laporan/laporan_user_pdf'); ?>" class="btn btn-warning mb-3"><i class="far fa-file-pdf"></i> Download Pdf</a>
		<a href="<?= base_url('laporan/export_excel_user'); ?>" class="btn btn-success mb-3"><i class="far fa-file-excel"></i> Export ke Excel</a>
        <table class="table table-hover">
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Nama Anggota</th>
                        <th scope="col">Email</th>
                        <th scope="col">Image</th>

                    </tr>
                </thead>
                <tbody>
                    <?php
                    $a = 1;
                    foreach ($anggota as $l) { ?>
                        <tr>
                            <th scope="row"><?= $a++; ?></th>
                            <td><?= $l['nama']; ?></td>
                            <td><?= $l['email']; ?></td>
                            <td>
                                <picture>
                                    <source srcset="" type="image/svg+xml">
                                    <img src="<?= base_url('assets/img/profile/') . $l['image']; ?>" class="img-fluid img-thumbnail" alt="..." style="width:60px;height:80px;">
                                </picture>
                            </td>
                            
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</div>	

		