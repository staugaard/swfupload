<?php
	session_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" >
<head>
    <title>SWFUpload Revision 5 Demo</title>

	<link href="../css/default.css" rel="stylesheet" type="text/css" />

</head>
<body>
	<div class="title">SWFUpload (Revision 5) Demos</div>

	<form action="upload.php?PHPSESSID=<?php echo session_id(); ?>&file_id=SWFUpload_0_0" method="post" enctype="multipart/form-data">
		<input type="file" id="Filedata" name="Filedata" /><br />
		<input type="submit" value="Submit" />
	</form>
	<?php echo session_id();

	if (isset($_SESSION["file_info"])) {
		foreach ($_SESSION["file_info"] as $image_id => $value) {
			echo '<img src="thumbnail.php?id='.$image_id.'" style="margin: 4px;" />';
		}
	} ?>

</body>
</html>