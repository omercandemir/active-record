<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Yeni Kayıt Sayfası</title>
</head>

<body>

    <h2>Yeni Kayıt Ekleme</h2>
    <form method="post" action="<?php echo base_url('personel/ekle'); ?>">
        <label for="title">Personelin Adını Giriniz</label><br>
        <input name="isim" type="text" id="title">
        <br><br>
        <label for="detail">Açıklama</label><br>
        <textarea name="detay" id="detail" cols="30" rows="10"></textarea>
        <br><br>
        <button type="submit">Personel Ekle</button>
        <a href="<?php echo base_url('personel'); ?>">[Anasayfaya Dön]</a>


    </form>


</body>
</html>