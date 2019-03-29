<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form action="<?= base_url(); ?>index.php/List_c/prosesinput" method="POST">
        <table>
            <tr>
                <td>
                Nama :
                </td>
                <td><input type="text"  name="nama"></td>
            </tr>
            <tr>
                <td>
                Nim :
                </td>
                <td><input type="number"  name="nim"></td>
            </tr>
            <tr>
                <td>
                tanggal lahir :
                </td>
                <td><input type="date"  name="tgl"></td>
            </tr>
            <tr>
                <td>
                IPK :
                </td>
                <td><input type="text"  name="ipk"></td>
            </tr>
            <tr>
                <td>
                Kelas :
                </td>
                <td>
                <select name="kelas" id="">
                <option value="42-01">42-01</option>
                <option value="42-02">42-02</option>

                </select>
                </td>
            </tr>            
            <tr>
                <td><input type="submit" value="submit"></td>
            </tr>
        </table>
    </form>
</body>
</html>