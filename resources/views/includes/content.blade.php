


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <main>
        <div class=" cartoon-section">
            <div class="banner-small">
                <h3>CURRENT SERIES</h3>
            </div>
        </div>
        <div class="container cards">
            @php $comics = config('comics');
            @endphp
            @foreach($comics as $comic)
                <div class="card">
                    <figure>
                        <img src="thumb" alt="" />
                    </figure>
                    <p></p>
                </div>
            @endforeach
        </div>
        <div class="container button-blue">
            <p>LOAD MORE</p>
        </div>
  
    </main>
</body>
</html>