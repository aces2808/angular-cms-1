<!doctype html>
<html lang="de">
<head>
    <meta charset="utf-8">
    <title>Login | Angular CMS</title>

    <style>
        html, body {
            background: #f8f8f8;
            font-family: 'Source Sans Pro', sans-serif;
            font-size: 15px;
            font-weight: 200;
        }

        @font-face {
            font-family: 'Source Sans Pro';
            src: url('../cms/css/sourcesanspro-extralight-webfont.eot');
            src: url('../cms/css/sourcesanspro-extralight-webfont.eot?#iefix') format('embedded-opentype'),
                 url('../cms/css/sourcesanspro-extralight-webfont.woff') format('woff'),
                 url('../cms/css/sourcesanspro-extralight-webfont.ttf') format('truetype'),
                 url('../cms/css/sourcesanspro-extralight-webfont.svg#source_sans_proextralight') format('svg');
            font-weight: 200;
            font-style: normal;
        }

        @font-face {
            font-family: 'Source Sans Pro';
            src: url('../cms/css/sourcesanspro-regular-webfont.eot');
            src: url('../cms/css/sourcesanspro-regular-webfont.eot?#iefix') format('embedded-opentype'),
                 url('../cms/css/sourcesanspro-regular-webfont.woff') format('woff'),
                 url('../cms/css/sourcesanspro-regular-webfont.ttf') format('truetype'),
                 url('../cms/css/sourcesanspro-regular-webfont.svg#source_sans_proregular') format('svg');
            font-weight: 400;
            font-style: normal;
        }

        @font-face {
            font-family: 'Source Sans Pro';
            src: url('../cms/css/sourcesanspro-bold-webfont.eot');
            src: url('../cms/css/sourcesanspro-bold-webfont.eot?#iefix') format('embedded-opentype'),
                 url('../cms/css/sourcesanspro-bold-webfont.woff') format('woff'),
                 url('../cms/css/sourcesanspro-bold-webfont.ttf') format('truetype'),
                 url('../cms/css/sourcesanspro-bold-webfont.svg#source_sans_probold') format('svg');
            font-weight: 800;
            font-style: normal;
        }

        ul {
            padding: 0;
        }

        ul li {
            display: inline-block;
        }

        @media all and (max-width: 800px) {
            ul li {
                display: block;
                padding: 5px 0;
                text-decoration: none;
            }
        }

        input {
            width: 200px;
            font-size: 0.8em;
            text-align: center;
        }

        input:focus {
            outline: 0;
        }

        input[type=text] {
            padding: 10px;
        }

        input[type=password] {
            padding: 10px;
        }

        input[type=submit] {
            color: #fff;
            padding: 10px;
            background: #e7494a;
        }

        input[type=submit]:hover {
            cursor: pointer;
            -webkit-box-shadow: 0 1px 20px rgba(0,0,0,.1);
            -moz-box-shadow: 0 1px 20px rgba(0,0,0,.1);
            box-shadow: inset 0 1px 20px rgba(0,0,0,.1);
        }

        .lightyellow-border {
            border: 2px solid #efcf4d;
        }

        .lightred-border {
            border: 2px solid #e7494a;
        }

        .lightpurple-border {
            border: 2px solid #9b59b6;
        }

        .lightblue-border {
            border: 2px solid #3498db;
        }

        .login-form {
            border: 1px solid #e5e5e5;
            max-width: 800px;
            margin: 10% auto;
            background: #fff;
            text-align: center;
        }

        @media all and (max-width: 800px) {
            .login-form {
                max-width: 90%;
            }
        }

        .error {
            font-weight: 400;
            padding: 10px;
        }

    </style>
</head>
<body>

    <div class="login-form center">
        <form action="/login/do-login" method="post">
            <ul class="text-center">
                <li>
                    <input class="lightyellow-border" type="text" id="username" name="username" placeholder="Benutzername" />
                </li>
                <li>
                    <input class="lightyellow-border" type="password" id="password" name="password" placeholder="Passwort" />
                </li>
                <li>
                    <input class="lightred-border" type="submit" value="Login" />
                </li>
            </ul>
        </form>

        <?php
            if (isset($error)) {
                echo '<div class="error">'.$error.'</div>';
            }
        ?>
    </div>
</body>
</html>