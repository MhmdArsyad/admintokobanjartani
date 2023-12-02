                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Data Barang</h1>
                        <form
                class="d-none d-sm-inline-block form-inline navbar-search shadow">
                <div class="input-group">
                    <input type="text" class="form-control bg-light border-0 small" placeholder="Cari Barang..."
                        aria-label="Search" aria-describedby="basic-addon2">
                    <div class="input-group-append">
                        <button class="btn btn-primary" type="button">
                            <i class="fas fa-search fa-sm"></i>
                        </button>
                    </div>
                </div>
            </form>
                    </div>

                    <!-- Content Row -->
<!-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#tambahdataModal">
  <i class="fa fa-plus">
    Tambah data
  </i>
</button> -->
<a class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm" data-toggle="modal" data-target="#tambahdataModal">
<i class="fa fa-plus fa-sm text-white"></i> Tambah Data</a>

<a href="<?php echo base_url('admin/print') ?>" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-download fa-sm text-white"></i> Print Data</a>




<div class="modal fade" id="tambahdataModal" tabindex="-1" role="dialog" aria-labelledby="tambahdataModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="tambahdataModalLabel">Tambah data</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="<?php echo base_url(), 'admin/tambah_data' ?>" method="post">
            <div class="form-group">
              <label for="namabarang">Nama Barang</label>
              <input type="text" class="form-control" id="namabarang" name="namabarang" placeholder="Masukkan Nama Barang">
            </div>
            <div class="form-group">
              <label for="harga">Harga</label>
              <input type="text" class="form-control" id="harga" name="harga" placeholder="Masukkan Harga">
            </div>
            <div class="form-group">
              <label for="jumlah">Jumlah</label>
              <input type="text" class="form-control" id="jumlah" name="jumlah" placeholder="Masukkan Jumlah">
            </div> 
        
      </div>
      <div class="modal-footer">
        <button type="reset" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
        <button type="submit" class="btn btn-primary">Simpan</button>
      </div>
    </form>
    </div>
  </div>
</div>

<table class="table">
        <tr>
          <td>No</td>
          <td>Nama Barang</td>
          <td>Harga</td>
          <td>Jumlah</td>
          <td colspan="2">Aksi</td>
        </tr>
        <?php
            $no=1;
            foreach ($barang as $brg):
        ?>
        <tr>
          <td><?php echo $no++;?></td>
          <td><?php echo $brg->namabarang; ?></td>
          <td><?php echo $brg->harga; ?></td>
          <td><?php echo $brg->jumlah; ?></td>
          <td onClick="return confirm('Yakin dihapus?')">
            <?php echo anchor('admin/hapus/'. $brg->no,
            '<div class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></div>')
            ?>
          </td>
          <td>
            <?php echo anchor('admin/edit/'. $brg->no,
            '<div class="btn btn-warning btn-sm"><i class="fa fa-edit"></i></div>')
            ?>
          </td>
        </tr>
        <?php endforeach; ?>
      </table>
                    
                    <!-- Content Row -->
                    
            <!-- End of Main Content -->