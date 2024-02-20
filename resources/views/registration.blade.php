<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<style>
    .name{
        width: 300px;
        height: 50px;
        font-size: 30px;
        border: 2px solid #09226b;
        border-radius: 20px;
        margin-left: 55px;
    }
    .email{
        width: 300px;
        height: 50px;
        font-size: 30px;
        border: 2px solid #09226b;
        border-radius: 20px;
        margin-top: 50px;
        margin-left: 55px;

    }
    .password{
        width: 300px;
        height: 50px;
        font-size: 30px;
        border: 2px solid #09226b;
        border-radius: 20px;
        margin-top: 40px;
        margin-left: 34px;

    }
    form{
        width: 450px;
        height: 500px;
        align-items: center;
        margin-top: 200px;
        border: 3px solid grey;
        box-shadow: 15px 15px 5px grey;
        padding-top: 50px;
    }
    body{

        display: flex;
        width: 100vw;
        flex-direction: row;
        justify-content: center;

    }
    button {
        background: #0066A2;
        color: white;
        border-style: outset;
        border-color: #0066A2;
        height: 50px;
        width: 150px;
        font: bold15px arial,sans-serif;
        text-shadow: none;
        border-radius: 25px;
        display: block;
    }
    button:hover{
        cursor: pointer;
    }
    a{
        margin-top: 30px;
        text-decoration: none;
        color: #4d9b10;
        font-size: 25px;
    }
    div{
        margin-top: 30px;
        margin-left: 100px;
    }
</style>
<body>

<form action="{{'register'}}" method="POST">
    @csrf
    <label for="name">Name:</label>
    <input type="text" name="name" required class="name">
    <br>
    <label for="email">Email:</label>
    <input type="email" name="email" required class="email">
    <br>
    <label for="password">Password:</label>
    <input type="password" name="password" required class="password">
    <br>
    <div>
       <button type="submit">Sign Up</button>
        <a href="/logIn">Already have account?</a>
    </div>
</form>

</body>
</html>
