<html>

<head>
    <tittle>D-lemas</tittle>
</head>

<body>
    <center>
        <form action="<?= base_url('mahasiswa/cetak'); ?>" method="post">
            <table>
                <tr>
                    <th colspan="3">
                    Digital Learning Management System(Di-LeMas) 
                    </th>
                </tr>
                <tr>
                    <td colspan="3">
                        <hr>
                    </td>
                </tr>
                    <th>Nama Mahasiswa</th>
                    <th>:</th>
                    <td>
                        <input type="text" name="nama" id="nama">
                    </td>
                </tr>
                <tr>
                    <th>NIS</th>
                    <td>:</td>
                    <td>
                        <input type="text" name="nis" id="nis">
                    </td>
                </tr>
                <tr>
                    <th>Kelas</th>
                    <td>:</td>
                    <td>
                        <input type="text" name="kelas" id="kelas">
                    </td>
                </tr>
                <tr>
                    <th>Tanggal lahir</th>
                    <td>:</td>
                    <td>
                        <input type="date" name="tgl" id="tgl">
                    </td>
                </tr>
                <tr>
                    <th>Tempat lahir</th>
                    <td>:</td>
                    <td>
                        <input type="text" name="tempat" id="tempat">
                    </td>
                </tr>
                <tr>
                    <th>Alamat</th>
                    <td>:</td>
                    <td>
                        <input type="text" name="alamat" id="alamat">
                    </td>
                </tr>
                <tr>
                    <th>Jenis Kelamin</th>
                    <td>:</td>
                   <td><input type="radio" name="jenis_kelamin" value="Laki-Laki"> Laki-Laki<br>
                    <input type="radio" name="jenis_kelamin" value="Perempuan"> Perempuan<br></td>
                </tr> 
                <tr>
                    <th>agama</th>
                    <td>:</td>
                    <td>
                        <select name="agama" id="agama">
                            <option value="">pilih</option>
                            <option value="2">islam</option>
                            <option value="3">kristen</option>
                            <option value="4">katolik</option>
                            <option value="5">budha</option>
                            <option value="6">hindu</option>
                            <option value="7">protestan</option>
                            <option value="8">khonghucu</option>
                            </select>
                        </td>
                    </tr>
                    <td colspan="3" align="center">
                        <input type="submit" value="Submit">
                    </td>
                </tr>
            </table>
</form>
    </center>
</body>
</html>