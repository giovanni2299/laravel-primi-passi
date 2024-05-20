<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <header>
        <ul>
            <li>
                <a href=" {{ url('primo')}}">
                   
                    vai alla prima pagina 
                </a>
            </li>
            <li>
                <a href="{{ url('secondo') }}">
                        
                        vai alla seconda pagina
                </a>
            </li>
            <li>
                <a href="{{ url('terzo')}}">
                        
                        vai alla terza pagina 
                </a>
            </li>
        </ul>
    </header>
</body>
</html>