<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
    <style>
    .header {
        width: 100%;
        height: 20%
        background-color: white;
    }
    .main {
        width: 100%;
        height: 70%;
        background-color: lightgray;
        text-align: center;
        padding-top: 20%;
    }

    ul{
        padding-left:0;
    }
    li{
        list-style:none;
    }
    input[type="email"],
    input[type="password"]{
        width: 30%;
        padding: 10px;
        margin: 10px;
        margin-bottom: 10px;
        border:1px solid gray;
        border-radius: 5px;
        background-color: lightgray;

    }

    button[type="submit"]{
        width: 33%;
        padding: 10px;
        margin: 10px;
        border-radius: 5px;
        background-color: blue;
        color: white;
        border: none;
    }

    p{
        color: gray;
        font-size: 10px;
        padding-top:20px;
    }

    a {
        padding-bottom: 30px;
        text-decoration: none;
    }

    .footer {
        width: 100%;
        height: 10%;
        background-color: white;
        text-align: center;
    }
   </style>
</head>
<body>
    <header class="header">
       <h1 class="header-title">Atte</h1>
    </header>

    <main class="main">
       <h2 class="main-title">ログイン</h2>
       <ul class="main-input">
        <li class="main-item"><input type="email" placeholder=メールアドレス></li>
        <li class="main-item"><input type="password" placeholder=パスワード></li>
        <li class="main-item_submit"><button type="submit" />ログイン</button>
       </ul>
       <p class="main-guidance">アカウントをお持ちでない方はこちらから</p>
       <li class="main-guidance_button"><a href="http://localhost/register">会員登録</a></li>

   <footer class="footer">
      <small class="company">Atte,inc.</small>
   </footer>
</body>
</html>