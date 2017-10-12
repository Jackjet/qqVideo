<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>播放器</title>
    <style>
        * {
            margin: 0;
            padding: 0;
        }
        .video {
            width: 100%;
        }
    </style>
</head>
<body>
<iframe src="http://api.45yg.cn/?url={{$url}}" class="video"></iframe>
<script src="https://cdn.bootcss.com/jquery/3.2.1/jquery.min.js"></script>
<script>
    $('.video').css('height', $(window).height())
</script>
</body>
</html>