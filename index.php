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
    <title>Onkunde</title>
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
        <label class="col-sm-6 col-form-label">Wat zou je graag willen kunnen?</label>
            <div class="col-sm-6">
                <input type="text" class="form-control" id="input" value="<?php echo $a1 ?>" name="a1" placeholder="<?php echo $foutcode?>">
            </div>
    </div>
    <div class="form-group row">
        <label class="col-sm-6 col-form-label">Met welke persoon kun je goed opschieten?</label>
            <div class="col-sm-6">
            <input type="text" class="form-control" id="input" value="<?php echo $a2 ?>" name="a2" placeholder="<?php echo $foutcode?>">
            </div>
    </div>
    <div class="form-group row">
        <label class="col-sm-6 col-form-label">Wat is je favoriete getal?</label>
            <div class="col-sm-6">
                <input type="text" class="form-control" id="input" value="<?php echo $a3 ?>" name="a3" placeholder="<?php echo $foutcode?>">
            </div>
    </div>
    <div class="form-group row">
        <label class="col-sm-6 col-form-label">Wat heb je altijd bij je als je op vakantie gaat?</label>
            <div class="col-sm-6">
                <input type="text" class="form-control" id="input" value="<?php echo $a4 ?>" name="a4" placeholder="<?php echo $foutcode?>">
            </div>
    </div>
    <div class="form-group row">
    <label class="col-sm-6 col-form-label">Wat is je beste persoonlijke eigenschap?</label>
            <div class="col-sm-6">
                <input type="text" class="form-control" id="input" value="<?php echo $a5 ?>" name="a5" placeholder="<?php echo $foutcode?>">
            </div>
    </div>
    <div class="form-group row">
    <label class="col-sm-6 col-form-label">Wat is je slechtste persoonlijke eigenschap?</label>
            <div class="col-sm-6">
                <input type="text" class="form-control" id="input" value="<?php echo $a6 ?>" name="a6" placeholder="<?php echo $foutcode?>">
            </div>
    </div>
    <div class="form-group row">
    <label class="col-sm-6 col-form-label">Wat is het ergste dat je kan overkomen?</label>
            <div class="col-sm-6">
                <input type="text" class="form-control" id="input" value="<?php echo $a7 ?>" name="a7" placeholder="<?php echo $foutcode?>">
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