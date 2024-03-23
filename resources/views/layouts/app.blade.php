<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
{{--    @vite(['resources/sass/app.scss', 'resources/js/app.js'])--}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <title>Document</title>
</head>
<body>
@include('message')
<div class="container">
    <div class="col-6 mx-auto my-5">
        <h3>Сохранить файл на сервисе Dropbox</h3>
        <div class="col my-5">
            <form action="{{ route('save_file') }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                    <input class="form-control" type="file" id="formFile" name="file">
                </div>
                <div class="text-center mt-5">
                    <button class="btn btn-primary" type="submit">Сохранить</button>
                </div>

            </form>
        </div>

    </div>

</div>
</body>
</html>
