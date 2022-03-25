<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>About Us</title>
    <!--style-->
    <style>
        /*body*/
        body{
        font-family: Arial, Helvetica, sans-serif;
        }
        
        header button{
        border-radius: 10px;
        background-color: grey;
        border: solid 1px ;
        }
        header button a{
        text-decoration: none;
        color: #fff;
        }
        /*main*/
        main {
        display: flex;
        justify-content: center;
        }

        main h1{
        font-size: 50px;
        }
    </style>
</head>
<body>
    <header>
        <button><a href="http://127.0.0.1:8000/">Back Home</a></button>
    </header>

    <main>
        <h1>{{$stringa}}</h1>
    </main>
</body>
</html>