<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Post Data With Controller Resource</title>
</head>
<body>

    <h1>Halaman Post</h1>
    @if (count($posts)!=0)
        <ul>
                @foreach ($posts as $item)
                    <li> <a href="{{ route('postcontroller2.show', $item['id']) }}"> {{$item['title']}} </a> </li>
                @endforeach
        </ul>
    @endif
    
</body>
</html>