<!doctype html>
<html lang="en">
<head>
<meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
     <meta http-equiv="X-UA-Compatible" content="ie=edge">
     <title>New</title>
    <link rel="stylesheet" type="text/css" href="{{asset('Category')}}">
</head>
<body>
<h1>News</h1>
    <div class="red">
        <ul>
        @foreach($data as $dt)
            <li class="bold">{{$dt->year_month}}</li>
        @endforeach
        </ul>
    </div>
</body>
</html>
