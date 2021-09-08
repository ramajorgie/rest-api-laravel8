<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>List Api</title>
</head>
<body>
@foreach ($dataApi as $data)

<i>{{$data['id']}}</i>

@endforeach
    
</body>
</html>