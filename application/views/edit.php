
<div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Edit Data Barang</h1>
</div>

<form action="<?php echo base_url(), 'admin/update' ?>" method="post">

    <?php foreach ($barang as $brg): ?>
              <div class="form-group">
                <!-- <label for="id">id</label> -->
                <input type="hidden" class="form-control" id="no" name="no" value="<?php echo $brg->no; ?>">
              </div>

              <div class="form-group">
                <label for="namabarang">Nama Barang</label>
                <input type="text" class="form-control" id="namabarang" name="namabarang" value="<?php echo $brg->namabarang; ?>">
              </div>

              <div class="form-group">
                <label for="harga">Harga</label>
                <input type="text" class="form-control" id="harga" name="harga" value="<?php echo $brg->harga; ?>">
              </div>

              <div class="form-group">
                <label for="jumlah">Jumlah</label>
                <input type="text" class="form-control" id="jumlah" name="jumlah" value="<?php echo $brg->jumlah; ?>">
              </div> 
          
          <button type="reset" class="btn btn-secondary">Reset</button>
          <button type="submit" class="btn btn-primary">Simpan</button>
        </div>
      </form>
      <?php endforeach ?>
