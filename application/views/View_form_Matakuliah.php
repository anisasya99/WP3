<html>
    <head>
    <title>Form Input Matakuliah</title>
</head>
  
<body>
    <center>
    <form action="<?= base_url('matakuliah/cetak'); ?>" method="post">
        <table>
            <tr>
                <th colspan="3">
                    Form Input Data Mata Kuliah
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
                    <input type="text" name="Kode" id="Kode">
                </td>
            </tr>
            <tr>
                <th>Nama MYK</th>
                <th>:</th>
                <td>
                    <input type="text" name="Nama" id="Nama">
                </td>
            </tr>
            <tr>
                <th>SKS</th>
                <td>:</td>
                <td>
                    <select name="Sks" id="Sks">
                        <option value="">Pilih SKS</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td colspan="3" align="center">
                    <input type="submit" value="Submit">
                </td>
            </tr>
        </table>
    </center>
</body>
</html>