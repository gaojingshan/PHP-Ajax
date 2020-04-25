<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <!-- php中看不到书写程序的过程，js可以 -->
    <h1>今天天气真好，今天周<?php echo 1 + 4; ?></h1>
    <h1>今天天气真好，今天周<span id="text"></span></h1>
    <script>
        var text = document.getElementById('text');
        text.innerHTML = 1 + 4;
    </script>
</body>

</html>