<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
</head>
<body>
    <style>
        *{
            margin: 0 auto;
        }
        .container{
            width: 1200px;
            margin: 0 auto;
            text-align: center;
        }
        nav{
            height: 50px;
            border: 2px solid lightblue;
        }
        nav ul{
            display: flex;

        }

        main{
            height: calc(100vh - 50px);
            background-color: white;
        }
    </style>
    <nav>
        <ul>
            <li><a href="index">Home</a></li>
            <li><a href="description">Chi Siamo</a></li>
            <li><a href="about">About me</a></li>
        </ul>
    </nav>
    <main>
        <div class="container">
            <h1> HELLO {{$name}}</h1>
        </div>
    </main>
    
</body>
</html>