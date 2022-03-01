<!-- <!DOCTYPE html> -->
<!-- <html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
// $wordStr = "BISCUIT";
// $word = str_split($wordStr);
// $hiddenWord = [];
// for ($i = 0; $i < count($word); $i++) {
//     array_push($hiddenWord, '_ ');
// }
// print("hidden word : ");
// var_dump($hiddenWord);
// print("<br>");
// $_SESSION['errors'] = 0;
// session_start();

// // INITIALISATION
// if(!isset($_SESSION['hiddenWord'])){
//     $_SESSION['hiddenWord'] = $hiddenWord;
// }
// if(!isset($_SESSION['errors'])){
//     $_SESSION['errors'] = 0;
// }

?>
    <form method="post">
    <div>
        <label for="letter">Donner une lettre: </label>
        <input type="text" name="letter" id="letter" required>
    </div>
    <div>
        <input type="submit" name="submit" value="Essayer !">
    </div>
    </form>
    <form method="post">
    <div>
        <input type="submit" name="recommencer" value="Recommencer">
    </div>
    </form>
    
<?php
// $_SESSION['letter'] = $_POST['letter'];
// $letter = $_SESSION['letter'];

// //test suppression
// if(isset($_SESSION['letter']) && $_SESSION['letter']==="$") {
//     session_destroy();
// }

// print($wordStr. "<br>");
// print($letter. "<br>");
// print("SESSION hidden word : ");
// var_dump($_SESSION['hiddenWord']);
// print("<br>");
// //ksort($_SESSION['hiddenWord']);
// //var_dump($_SESSION['hiddenWord']);

// if(isset($_POST['submit'])) {
//     if (in_array($letter, $word)) {
//         print("cool !!! <br>");
//         $places = array_keys($word, $letter);
//         print_r($places);
//         print("<br>");
//         foreach ($places as $place) {
//             $_SESSION['hiddenWord'][$place] = $letter;
//         }
//         if ($_SESSION['hiddenWord'] == $word) {
//             print('GAGNÉ !!!');
//         }
//     }
//     else {
//         var_dump("oh no !!!!");
//         $_SESSION['errors']++;
//         print("nbr : " . $_SESSION['errors']);
//         if ($_SESSION['errors'] > 2) {
//             print("perdu !!");
//             $_SESSION['errors'] = 0;
//             session_destroy();
//         }
//     }
//     foreach ($_SESSION['hiddenWord']  as $result) {
//         print($result.'<br>');
//     }
// } 
// if (isset($_POST['recommencer'])) {
//     session_destroy();
// }

?>
</body>
</html> -->