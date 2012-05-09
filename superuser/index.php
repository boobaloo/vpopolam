<html>
<head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
<title>Впополам — Загрузка файлов</title>
</head>
<body>
<form enctype="multipart/form-data" method="post" action="file-upload.php">
<div>
<?php echo $message; ?>
</div>
<?php echo $max_file_size_tag; ?> 
Фото: <input name="filename" size="20" type="file" /></br>
Title: <input name="title" size="20" type="text" /></br>
Alt: <input name="alt" size="20" type="text" /></br></br>

Ссылка: <input name="videolink" size="20" type="text" /></br>
Превью: <input name="videothumb" size="20" type="file" /></br>
Title: <input name="videotitle" size="20" type="text" /></br>
Alt: <input name="videoalt" size="20" type="text" /></br>

<input name="submit" type="submit" value="Upload" /></form>
</body>
</html>