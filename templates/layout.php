<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <?php header("Cache-Control: public, max-age=60, s-maxage=60");?>
    <script type="text/javascript" language="javascript" src="https://code.jquery.com/jquery-3.3.1.js"></script>
    
    
    <title><?= $title ?></title>
</head>
<body>

<div id="container">
    <div id="header">
        
    </div>
    <div id="content">
        <?= $content ?>
    </div>
</div>
</body></html>
