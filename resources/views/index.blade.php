<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>简单的单元测试</title>
    <link href="https://cdn.bootcss.com/twitter-bootstrap/4.3.1/css/bootstrap.css" rel="stylesheet">
</head>
<body>
    <div class="container">
        <div class="card" style="width: 50%">
            <div class="card-header">
                单元测试
            </div>
            <div class="card-body">
                <form action="{{ route("zxl.store") }}" method="post">
                    @csrf
                    <div class="form-group">
                        <label for="namespace">命名空间</label>
                        <input type="text" name="namespace" id="namespace" class="form-control" >
                        <small id="helpId" class="text-muted">示例：Zxl\Unit\Http\Controllers</small>
                    </div>
                    <div class="form-group">
                        <label for="classname">类名</label>
                        <input type="text" name="classname" id="classname" class="form-control" >
                        <small id="helpId" class="text-muted">不需要命名空间</small>
                    </div>
                    <div class="form-group">
                        <label for="action">方法名</label>
                        <input type="text" name="action" id="action" class="form-control" >
                        <small id="helpId" class="text-muted">示例：index</small>
                    </div>
                    <div class="form-group">
                        <label for="params">参数</label>
                        <input type="text" name="params" id="params" class="form-control" >
                        <small id="helpId" class="text-muted">示例：1|2|4</small>
                    </div>
                    <input type="submit" value="提交">
                </form>
            </div>
        </div>
    </div>
<script src="https://cdn.bootcss.com/jquery/3.4.0/jquery.slim.js"></script>
<script src="https://cdn.bootcss.com/twitter-bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>
</html>