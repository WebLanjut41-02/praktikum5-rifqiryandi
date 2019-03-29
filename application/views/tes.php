<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>
    <form action="<?php echo base_url(); ?>" method="POST">
        <table>
            <tr>
                <td>Nama :</td>
                <td><?php echo $isi; ?></td>
                <td><?php foreach ($isi2 as $data) {
                    echo $data;
                } ?></td>
                <td>
                <?php foreach ($isi3 as $key ) {
                    // echo $key->$angka1;
                } ?>
                </td>
            </tr>
        </table>
    </form>    
</body>
</html>