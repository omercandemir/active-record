<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Düzenleme Sayfası</title>
</head>
<body>
    <div style="margin-left:30px;">
        <p><b>Personel İsmi:</b> <?php echo $row->isim; ?></p>
        <p><b>Personel Detayları:</b> <?php echo $row->detay; ?></p>
        <br><hr><br>

        <form method="post" action="<?php echo base_url('personel/guncelle/'.$row->ID.''); ?>">

            <label>Personel Detayı Değiştir</label><br>
            <textarea name="detay" cols="30" rows="10"></textarea><br>
            <button type="submit">Güncelle</button>
            <a href="<?php echo base_url('personel'); ?>"></a>
        </form>
    </div>

    
</body>
</html>