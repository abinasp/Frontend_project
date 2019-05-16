<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <title>Somobay Somiti</title>
        <meta name="viewport" content="width=device-width, initial-scale=1" />

        <link rel="stylesheet" href="css/materialize.css" />
        <link rel="stylesheet" href="css/lineIcons.min.css" />
        <link rel="stylesheet" href="css/style.css" />
    </head>

    <body>
        <div class="main_container_wrapper">
            <div class="main-container container">
                <div class="row valign-wrapper">
                    <div class="col s6">
                        <img class="responsive-img" src="img/logo.png" />
                    </div>
                    <div class="col s6">
                        <div class="input-field col s12 login-inputs">
                            <i class="material-icons prefix">person</i>
                            <input
                                type="text"
                                id="username"
                                class="validate"
                                name="username"
                            /><label>Username</label>
                        </div>

                        <div class="input-field col s12 login-inputs">
                            <i class="material-icons prefix">lock</i>
                            <input
                                type="password"
                                id="password"
                                class="validate"
                                name="password"
                            /><label>Password</label>
                        </div>

                        <div class="input-field col s12 login-inputs">
                            <button
                                class="btn waves-effect waves-light"
                                type="submit"
                                onclick="OnLogin()"
                            >
                                Login
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <script src="js/jquery-3.2.1.min.js"></script>
        <script src="js/materialize.min.js"></script>
        <script src="js/main.js"></script>
    </body>
</html>
