<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css">
    <script src="main.js"></script>
</head>
<body>
    <form action="<?php echo base_url();?>index.php/List_c/cari" method="get">
       CARI: <input type="text" name="cari"><input type="submit" value="cari">
    </form>
    <br>
    <a href="<?php echo base_url();?>index.php/List_c/input">INPUT DATA BARU</a>
    <br>
    <?php if(isset($datacari)){ ?>
    <table>
        <th>Nama</th>
        <th>Nim</th>
        <th>tanggal lahir</th>
        <th>IPK</th>
        <th>Kelas</th>
        <th>Aksi</th>
        <?php foreach($datacari as $data){ ?>
        <tr>
            <td><?= $data->nama; ?></td>
            <td><?= $data->nim; ?></td>
            <td><?= $data->tgl; ?></td>
            <td><?= $data->IPK; ?></td>
            <td><?= $data->kelas; ?></td>
            <td><a href="<?php echo base_url();?>index.php/List_c/edit?id=<?= $data->nim; ?>">edit</a>//<a href="<?php echo base_url();?>index.php/List_c/delete?id=<?= $data->nim; ?>">delete</a></td>
        </tr>
        <?php } ?>
    </table>
        <?php }else{ ?>
            <table>
        <th>Nama</th>
        <th>Nim</th>
        <th>tanggal lahir</th>
        <th>IPK</th>
        <th>Kelas</th>
        <th>Aksi</th>
        <?php foreach($isi as $data){ ?>
        <tr>
            <td><?= $data->nama; ?></td>
            <td><?= $data->nim; ?></td>
            <td><?= $data->tgl; ?></td>
            <td><?= $data->IPK; ?></td>
            <td><?= $data->kelas; ?></td>
            <td><a href="<?php echo base_url();?>index.php/List_c/edit?id=<?= $data->nim; ?>">edit</a>//<a href="<?php echo base_url();?>index.php/List_c/delete?id=<?= $data->nim; ?>">delete</a></td>
        </tr>
        <?php } ?>
    </table>
        <?php } ?>
    <br/>
	<?php 
	echo $this->pagination->create_links();
	?>
</body>
</html>