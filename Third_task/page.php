<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Comments</title>
    <link rel="stylesheet" href="./style.css">
</head>
<body>
    <form action="./page.php" method="post" id="form_comm">
        <textarea name="comment" id="text"></textarea>
        <input type="submit">
    </form>
    <div id="comm_block">
        <?php require_once("./logic.php"); ?>
    </div>
</body>
</html>