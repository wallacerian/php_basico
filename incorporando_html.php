<?php

$data = array(
    "title"	=>"School Of Net",
    "link"	=>"http://www.schoolofnet.com",
    "content"=>
        array(
            array(
                "title"=>"News 1",
                "resume"=>"Summary of the matter 1",
                "text"=>"Here the text 1"
            ),
            array(
                "title"=>"News 2",
                "resume"=>"Summary of the matter 2",
                "text"=>"Here the text 2"
            ),
            array(
                "title"=>"News 3",
                "resume"=>"Summary of the matter 3",
                "text"=>"Here the text 3"
            )
        )
);

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1><a href="<?= $data['link'] ?>"><?= $data['title'] ?></a></h1>
    <hr>
    <?php foreach ($data['content'] as $key => $value): ?>
    <h3><?= $value['title'] ?></h3>
    <strong><?= $value['resume'] ?></strong>
    <p><?= $value['text'] ?></p>
    <hr>
<?php endforeach; ?>
</body>
</html>
