<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>edit</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>
    <form action="<?= base_url(); ?>index.php/List_c/prosesedit" method="POST">
        <table>
        <?php foreach($isi as $data){ ?>
            <tr>
                <td>
                Nama :
                </td>
                <td><input type="text" value="<?= $data->nama; ?>" name="nama"></td>
            </tr>
            <tr>
                <td>
                Nim :
                </td>
                <td><input type="text" value="<?= $data->nim; ?>" name="nim" readonly></td>
            </tr>
            <tr>
                <td>
                tanggal lahir :
                </td>
                <td><input type="date" value="<?= $data->tgl; ?>" name="tgl"></td>
            </tr>
            <tr>
                <td>
                IPK :
                </td>
                <td><input type="text" value="<?= $data->IPK; ?>" name="ipk"></td>
            </tr>
            <tr>
                <td>
                Kelas :
                </td>
                <td>
                <select name="kelas" id="">
                <option <?php if($data->kelas=="42-01"){echo "selected";} ?> value="42-01">42-01</option>
                <option <?php if($data->kelas=="42-02"){echo "selected";} ?> value="42-02">42-02</option>

                </select>
                </td>
            </tr>    
        <?php } ?>        
            <tr>
                <td><input type="submit" value="submit"></td>
            </tr>
        </table>
    </form>
</body>
</html>