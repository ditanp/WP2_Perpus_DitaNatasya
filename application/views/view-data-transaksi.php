<html>

    <head>
        <title>Tampil Data Pembelian Sepatu</title>
    </head>

    <body>
        <center>
            <table>
                <tr>
                    <th colspan="3">
                        Tampil Data Pembelian Sepatu
                    </th>
                </tr>
                <tr>
                    <td colspan="3">
                        <hr>
                    </td>
                </tr>
                <tr>
                    <th>Nama Pembeli</th>
                    <th>:</th>
                    <td>
                        <?= $nama; ?>
                    </td>
                </tr>
                <tr>
                    <th>No HP</th>
                    <th>:</th>
                    <td>
                        <?= $no_hp; ?>
                    </td>
                </tr>
                <tr>
                    <th>Merk Sepatu</th>
                    <th>:</th>
                    <td>
                        <?= $merk; ?>
                    </td>
                </tr>
                <tr>
                    <th>Ukuran Sepatu</th>
                    <th>:</th>
                    <td>
                        <?= $ukuran; ?>
                    </td>
                </tr>
                <tr>
                    <th>Harga</th>
                    <th>:</th>
                    <td>
                        <?= $harga; ?>
                    </td>
                </tr>
                <tr>
                    <td colspan="3" align="center">
                        <a href="<?= base_url('transaksi');?>">Kembali</a>
                    </td>
                </tr>
            </table>
        </center>
    </body>

</html>