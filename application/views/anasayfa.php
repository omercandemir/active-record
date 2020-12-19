<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Anasayfa</title>
</head>
<body>
    <h2>Personel Listesi</h2>
    <a href="<?php echo base_url('personel/insertPage'); ?>">[Kayıt Ekle]</a>
    <br><br>

    <table border="1">
        <tr>
            <th>id</th>
            <th>İsim</th>
            <th>Detay</th>
            <th>İşlem</th>
        </tr>
        <?php 
        foreach ($rows as $data) { 
        ?>
            <tr>
                <td><?php echo $data->ID; ?></td>
                <td><?php echo $data->isim; ?></td>
                <td><?php echo $data->detay; ?></td>
                <td>
                    <a href="<?php echo base_url('personel/updatePage/'.$data->ID.''); ?>">[Düzenle]</a>
                    <a href="<?php echo base_url('personel/sil/'.$data->ID.''); ?>">[Sil]</a>
            
                </td>
            </tr>
        <?php } ?>
    </table>

</body>
</html>