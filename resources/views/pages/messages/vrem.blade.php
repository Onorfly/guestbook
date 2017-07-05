<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css"/>
    <title>Гостевая книга</title>
</head>
<body>
<div class="container">
    <h1 class="text-center">Гостевая книга на Laravel 5.2</h1>
    <hr/>
    <form method="POST" id="id-form_messages">

        <div class="form-group">
            <label for="name">Имя: *</label>
            <input class="form-control" placeholder="Имя" name="name" type="text" id="name">
        </div>

        <div class="form-group">
            <label for="email">E-mail:</label>
            <input class="form-control" placeholder="E-mail" name="email" type="email" id="email">
        </div>

        <div class="form-group">
            <label for="message">Сообщение: *</label>
            <textarea class="form-control" rows="5" placeholder="Текст сообщения" name="message" cols="50"
                      id="message"></textarea>
        </div>

        <div class="form-group">
            <input class="btn btn-primary" type="submit" value="Добавить">
        </div>

        <div class="text-right"><b>Всего сообщений:</b> <i class="badge">0</i></div>
        <br/>

        <div class="messages">
            <div class="panel panel-default">

                <div class="panel-heading">
                    <h3 class="panel-title">
                        <span>Карлсон</span>
                        <span class="pull-right label label-info">17:15:00 / 03.07.20016</span>
                    </h3>
                </div>
                <div class="panel-body">
                    Я спешил к вам, друзья,
                    С жутким нетерпеньем.
                    Я моторчик не зря
                    Смазывал вареньем.
                    У меня за спиной
                    Вертится пропеллер
                    <hr/>
                    <div class="pull-right">
                        <a href="#" class="btn btn-info">
                            <i class="glyphicon glyphicon-pencil"></i>
                        </a>
                        <button class="btn btn-danger">
                            <i class="glyphicon glyphicon-trash"></i>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>


<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
</body>
</html>
