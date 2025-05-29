    <!DOCTYPE html>
    <html lang="en">
    <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Hospital Management Software | Home </title>
    <meta name="description" content="Marketplace for Bootstrap Admin Dashboards">
    <meta property="og:title" content="Admin Templates - Dashboard Templates">
    <meta property="og:description" content="Marketplace for Bootstrap Admin Dashboards">
    <meta property="og:type" content="Website">
    <?php include('include/css.php');?>
    </head>
    <body>
    <?php include('include/left.php');?>
    <?php include('include/header.php');?>

    <!-- ------------------------------------------------------ -->
    <?php
    if (!empty($layout) && trim($layout) !== "") {
    require_once($layout);
    } else {
    echo '<h1>Radhe Kumar</h1>';
    }
    ?>
    <!-- ------------------------------------------------------ -->

    <?php include('include/footer.php');?>
    <?php include('include/js.php');?>
    </body>
    </html>