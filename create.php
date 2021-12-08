<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <?php require_once 'components/boot.php'?>
        <title>CR12  |  Add Trip</title>
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
        <div class="container p-5 w-75">
        
            <p class='h2 text-center'>Add Product</p>
            <form action="actions/a_create.php" method= "post" enctype="multipart/form-data">
                <table class='table'>
                    <tr>
                        <th>Name</th>
                        <td><input class='form-control' type="text" name="name"  placeholder="Name" /></td>
                    </tr>    
                    <tr>
                        <th>Price</th>
                        <td><input class='form-control' type="number" name= "price" placeholder="Price" step="any" /></td>
                    </tr>
                    <tr>
                        <th>Description</th>
                        <td><input class='form-control' type="textarea" name= "description" placeholder="Description"/></td>
                    </tr>
                    <tr>
                        <th>Latitude</th>
                        <td><input class='form-control' type="float" name= "lat" placeholder="Latitude"/></td>
                    </tr>
                    <tr>
                        <th>Longitude</th>
                        <td><input class='form-control' type="float" name= "lng" placeholder="Longitude"/></td>
                    </tr>
                    <tr>
                        <th>Picture</th>
                        <td><input class='form-control' type="file" name="picture" /></td>
                    </tr>
                    <tr>
                        <td><button class='btn btn-success' type="submit">Insert Product</button></td>
                        <td><a href="index.php"><button class='btn btn-warning' type="button">Home</button></a></td>
                    </tr>
                </table>
            </form>
        </div>
    </main>
    <footer class="bg-dark p-5">
        <p class="h5 text-warning text-center">
        Princelishes Trips presented by &#x24B8Hikmet Prizreni</p>
    </footer>
    </body>
</html>