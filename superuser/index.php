<html>
<head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
</head>
<body>
<form enctype="multipart/form-data" method="post" action="file-upload.php">
<div>
<?php echo $message; ?>
</div>
<?php echo $max_file_size_tag; ?> Please select file to upload: <input name="filename" size="20" type="file" /> <input name="submit" type="submit" value="Upload" /> </form>
</body>
</html>