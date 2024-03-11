<!DOCTYPE html>
<html lang="pt-br">

<head>
    <title>@yield('titulo')</title>
    <meta charset="utf-8">


    <style>
        html,
        body {
            width: 100vw;
            height: 100vh;
            margin: 0;
            font-family: 'Roboto', sans-serif;
            position: relative;
        }

        h1 {
            color: #000000;
            font-size: 24px;
            display: flex;
        }

        h2 {
            color: #333333;
            font-size: 14px;
            appearance: none;
            display: flex;
        }

        input,
        select,
        textarea,
        button,
        button:hover {
            width: 100%;
            padding: 10px 15px;
            margin: 10px 0px 10px 0px;
            box-sizing: border-box;
            border-radius: 3px;
        }

        .productTitle {
            text-decoration: none;
        }

        .productTitle:visited,
        .productTitle:active {
            color: lightseagreen;
        }

        .productTitle:hover {
            color: lightslategray;
            text-overflow: ellipsis;
        }

        .top {
            display: flex;
            flex-direction: row;
            align-items: center;
            width: 100%;
            background-color: slategray;
        }

        .detail-title {
            font-size: 16pt;
        }

        .header-items {
            display: flex;
            flex-direction: row;
            justify-content: center;
            align-items: center;
            width: 100%;
            height: 100%;
            color: white;
            padding: 10px 0px 10px 0px;
            gap: 30px;
            font-weight: bold;
        }

        .background {
            position: relative;
            background-color: #FFFFFF;
            width: 100%;
            min-height: 100%;
        }

        .footer {
            background-color: #D3D3D3;
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

        .menu a:hover {
            color: #268fd0;
        }


        .promo {
            width: 25%;
            text-align: left;
            padding: 20px;
            border: 1px slategray solid;
            border-radius: 10pt;
            height: 150px;
            width: 300px;
        }

        .content {
            padding-top: 25px;
            gap: 16px;
            width: 65%;
            display: flex;
            justify-content: center;
            flex-direction: row;
            align-items: center;
            padding-bottom: 100px;
            margin-left: auto;
            margin-right: auto;
        }

        .content_size {
            width: 70%;
        }

        .price {
            font-weight: bold;
            font-size: 14pt;
            color: darkcyan;
        }

        .description {
            color: #666;
            font-size: 10pt;
            text-overflow: ellipsis;
            height: 20px;
        }
    </style>
</head>

<body class="background">
    <div class="top">
        <div class="header-items">
            <a>Produtos</a>
            <a>Descrição</a>
        </div>
    </div>
    <div class="content">
        @yield('conteudo')
    </div>
    <div class="footer">
        <div class="contato">

        </div>
</body>


</html>
