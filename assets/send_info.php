<?php
/* Je kunt alleen hoofdletter, kleine letters en cijfers toevoegen, min 1, max 25 letters */
$pattern = "/^[a-zA-Z0-9]{1,25}$/";
$foutcode = "";
$a1 = $a2 = $a3 = $a4 = $a5 = $a6 = $a7 = $a8 = "";
$i = 0;
$display = "none";
/* Er moet POST data verzonden zijn */
if($_SERVER['REQUEST_METHOD'] === "POST"){
    /* Persoon heeft op submit gedrukt */
    if(isset($_POST["submit"])){
        /* Moet matchen met pattern */
        for($y = 1; $y <= 7; $y++){
            $curVar = "a" . $y;                   
            preg_match($pattern, $_POST["a$y"]) == TRUE ? ($$curVar = $_POST["a$y"] AND $i++) : $foutcode = "Vul letters/getallen in! [max 25]";
        }
        /* Als alles goed is ingevuld */
        if($i == 7 OR $i > 7){
            $display = "block";
            $form_display = "none";
        }
    }
}