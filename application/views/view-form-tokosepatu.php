<!DOCTYPE html>
<html>
<head>
	<title>TOKO SEPATU</title>
    <style>
        .errori {
            color: black;
        }
    </style>
</head>

<body>
    <center>
        <form action="<?= base_url('tokosepatu/cetak'); ?>" method="post">
            <table bgcolor="turquoise" width="200px">
                <tr>
                    <th>
                        <h3>TOKO SEPATU MODE</h3>
                        <hr>
                    </th>
                </tr>

                <tr>
                    <td colspan="5"><input type="text" name="nama" id="nama" placeholder="Nama"></td>
                </tr>
                <tr>
                    <td class="errori"><b><?= form_error('nama'); ?></b></td>
                </tr>
                <tr>
                    <td><input type="text" name="no" id="no" placeholder="No HP"></td>
                </tr>
                <tr>
                    <td class="errori"><b><?= form_error('no'); ?></b></td>
                </tr>
                <tr>
                    <td>
                        <select name="merk" id="merk">
                            <option value="">--PILIH MERK SEPATU--</option> 
                            <option value="Nike">Nike</option>
                            <option value="Adidas">Adidas</option>
                            <option value="Kickers">Kickers</option>
                            <option value="Eiger">Eiger</option>
                            <option value="Bucherri">Bucherri</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td class="errori"><b><?= form_error('merk'); ?></b></td>
                </tr>
                <tr>
                    <td><b>Ukuran Sepatu</b></td>
                </tr>
                <tr>
                    <td>
                        <input type="radio" name="size" value="32">32
                        <input type="radio" name="size" value="33">33
                        <input type="radio" name="size" value="34">34
                        <input type="radio" name="size" value="35">35
                    </td>
                </tr>
                <td></td>
                <tr>
                    <td>
                        <input type="radio" name="size" value="36">36
                        <input type="radio" name="size" value="37">37
                        <input type="radio" name="size" value="38">38
                        <input type="radio" name="size" value="39">39
                    </td>
                </tr>
                <tr>
                    <td>
                        <input type="radio" name="size" value="40">40
                        <input type="radio" name="size" value="41">41
                        <input type="radio" name="size" value="42">42
                        <input type="radio" name="size" value="43">43
                    </td>
                </tr>
                <tr>
                    <td>
                        <input type="radio" name="size" value="44">44
                    </td>
                </tr>
                <tr>
                    <td class="errori"><b><?= form_error('size'); ?></b></td>
                </tr>
                <tr>
                    <td align="center" colspan="3">
                        <input type="submit" name="KONFIRMASI">
                        <input type="reset" name="BATAL">
                    </td>
                </tr>
            </table>
        </form>
    </center>
</body>

</html>