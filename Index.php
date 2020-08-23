heroku create --buildpack https://github.com/heroku/heroku-buildpack-php.git
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="Index.css"  >
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <meta http-equiv="X-UA-Compatible" content="ie=edge">
     <title>Ubicacion Coordenadas</title>
     
</head>

<body>
     <h1 class="p-3 mb-2 bg-light text-dark"> Coordenadas</h1>
     <div class="border border-primary">
     <section id="map"></section>
     </div>
     <script src="Index.js"></script>
     <script async defer
     src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD3QS13DEpYX8qTDr78MdnPawqDiRdiqzk">
     </script>

    <div class="table">
        <table id="tabla"  border="1">
        </table>
    </div>

</body>

</html>