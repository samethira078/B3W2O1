<?php 
    include 'assets/send_info.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/style.css">
    <title>Paniek</title>
</head>
<body>
<div class="container">
    <!-- IMG -->
    <img src="logo.png" class="rounded mx-auto d-block" alt="...">
    <!-- NAV -->     
    <nav>
    <ul class="nav nav-pills">
        <li class="nav-item">
            <a class="nav-link" href="index.php">Onkunde</a>
        </li>
    <ul>
    <ul class="nav nav-pills">
        <li class="nav-item">
            <a class="nav-link" href="paniek.php">Paniek</a>
        </li>
    <ul>
    </nav>
    <!-- FORM -->
    <form action="index.php" style="display:<?php echo $form_display?>" method="post">
    <div class="form-group row">
        <label class="col-sm-6 col-form-label">Welke dier zou je nooit als huisdier willen?</label>
            <div class="col-sm-6">
                <input type="text" class="form-control" id="input" value="<?php echo $a1 ?>" name="a1" placeholder="<?php echo $foutcode?>">
            </div>
    </div>
    <div class="form-group row">
        <label class="col-sm-6 col-form-label">Wie is de belangrijkste persson in je leven?</label>
            <div class="col-sm-6">
            <input type="text" class="form-control" id="input" value="<?php echo $a2 ?>" name="a2" placeholder="<?php echo $foutcode?>">
            </div>
    </div>
    <div class="form-group row">
        <label class="col-sm-6 col-form-label">In welk land zou je willen wonen?</label>
            <div class="col-sm-6">
                <input type="text" class="form-control" id="input" value="<?php echo $a3 ?>" name="a3" placeholder="<?php echo $foutcode?>">
            </div>
    </div>
    <div class="form-group row">
        <label class="col-sm-6 col-form-label">Wat doe je als je je verveelt?</label>
            <div class="col-sm-6">
                <input type="text" class="form-control" id="input" value="<?php echo $a4 ?>" name="a4" placeholder="<?php echo $foutcode?>">
            </div>
    </div>
    <div class="form-group row">
    <label class="col-sm-6 col-form-label">Met welk speelgoed speelde je als kind het meest?</label>
            <div class="col-sm-6">
                <input type="text" class="form-control" id="input" value="<?php echo $a5 ?>" name="a5" placeholder="<?php echo $foutcode?>">
            </div>
    </div>
    <div class="form-group row">
    <label class="col-sm-6 col-form-label">Bij welke docent spijbel je het liefst?</label>
            <div class="col-sm-6">
                <input type="text" class="form-control" id="input" value="<?php echo $a6 ?>" name="a6" placeholder="<?php echo $foutcode?>">
            </div>
    </div>
    <div class="form-group row">
    <label class="col-sm-6 col-form-label">Als je $100.000 had, wat zou je willen kopen?</label>
            <div class="col-sm-6">
                <input type="text" class="form-control" id="input" value="<?php echo $a7 ?>" name="a7" placeholder="<?php echo $foutcode?>">
            </div>
    </div>
    <div class="form-group row">
    <label class="col-sm-6 col-form-label">Wat is je favoriete bezigheid</label>
            <div class="col-sm-6">
                <input type="text" class="form-control" id="input" value="<?php echo $a8 ?>" name="a8" placeholder="<?php echo $foutcode?>">
                <button type="submit" name="submit" class="btn btn-primary form-control">Versturen</button>
        </div>
    </div>
</div>
<blockquote class="blockquote text-center">
<p  class="mb-0" style = "display: <?php echo $display?>;">Er zijn veel mensen die niet kunnen <?php echo $a1?>. Neem nou <?php echo $a2?>. 
                Zelfs met hulp van een <?php echo $a4?> of zelfs <?php echo $a3?> kan <?php echo $a2 ?> niet <?php echo $a1 ?>.
                Dit heeft niet veel te maken met gebrek aan <?php echo $a5 ?>, maar met een teveel aan <?php echo $a6 ?>. Teveel <?php echo $a6 ?>
                leidt tot <?php echo $a7 ?> en dat is niet goed als je wilt <?php echo $a1 ?>.</p>
</div>
</div>
</div>
</body>
</html>