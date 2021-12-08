<?php 
require_once 'actions/db_connect.php';

if ($_GET['id']) {
    $id = $_GET['id'];
    $sql = "SELECT * FROM trips WHERE id = {$id}" ;
    $result = mysqli_query($connect, $sql);
    $data = mysqli_fetch_assoc($result);
    if (mysqli_num_rows($result) == 1) {
        $name = $data['name'];
        $price = $data['price'];
        $description = $data['description'];
        $lat = $data['lat'];
        $lng = $data['lng'];
        $picture = $data['picture'];
    } else {
        header("location: error.php");
    }
    mysqli_close($connect);
} else {
    header("location: error.php");
}  
?>


<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CR12 - Hikmet.P</title>
    <?php require_once 'components/boot.php' ?>
    <link rel="stylesheet" type='text/css' href="css/style.css" />

</head>

<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-light">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">Princelishes Trips</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="index.php">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="create.php">Create Trip</a>
                        </li>
                        <li class="nav-item">
                        <a class="nav-link" href="dbapi/displayAll.php">displayAll</a>
                        </li>
                        <li class="nav-item">
                        <a class="nav-link" href="ajaxOffers.html">ajaxOffers</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <div class="titel">
            <p class="display-1 text-center">
                Princelishes Trips
            </p>
        </div>
    </header>
    <main>
        <div class="container p-5">
            <p class="h3 text-center">
                <?php echo $name ?>
            </p>
            
            <div class="row p-3">
                <div class="col-sm-4">
                    <img src="pictures/<?php echo $picture ?>"/>
                </div>
                <div class="col-sm-8">
                <p class="h3 text-end text-success">
                        € <?php echo $price ?>
                    </p>
                    <div class="p-5">
                        <p> <?php echo $description ?></p>
                    </div>
                </div>
            </div>
            <div class="mapp m-auto p-5" id="map">

            </div>
        </div>
    </main>
    <footer class="bg-dark p-5">
        <p class="h5 text-warning text-center">
            Princelishes Trips presented by &#x24B8Hikmet Prizreni</p>
    </footer>
    <script>
        var map;
        let loc = {
        lat: <?php echo $lat ?>,
        lng: <?php echo $lng ?>
        }

        function initMap() {
         map = new google.maps.Map(document.getElementById('map'), {
            center: loc,
            zoom: 8
        });
        var pinpoint = new google.maps.Marker({
            position: loc,
            map: map
        });
        }
    </script>
    
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBtjaD-saUZQ47PbxigOg25cvuO6_SuX3M&callback=initMap" async defer></script>
</body>

</html>