<?php
$base_url = base_url();
$base_url .= 'application/assets/';
define('base_url', $base_url);
?>

<head>
    <title>Proyecto</title>
    <!--<link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'> -->
    <meta name='viewport' content="width=device-width, initial-scale=1.0" charset="utf-8">
    <link rel="shortcut icon" href="<?php echo $base_url ?>favicon.ico" type=”image/x-icon”>
    <link rel="stylesheet" type="text/css" href="<?php echo $base_url ?>stylesheets/styles.css">
    <script>
        var base_url = '<?php echo constant('base_url') ?>';
    </script>
</head>