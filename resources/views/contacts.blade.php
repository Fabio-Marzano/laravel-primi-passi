<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="./style.css">
    <title>Document</title>
</head>
<body>
    <header>
        <div class="bg-dark">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <ul class="list-unstyled d-flex m-0">
                            <li class="px-2"><a class="text-decoration-none text-white"
                                 href="{{ route('homepage') }}">Homepage</a></li>  
                            <li class="px-2"><a class="text-decoration-none text-white" href="{{ route('about') }}">About</a></li>
                            <li class="px-2"><a class="text-decoration-none text-white" href="{{ route('contacts') }}">Contacts</a></li>

                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <main>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h1>{{ $title }}</h1>
                    <p>{{ $message }}</p>
                </div>
            </div>
        </div>
    </main>
</body>
</html>