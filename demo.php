<?php $hitokoto = file_get_contents('https://example.com/hitokoto/'); ?>
<html>
<head>
    <meta charset="utf-8">
    <title>一言测试</title>
</head>
<body>
    <div class="wrap">
        <p><?php echo $hitokoto; ?></p> <!-- 这里是 PHP 输出的“一言”句子 -->
        <p class="content">一言测试</p> <!-- 这里是 JS 输出的“一言”句子 -->
    </div>
    <script src="https://cdn.bootcss.com/jquery/2.0.2/jquery.min.js"></script>
    <script>
        $.post("https://example.com/hitokoto/", function(hitokoto) {
            $(".content").html(hitokoto);
        });
    </script>
</body>
</html>