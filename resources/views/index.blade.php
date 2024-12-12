<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ERROR INFO</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>

    <form action="{{ route('errorprocess') }}" method="post">
        @csrf
        <br>
        <div class = "form-group">
            <label for="title">name</label>

            <input id="name" type="text" name="name" class="@error('name') is-invalid @enderror"
                required="" />

            @error('name')
                <form>
                    <div class="form-floating">
                        <div class="alert alert-danger">{{ $message }}</div>
                    </div>
                </form>
            @enderror
        </div>
        <br>
        <button type="submit" class="btn btn-primary">submit</button>
    </form>

</body>

</html>
