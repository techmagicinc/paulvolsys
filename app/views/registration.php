<!DOCTYPE html>
<html>
<head>

<title>Laravel Authentication - Registration
</title>
<meta charset="utf-8">
<link rel="stylesheet" type="text/css" href="css/reset-min.css">

    <link rel="stylesheet" href="css/StyleApp.css">

    <link rel="stylesheet" href="css/fancyInput.css">

    <link rel="stylesheet" href="css/jquery-ui-1.10.3.custom.min.css">

    <link rel="stylesheet" href="css/toastr.min.css">

    <link rel="stylesheet" href="css/fancySelect.css">

    <link rel="stylesheet" href="css/animate.min.css">

     <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap.min.css">

    <!-- Optional theme -->
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap-theme.min.css">
</head>
<body>
<h2>The Way Free Medical Clinic - Registration</h2>
<?php $messages = $errors->all('<p style=
"color:red">:message</p>') ?>
<?php foreach ($messages as $msg): ?>
<?= $msg ?>
<?php endforeach; ?>
<?= Form::open() ?>
<br>
<?= Form::label('firstname', 'First Name: ') ?>
<?= Form::text('firstname', Input::old('firstname')) ?>
<br>
<?= Form::label('lastname', 'Last Name: ') ?>
<?= Form::text('lastname', Input::old('lastname')) ?>
<br>
<?= Form::label('password', 'Password: ') ?>
<?= Form::password('password') ?>
<br>



<br>
<?= Form::submit('Register!') ?>
<?= Form::close() ?>
</body>
</html>
