<?php
require_once 'actions/db_connect.php';
$sql = "SELECT * FROM trips";
$result = mysqli_query($connect, $sql);
$tbody = ''; //this variable will hold the body for the table
if (mysqli_num_rows($result)  > 0) {
    while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
        $tbody .= "
            <div class='col'>
                <div class='card'>
                    <img src='pictures/" . $row['picture'] . "' class='card-img-top pic' alt='" . $row['name'] . "'>
                    <div class='card-header'>
                        <h5 class='card-title'>" . $row['name'] . "</h5>
                    </div>
                    <div class='card-body'>
                        <p class='card-text text-succsess text-end h4'>€ " . $row['price'] . ".</p>
                        <p class='card-text'>" . $row['description'] . ".</p>
                    </div>
                    <div class='card-footer'>
                        <a href='details.php?id=" . $row['id'] . "' class='btn btn-success btn-small'>Show more</a>
                        <a href='update.php?id=" . $row['id'] . "' class='btn btn-primary btn-small'>Update</a>
                        <a href='delete.php?id=" . $row['id'] . "' class='btn btn-danger btn-small'>Delete</a>
                    </div>
                </div>
            </div>";
    };
} else {
    $tbody =  "<tr><td colspan='5'><center>No Data Available </center></td></tr>";
}

mysqli_close($connect);
?>

<!DOCTYPE html>
<html lang="en">

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
            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
                <?php echo $tbody ?>
            </div>
        </div>
    </main>
    <footer class="bg-dark p-5">
<p class="h5 text-warning text-center">
        Princelishes Trips presented by &#x24B8Hikmet Prizreni</p>
    </footer>
</body>

</html>