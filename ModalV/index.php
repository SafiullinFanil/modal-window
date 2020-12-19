<!DOCTYPE HTML>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha2/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="/style.css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.6/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js"></script>
    <script src="https://yandex.st/jquery/2.1.1/jquery.min.js"></script>


    <title>Пример модального окна</title>
</head>

<body>
    <div class="container">
        <div class="row" id="button1">
            <div class="col text-center">
                <button type="button" class="btn btn-primary btn-lg " id="popup-open">Модальное окно</button>
            </div>
        </div>
    </div>

    <div class="popup-fade">
        <div class="popup">
            <div class="tab-content" id="myTabContent">

                <div class="tab-pane fade show active" id="login" role="tabpanel" aria-labelledby="login-tab">
                    <div class="modal-body" >
                        <form action="<?=PATH?>login" method="post" id="loginForm">
                            <div class="row mb-3">
                                <label for="inputEmail" class="col-sm-3 col-form-lable">Логин</label>
                                <div class="col-sm-9">
                                    <input type="text" name='login' class="form-control" id="inputEmail">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="inputPass" class="col-sm-3 col-form-lable">Пароль</label>
                                <div class="col-md-9">
                                    <input type="password" name="password" class="form-control" id="inputPass">
                                </div>
                            </div>
                            <div class="form-check d-flex ml-5">
                                <input type="checkbox" name="rememberMe" class="form-check-input" id="dropdownCheck">
                                <label class="form-check-label ml-2" for="dropdownCheck">
                                    Запомнить меня
                                </label>
                            </div>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal" id="btnClose">Закрыть</button>
                        <button type="submit" name="loginButton" form="loginForm" class="btn btn-primary" id="btnLoginForm">Авторизоваться</button>
                    </div>
                </div>
        </div>
    </div>


    <script src="/modalv.js"></script>

</body>
</html>