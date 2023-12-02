<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Print Data Barang</title>
</head>
<body>
    <h2 align="center">Data Barang</h2>
    <table class="table" border="3px" align="center">
        <tr>
          <td>No</td>
          <td>Nama Barang</td>
          <td>Harga</td>
          <td>Jumlah</td>
        </tr>
    <?php $no=1; foreach ($barang as $brg): ?>
        <tr>
          <td><?php echo $no++;?></td>
          <td><?php echo $brg->namabarang; ?></td>
          <td><?php echo $brg->harga; ?></td>
          <td><?php echo $brg->jumlah; ?></td>
        </tr>
    <?php endforeach; ?>
    </table>
    
    <script type="text/javascript">
        window.print();
    </script>
</body>
</html>

