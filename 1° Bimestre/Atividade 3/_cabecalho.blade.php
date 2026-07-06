<html>
    <header>
        <style>
            body {
                background-color: lightgray;
            }

            h1, div {
                background-color: gray;
                display: flex;
                align-items: center;
                justify-content: center;
                color: white;
            }

            img {
                width: 100px;
                display: block;
                margin-left: auto;
                margin-right: auto;
                padding-bottom: 20px;
            }

            a {
                margin-right: 2px;
                color: white;
            }
        </style>
        <title>@yield('titulo')</title>
        <h1>@yield('titulo')</h1>
        <img src="https://upload.wikimedia.org/wikipedia/commons/0/06/Dog_doing_Yoga_%2827974580410%29_%28cropped%29.jpg?20220309085523" alt="Cachorro fazendo yoga">
    </header>
<body>
    <div>