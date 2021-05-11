<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- font awesome -->
    <!-- <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css"> -->
    <!-- bootstrap v4 -->
    <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous"> -->
    <!-- jquery -->
    <!-- <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script> -->
    <!-- my css -->
    <link rel="stylesheet" href="main.css">
    <!-- vue 2 -->
    <script src="https://cdn.jsdelivr.net/npm/vue@2.x"></script>
    <!-- axios -->
    <script src="https://cdn.jsdelivr.net/npm/axios@0.21.1/dist/axios.min.js"></script>
    <script src="script.js"></script>
    <title>PHP</title>
</head>
<body>
    <div id="app" class="container">
        <div class="row">
                <h1>Dischi</h1>

                <ul>
                <li class="albumCard" 
                    v-for="album in albums"
                    >
                        <img :src=album.poster alt="cover art not found">
                        <div class="infoCard">
                            <h2>{{album.title}}</h2>
                            <h3>{{album.author}}</h3>
                            <span>{{album.genre}} , {{album.year}}</span>
                        </div>
                    </li>
                </ul>
        </div> 
    </div>
</body>
</html>