<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>

    <!--style-->
    <style>
       /*body*/
        body{
            font-family: Arial, Helvetica, sans-serif;
        }
        /*nav*/
        nav{
            display: flex;
            align-items: center;
        }
        nav h1{
            font-size: 30px;
        }

        nav ul li{
            display: inline;
            margin-left: 10px;
            font-size: 20px;
            
        }
        nav ul li a {
            color: #000;
            text-decoration: none;
            text-transform: uppercase;
        }

        /*main*/
        main {
            display: flex;
            justify-content: center;
        }

        main h2{
            font-size: 50px;
        }
    </style>
</head>
<body>
    <header>
        <nav>
            <h1>Laravel</h1>

            <!--menù-->
            <ul>
                <li><a href="http://127.0.0.1:8000/">home</a></li>
                <li><a href="http://127.0.0.1:8000/about_us">about us</a></li>
                <li><a href="http://127.0.0.1:8000/contacts">contacts</a></li>
            </ul>
        </nav>
    </header>

    <main>
        <h2>{{$stringa}}</h2>
    </main>
    
</body>
</html>