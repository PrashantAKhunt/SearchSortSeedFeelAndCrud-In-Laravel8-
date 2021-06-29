<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <h1>Edit Your post here</h1>
    <form method="post" action="{{route('post.update')}}">
    @csrf

        <input type="hidden" name="id" value="{{$post->id}}" />
        <lable>Name:</lable>
        <input class="form-control" type="text" name="post_name" value="{{$post->name}}" />
        <br />
        <lable>Description:</lable>
        <input class="form-control" type="text" name="post_desc" value="{{$post->desc}}" />
        <br />
        <input class="btn btn-primary" type="submit" name="submit" />
    </form>
</body>
</html>