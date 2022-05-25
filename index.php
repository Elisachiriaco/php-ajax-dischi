<?php 
include __DIR__.'/data.php';

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- axios -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.20.0/axios.min.js"></script>
    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- vue -->
    <script src="https://cdn.jsdelivr.net/npm/vue@2/dist/vue.js"></script>
    <link rel="stylesheet" href="./css/style.css">
    <title>PHP Dischi</title>
</head>
<body>
    <header>
        <img src="./img/logo.png" alt="">
    </header>
    <main>
        <div class="container">
            <div class="row justify-content-center p-4">
            <?php foreach($dischi as $disco){ ?>
                <div class="col-6 col-sm-4 col-md-2 m-2">
                <div class="card-container justify-content-center">
                    <img src="<?php echo $disco['poster']?>" alt="">
                    <h4><?php echo $disco['title'] ?></h4>
                    <p><?php echo $disco['author'] ?> <br> <?php echo $disco['year'] ?> </p>
                </div> 
                </div>
                <?php } ?>
            </div>
        </div>
    </main>
</body>
</html>