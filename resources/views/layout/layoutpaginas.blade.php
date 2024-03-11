<!DOCTYPE html>
<html lang="pt-br">
<head>
    <title>@yield('titulo')</title>
    <meta charset="utf-8">
    

    <style>
        html, body {
            height: 100%;
            margin: 0;
            font-family: 'Roboto', sans-serif;
            position: relative; 
        }

        p, span {
            color: #000000;
        }

        h1 {
            color: #000000;
            font-size: 28px;
            display: flex;
            justify-content:center;
        }

        h2 {
            color: #333333;
            font-size: 22px;
            display: flex;
            justify-content:center;
            
        }

        input, select, textarea, button, button:hover{
            width: 100%;
            padding: 10px 15px;
            margin: 10px 0px 10px 0px;
            box-sizing: border-box;
            border-radius: 3px;
            color: #333;
        }

        .top {
            width: 100%;
            background-color: #68FEFF;
            padding: 20px 0px 10px 0px;
            height: 20px;           
        }
        
        .background {
            position:relative;
            background-color: #99FEFF;
            width: 100%;
            min-height:100%; 
        }

        .footer {
            background-color: #68FEFF; 
            padding: 50px 0; 
            width: 100%; 
            position: fixed; 
            bottom: 0; 
            left: 0; 
            text-align: center; 
        }

        
        .menu {
            float: right;
            margin-right: 40px;
        }

        .menu li {
            display: inline;
            float: left;
        }

        .menu ul {
            list-style-type: none;
            margin: 0;
            padding: 0;
            overflow: hidden;
        }

        .menu a {
            text-decoration: none;
            padding: 14px 16px;
            color: #333;
        }

        .menu a:hover {
            color: #268fd0;
        }


        .content {
            display:flex;
            justify-content:center;
            flex-direction: column; 
            align-items: center;
            padding-bottom: 100px; 
        }

        .content_size{
            width:70%;
        }

        .price {
            font-weight: bold;
            color: #009900; 
        }
        .description {
            color: #666;
        }

        
    </style>
</head>

<body class="background">
    <div class="top">
        <div class="menu">
            <ul>
                <li><a>Produtos</a></li>
                <li><a>Descrição</a></li>
            </ul>
        </div>  
    </div>

    <div class="content">
        <div class="content_size"> 
            @yield('conteudo')
        </div>
    </div>

    <div class="footer">
        <div class="contato">

        
        </div>
</body>


</html>
