<?php 
if ($data['login'] == null && $data['login_id'] == null) {
    header('Location: http://localhost:8080/uas/public/admin_login');
    exit;
}
?>

<!doctype html>
<html lang="en">
  <head>
  	<title>Sidebar 04</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">
		
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
		<link href="<?= BASEURL ;?>/css/bootstrap.min.css" rel="stylesheet"></head>
		<link href="<?= BASEURL ;?>/css/styleSide.css" rel="stylesheet"></head>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.1/summernote.css" rel="stylesheet">
  </head>
  <body>
		
		<div class="wrapper d-flex align-items-stretch ">
            <?php include headerPanel ?>
        <div id="content" class="p-4 p-md-5 pt-5">
            <?php include $data['ControlPanelTemplate'] ?>
        </div>
		</div>

        <script src="https://code.jquery.com/jquery-2.2.3.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.1/summernote.js"></script>
        <script src="<?= BASEURL ;?>/js/main.js"></script>
        <script>
            
    $(document).ready(function() {
      $('#summernote').summernote({
        placeholder: 'Type your text here',
        tabsize: 2,
        height: 200
      });
    });
  </script>
  </body>
</html>
