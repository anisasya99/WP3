<html>
    <head>
        <title>Tampil Data Matakuliah</title>
    </head>
    <body>
    <center>
        <table>
            <tr>
                <th colspan="3">
                Tampil Data Mata Kuliah
                </th>
            </tr>
            <tr>
                <td colspan="3">
                <hr>
                </td>
            </tr>
            <tr>
                <th>Kode MTK</th>
                <th>:</th>
                <td>
                    <?= $Kode; ?>
                </td>
            </tr>
            <tr>
                <td>Nama MTK</td>
                <td>:</td>
                <td>
                    <?= $Nama; ?>
                </td>
            </tr>
            <tr>
                <td>SKS</td>
                <td>:</td>
                <td>
                    <?= $Sks; ?>
                </td>
            </tr>
            <tr>
                <td colspan="3" align="center">
                    <a href="<?= base_url('Matakuliah'); 
                    ?>">Kembali</a>
                </td>
            </tr>
        </table>
    </center>
    </body>
</html>