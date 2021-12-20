<!DOCTYPE HTML>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edje">
  <title>ToDo App</title>
  <link rel="stylesheet" href="/css/app.css">
</head>
<body>
<header>
  <nav class="my-navbar">
    <a class="my-navbar-brand" href="/">ToDo App</a>
  </nav>
</header>
<main>
  <div class="container">
    <div class="row">
      <div class="col col-md-4">
        <nav class="panel panel-default">
          <div class="panel-heading">フォルダ</div>
          <div class="panel-body">
            <a class="btn btn-default btn-block" href="#">
              フォルダを追加する
            </a>
          </div>
          <div class="list-group">
            @foreach ($folders as $folder)
              <a href="{{ route('tasks.index', ['id' => $folder->id]) }}" class="list-group-item">
                {{ $folder->title }}
              </a>
            @endforeach
          </div>
        </nav>
      </div>
      <div class="column col-md-8">
        <!-- ここにタスクを表示 -->
      </div>
    </div>
  </div>
</main>
</body>
</html>
