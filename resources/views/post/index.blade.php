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

    <h1 class='text-center'>All Post</h1>
    <div class="container-fluid">
        
            <form method="get" action="{{route('post.index')}}" >
            @csrf
            <input type="search" class="form-control rounded" placeholder="Search" aria-label="Search"
                aria-describedby="search-addon" name="search" value={{$search}}/>
            <input type="submit" class=" float-right btn btn-outline-primary" value="search" />
            </form>
            
    </div>
    <br><br><br>
    <div class="container-fluid">

        <a class="float-right btn btn-success" href="{{route('post.addnew')}}" >Add New Post</a>
        <table class="table table-striped">
            <thead>
                <tr>
                <th scope="col">id</th>
                <th scope="col">name</th>
                <th scope="col">desc</th>
                <th scope="col">Update</th>
                <th scope="col">Delete</th>
                </tr>
            </thead>
            <tbody>
                @foreach($posts as $post)
                <tr>
                    <td>{{$post->id}}</td>
                    <td>{{$post->name}}</td>
                    <td>{{$post->desc}}</td>
                    <td><a class="btn btn-secondary" href="{{route('post.edit',$id=$post->id)}}">Edit</a></td>
                    <td><a class="btn btn-danger" href="{{route('post.delete',$id=$post->id)}}">Delete</a></td>
                </tr>
                @endforeach
                
            </tbody>
        </table> 
    </div>
    


</body>
</html>