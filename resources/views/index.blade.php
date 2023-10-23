<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <section>
        <div>
            <h1>This is index.php page</h1>
            @for($i=0; $i<10;$i++)
            <h1>{{$i + 1}}</h1>
            @endfor
        </div>
    </section>
</body>
</html>