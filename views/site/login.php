<div class="container">
    <div class="row">
        <div class="col-lg-3 col-md-2"></div>
        <div class="col-lg-6 col-md-8 login-box">
            <div class="col-lg-12 login-key">
                <i class="fa fa-key" aria-hidden="true"></i>
            </div>
            <div class="col-lg-12 login-title">
                ПАНЕЛЬ АДМИНИСТРАТОРА
            </div>

            <div class="col-lg-12 login-form">
                <div class="col-lg-12 login-form">
                    <form action="/site/login" method="POST">
                        <input type="hidden" name="<?= Yii::$app->request->csrfParam; ?>" value="<?= Yii::$app->request->csrfToken; ?>" />
                        <div class="form-group">
                            <label class="form-control-label">ИМЯ ПОЛЬЗОВАТЕЛЯ</label>
                            <input name="LoginForm[username]" type="text" class="form-control">
                        </div>
                        <div class="form-group">
                            <label class="form-control-label">ПАРОЛЬ</label>
                            <input name="LoginForm[password]" type="password" class="form-control">
                        </div>

                        <div class="col-lg-12 loginbttm">
                            <div class="col-lg-6 login-btm login-text">
                                <!-- Error Message -->
                            </div>
                            <div class="col-lg-12 login-btm login-button">
                                <button type="submit" class="btn btn-outline-primary">АВТОРИЗОВАТЬСЯ</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-lg-3 col-md-2"></div>
        </div>
    </div>