<?php include 'server-info.php'; ?>
<!-- This script is expiring -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <h1>Server and File info</h1>
        <?php if(server): ?>
            <ul class="list-group">
                <?php foreach ($server as $key=>$value): ?>
                    <li class="list-group-item">
                    <strong><?php echo $key; ?></strong>
                    <?php echo $value; ?>
                    </li>
                <?php endforeach; ?>
            </ul>
        <?php endif; ?>
        <h1>Client info</h1>
        <?php if(client): ?>
            <ul class="list-group">
                <?php foreach ($client as $key=>$value): ?>
                    <li class="list-group-item">
                    <strong><?php echo $key; ?></strong>
                    <?php echo $value; ?>
                    </li>
                <?php endforeach; ?>
            </ul>
        <?php endif; ?>
    </div>
</body>
</html>