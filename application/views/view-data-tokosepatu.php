<!DOCTYPE html>
<html>

<head>
	<title>REKAP TRANSAKSI</title>
</head>

<body>
    <center>
        <table bgcolor="turquoise">
            <tr>
                <th colspan="5">
                    <h1>TOKO SEPATU MODE</h1>
                    <hr>
                </th>
            </tr>
            <tr>
                <td>Nama Pembeli</td>
                <td>:</td>
                <td><?= $nama ?></td>
            </tr>
            <tr>
                <td></td>
            </tr>
            <tr>
                <td>No HP</td>
                <td>:</td>
                <td><?= $no ?></td>
            </tr>
            <tr>
                <td></td>
            </tr>
            <tr>
                <td>Merk Sepatu</td>
                <td>:</td>
                <td><?= $merk ?></td>
            </tr>
            <tr>
                <td></td>
            </tr>
            <tr>
                <td>Ukuran Sepatu</td>
                <td>:</td>
                <td><?= $size ?></td>
            </tr>
            <tr>
                <td></td>
            </tr>
            <tr>
                <td>Harga</td>
                <td>:</td>
                <td>Rp. <?= $harga ?></td>
            </tr>
            <tr>
                <td colspan="3">
                    <hr>
                </td>
            </tr>
        </table>
        <p>
            <button>
                <a href="<?php echo base_url() , 'index.php/tokosepatu' ?>">KEMBALI</a>
            </button>
        </p>
    </center>
</body>

</html>