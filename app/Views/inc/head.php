<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <meta name="description" content="<?= (isset($this->description) ? $this->description : ''); ?>" />
    <meta name="keywords" content="<?= (isset($this->keywords) ? $this->keywords : ''); ?>" />

	<link rel="apple-touch-icon" sizes="180x180" href="<?= BASE_URL; ?>apple-touch-icon.png">
	<link rel="icon" type="image/png" sizes="32x32" href="<?= BASE_URL; ?>favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="16x16" href="<?= BASE_URL; ?>favicon-16x16.png">
	<link rel="manifest" href="<?= BASE_URL; ?>site.webmanifest">
	<link rel="mask-icon" href="<?= BASE_URL; ?>safari-pinned-tab.svg" color="#9ccf00">
	<meta name="msapplication-TileColor" content="#9ccf00">
	<meta name="theme-color" content="#9ccf00">

    <link rel="stylesheet" type="text/css" href="<?= BASE_URL; ?>/www/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="<?= BASE_URL; ?>/www/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="<?= BASE_URL; ?>/www/css/style.css">

    <title><?= ( isset($this->title) ? $this->title . ' | ' : '' ); ?>Charles Marceau</title>

</head>

<body>