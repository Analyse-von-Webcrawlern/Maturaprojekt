<!DOCTYPE html>
<html>

<head>
  <!-- METATAGS -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="My Maturaprojekt - Tarpit">
  <meta name="keywords" content="Tarpit, tarpit, Html, php, Matura, Maturaprojekt">
  <meta name="author" content="Thomas Brixen">
  <!-- TITLE -->
  <title>VEVETA - Maturaprojekt</title>

  <!-- favicon -->
  <link rel="apple-touch-icon" sizes="180x180" href="assets/favicon/apple-touch-icon.png">
  <link rel="icon" type="image/png" sizes="32x32" href="assets/favicon/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="16x16" href="assets/favicon/favicon-16x16.png">
  <link rel="manifest" href="assets/favicon/site.webmanifest">
  <link rel="mask-icon" href="assets/favicon/safari-pinned-tab.svg" color="#aaaaaa">
  <link rel="shortcut icon" href="assets/favicon/favicon.ico">
  <meta name="msapplication-TileColor" content="#e4e7ec">
  <meta name="msapplication-config" content="assets/favicon/browserconfig.xml">
  <meta name="theme-color" content="#e4e7ec">

  <!-- Stylesheets, etc -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat+Subrayada">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Orbitron">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto">
  <link rel="stylesheet" href="assets/css/Customizable-Background--Overlay.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.1.1/aos.css">
  <link rel="stylesheet" href="assets/css/styles.css">
  <link rel="stylesheet" href="assets/css/Timeline.css">
</head>

<body>
  <?php
    //Variablen
    define('LINKSPERPAGE', 20);
    define('MINPARAGRAPHSPERCOLUMN', 3);
    define('MAXPARAGRAPHSPERCOLUMN', 6);
    define('MINCOLUMNLENGHT', 3000);
    define('MAXCOLUMNLENGHT', 4000);


    $buchstaben = array(
      "a","a","a","a","a","a","a","a","a","A","A","A","A","A","A","A","A","A",                  //a --> 8.167% --> 9x
      "b","b","B","B",                                              //b --> 1.492% --> 2x
      "c","c","c","C","C","C",                                          //c 2.782%
      "d","d","d","d","d","D","D","D","D","D",                                  //d 4.253%
      "e","e","e","e","e","e","e","e","e","e","e","e","e","E","E","E","E","E","E","E","E","E","E","E","E","E",  //e 12.702%
      "f","f","f","F","F","F",                                          //f 2.228%
      "g","g","g","G","G","G",                                          //g 2.015%
      "h","h","h","h","h","h","h","H","H","H","H","H","H","H",                          //h 6.094%
      "i","i","i","i","i","i","i","i","i","i","i","i","i","i",                          //i 6.966%
      "j","J",                                                  //j 0.153%
      "k","K",                                                  //k 0.772%
      "l","l","l","l","l","L","L","L","L","L",                                  //l 4.025%
      "m","m","m","M","M","M",                                          //m 2.406%
      "n","n","n","n","n","n","n","N","N","N","N","N","N","N",                          //n 6.749%
      "o","o","o","o","o","o","o","o","O","O","O","O","O","O","O","O",                      //o 7.507%
      "p","p","P","P",                                              //p 1.929%
      "q","Q",                                                  //q 0.095%
      "r","r","r","r","r","r","R","R","R","R","R","R",                              //r 5.987%
      "s","s","s","s","s","s","s","S","S","S","S","S","S","S",                          //s 6.327%
      "t","t","t","t","t","t","t","t","t","t","T","T","T","T","T","T","T","T","T","T",              //t 9.056%
      "u","u","u","U","U","U",                                          //u 2.758%
      "v","V",                                                  //v 0.978%
      "w","w","w","W","W","W",                                          //w 2.360%
      "x","X",                                                  //x 0.150%
      "y","y","Y","Y",                                              //y 1.974%
      "z","Z"                                                   //z 0.074%
      );

    for ($i=0; $i < 5 ; $i++) {
      $buchstaben[] = "the";
      $buchstaben[] = "be";
      $buchstaben[] = "and";
      $buchstaben[] = "or";
      $buchstaben[] = "of";
      $buchstaben[] = "to";
      $buchstaben[] = "into";
      $buchstaben[] = "at";
      $buchstaben[] = "I";
      $buchstaben[] = "you";
      $buchstaben[] = "he";
      $buchstaben[] = "she";
      $buchstaben[] = "it";
      $buchstaben[] = "we";
      $buchstaben[] = "you";
      $buchstaben[] = "they";
      $buchstaben[] = "do";
      $buchstaben[] = "say";
      $buchstaben[] = "think";
      $buchstaben[] = "what";
      $buchstaben[] = ".";
      $buchstaben[] = ":";
      $buchstaben[] = "\"";
      $buchstaben[] = "!";
      $buchstaben[] = "?";
      $buchstaben[] = "+";
      $buchstaben[] = "-";
      $buchstaben[] = "*";
      $buchstaben[] = ";";
    }
    for ($i=0; $i < 50 ; $i++) {
      $buchstaben[] = " ";
    }
    flush();





    /*function writeGeneratedLinks($link){
      include 'connect-database.php';

      $statement = "UPDATE virtuelle_dateien SET number = number +1, heute = heute +1;";
      $result = $mysqli->query($statement);


      $link = substr($link, 0, -2);
      $file = fopen("/home/thomas/Schreibtisch/generated-links.log", "a");
      $txt = getenv('REMOTE_ADDR')." ".$_SERVER['HTTP_USER_AGENT']." [".date('d.m.Y-H.i.s')."] ".$link."\n";
      fwrite($file, $txt);
      fclose($file);

      $file = fopen("/home/thomas/Schreibtisch/generated-links-counter.txt", "r");
      $counter = fgets($file);
      $counter = floatval($counter)+1;
      fclose($file);
      $file = fopen("/home/thomas/Schreibtisch/generated-links-counter.txt", "w");
      fwrite($file, $counter);
      fclose($file);
    }*/

    function generateHeader($chars = 0){
      global $buchstaben;
      $h = "";
      for ($i=0; $i < $chars; $i++) {
        $h = $h . $buchstaben[rand(0,count($buchstaben)-1)];
      }

      return $h;
    }

    function generateColumn($chars = 0){
      global $buchstaben;
      $c = "";
      $b = "";
      $spaceCounter = 0;
      $spaceCounterMax = 55;


      for ($i=0; $i < $chars; $i++) {
        if (rand(0,100) == 0) {

          $linklaenge = rand(5,25);

          //Wenn Link, dann Mail oder nicht?
          if (rand(0,10) == 0) {
            $date = new DateTime();


            //Wenn Link und Mail dann Radnom Mail oder aus Liste?
            if (rand(0,2) == 0) {

              $target = $date->getTimestamp();
              $target = $target . "-";

              $target .= generateTarget($linklaenge);
              $target = str_replace(" ", "-", $target);

              $c .= ' <a href="mailto:'.$target.'@maturaprojekt.ddns.net"> '.$target.'@maturaprojekt.ddns.net </a> ';
            }else{
              $f_contents = file("mailinglist.txt");
              $mail = $date->getTimestamp();
              $mail = $mail . "-";
              $mail = $mail . $f_contents[rand(0, count($f_contents) - 1)];
              //http://www.freedatagenerator.com/csv-data-generator
              $c .= ' <a href="mailto:'.$mail.'" style="color: red;"> Send Me A Mail </a> ';
            }
          }else{

            $generatedLink = ' <a href="';
            $target = generateTarget($linklaenge);
            $target = str_replace(" ", "-", $target);

            $ending = rand(0,4);
            if ($ending == 0) {
              $target .= '.htm"> ';
            }elseif ($ending == 1) {
              $target .= '.php"> ';
            }else{
              $target .= '.html"> ';
            }

            $generatedLink .= $target;

            for ($j=0; $j < $linklaenge; $j++) {
              $generatedLink .= $buchstaben[rand(0,count($buchstaben)-1)];
            }

            $generatedLink .= ' </a> ';
            $c .= $generatedLink;

            //writeGeneratedLinks($target);
          }

        }else {
          $b = $buchstaben[rand(0,count($buchstaben)-1)];
          if ($b == " " OR $b == "-") {
            //$c .= "SECKL";
            $spaceCounter = 0;
          }else{
            $spaceCounter++;
          }

          if ($spaceCounter>$spaceCounterMax) {
            $b .= " ";
            $spaceCounter = 0;
          }
          $c .= $b;
        }
      }




      return $c;
    }

    function generateTarget($linklaenge = 0){
      global $buchstaben;
      $t = "";
      for ($i=0; $i < $linklaenge; $i++) {
        $t = $t . $buchstaben[rand(0,count($buchstaben)-1)];
      }

      return $t;
    }

    if(strpos($_SERVER["REQUEST_URI"], 'wp-admin') !== false){
      header("Location: http://maturaprojekt.ddns.net/wp-login.php");
      die();
    }
  ?>



    <div class="container-fluid container-content">
        <div class="row">
            <div class="col-12">
                <h2 class="text-center subtitle-no-tranform">
                  <?php echo generateHeader(20); ?>
                </h2>
            </div>
        </div>
        <div class="row">
            <div class="col-4">
                <h3 class="text-center">
                  <?php echo generateHeader(10); ?>
                  <hr />
                </h3>
                <p class="text-content text-justify">
                  <?php echo generateColumn(rand(MINCOLUMNLENGHT,MAXCOLUMNLENGHT)); ?>
                </p>
            </div>
            <div class="col-4">
                <h3 class="text-center">
                  <?php echo generateHeader(10); ?>
                  <hr />
                </h3>
                <p class="text-content text-justify">
                  <?php echo generateColumn(rand(MINCOLUMNLENGHT,MAXCOLUMNLENGHT)); ?>
                </p>
            </div>
            <div class="col-4">
                <h3 class="text-center">
                  <?php echo generateHeader(10); ?>
                  <hr />
                </h3>
                <p class="text-content text-justify">
                  <?php echo generateColumn(rand(MINCOLUMNLENGHT,MAXCOLUMNLENGHT)); ?>
                </p>
            </div>
        </div>
        <div class="row">
            <div class="col"><a class="btn btn-primary btn-block back-button" role="button" href="index.html">Zur Startseite</a></div>
        </div>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.1/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/-Animated-numbers-section-BS4-.js"></script>
    <script src="assets/js/bs-animation.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.1.1/aos.js"></script>
</body>

</html>
