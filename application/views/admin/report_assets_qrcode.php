<!DOCTYPE html>
<html lang="en"><head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Report Data Assets</title>
    <style>
        .title {
            text-align: center;
        }
        
    </style>
</head><body>

<p class="title"><b>REPORT DATA ASSETS QR-CODE</b></p><br>

    <table style="margin-top: 20px;">
        <head>
            <tr>
                <th>QR</th>
                <th style="position : left;">DETAIL</th>
            </tr>
        </head>
        <body>
            <?php foreach ($data_assets as $d) : ?>
            <tr>
                <td><img style="width: 100px;" src="./assets/qrcode/data_asset/<?= $d['id_assets'] ?>.png"></td>
                <td>
                   Kategori&nbsp;:&nbsp;<?= $d['category'] ?> <br> 
                   Kode aset&nbsp;:&nbsp;<?= $d['kode_assets'] ?> <br>
                   Serial number&nbsp;:&nbsp;<?= $d['serial_number'] ?> <br>
                   Merk&nbsp;:&nbsp;<?= $d['merk'] ?> <br>
                   Lokasi&nbsp;:&nbsp;<?= $d['lokasi'] ?> <br>

                </td>
            </tr>
            <?php endforeach; ?>
        </body>
    </table>

</body></html>