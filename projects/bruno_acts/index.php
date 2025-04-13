


<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="styles.css" />

    <title>php_acts</title>
  </head>
  <body>

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">My Activities</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#home">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#act1">Act#1</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#act2">Act#2</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#act3">Act#3</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#act4">Act#4</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#act5">Act#5</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#act6">Act#6</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#act7">Act#7</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#act8">Act#8</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#act9">Act#9</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#act10">Act#10</a>
      </li>
  </div>
</nav>

<!-- CALCULATOR -->
<div class="container text-center pd-5" style="width: 30rem;">

<br />
<br />

<div class="card" style="width: 30rem;" >
  <h3 id="act1">Act#1</h3>
  <div class="card-body">
    <section class="sum" >

      <form class="" action="" method="GET">
        <input type="number" name="newdigits" id="newdigits" placeholder="enter numbers" />
        <input type="submit" id="newsubmit" value="CALCULATE" />
      </form>

      <h4>ANSWER:
        <?php
        if (isset($_GET['newdigits'])){
        if (!empty($_GET['newdigits'])){

          $num = $_GET['newdigits'];
              $sum=0; $rem=0;
              for ($i =0; $i<=strlen($num);$i++)
              {
              $rem=$num%10;
              $sum = $sum + $rem;
              $num=$num/10;
              }
              echo "Sum of digits is $sum";
              }
            }
              ?>
      </h4>
    </section>
  </div>
</div>

<br />
<br />

<div class="card" style="width: 30rem;">
  <h3 id="act2">Act#2</h3>
  <div class="card-body">
    <section class="idgen" >
             <form class="" method="post">
               <label for="randomid"><b>CEU:</b></label>
               <?php
               $randomdid = rand(1000000000,9999999999);
               echo $randomdid;
               ?>
               <br>
               <input type="submit" name="randomid" id="randomid" value="GENERATE" />
             </form>
         </section>
         <br>
    </section>
  </div>
</div>

<br />
<br />

<div class="card" style="width: 30rem;">
  <h3 id="act3">Act#3</h3>
  <div class="card-body">
    <section class="stripvowels" >
      <form class="" action="" method="GET">
        <input type="text" name="newtext" id="newtext" placeholder="enter words" />
        <input type="submit" id="remvowels" value="GENERATE" />
      </form>

      <h4>ANSWER:
        <?php
        if (isset($_GET['newtext'])){
        if (!empty($_GET['newtext'])){
        $str = $_GET['newtext'];
        $vowels = array("a", "e", "i", "o", "u", "A", "E", "I", "O", "U", " ");
        $str = str_replace($vowels, "", $str);
        echo $str;
        }
      }
         ?>
       </h4>
    </section>
  </div>
</div>

<br />
<br />

<div class="card" style="width: 30rem;">
  <h3 id="act4">Act#4</h3>
  <div class="card-body">
    <section class="sepwords" >
      <form class="" action="" method="GET">
        <input type="text" name="newword" id="newword" placeholder="enter sentence" />
        <input type="submit" id="sepwords" value="GENERATE" />
      </form>

      <h4>ANSWER:</h4>

      <?php
        if (isset($_GET['newword'])){
        if (!empty($_GET['newword'])){
        $str = $_GET['newword'];
        $delimiter = ' ';
        $words = explode($delimiter, $str);
        $num = 1;
        foreach ($words as $word) {
            echo $num .".". $word."";
            echo "<br>";
            $num++;
        }
      }
    }
        ?>
    </section>
  </div>
</div>

<br />
<br />

<div class="card" style="width: 30rem;">
  <h3 id="act5">Act#5</h3>
  <div class="card-body">
    <section class="calcutor" >
      <form class="" action="index.php" method="GET">
        <input type="number" name="frst" placeholder="Enter First Number">
        <input type="number" name="scnd" placeholder="Enter Second Number">
        <br>
        <br>
        <select name="res">
            <option>Select</option>
            <option value="add">Add</option>
            <option value="sub">Subtract</option>
            <option value="mul">Multiply</option>
            <option value="div">Divide</option>
        </select>
        <input type="submit" name="calc" value="CALCULATE"/>
      </form>

      <h4>ANSWER:</h4>
      <?php
  if(isset($_GET['calc'])){
  if (!empty($_GET['calc'])){
    $frstnum=$_GET['frst'];
    $scndnum=$_GET['scnd'];
    $ans=$_GET['res'];

    switch($ans){

      case "add":
          $ans=$frstnum+$scndnum;
          break;
      case "sub":
          $ans=$frstnum-$scndnum;
          break;
      case "mul":
          $ans=$frstnum*$scndnum;
          break;
      case "div":
          $ans=$frstnum/$scndnum;
          break;
      default:
      $ans="Please select an operation";
    }
  }
}
  ?>
  <span><?php echo @$ans;?></span>
  </section>
  </div>
</div>

<br />
<br />

<div class="card" style="width: 30rem;">
  <h3 id="act6">Act#6</h3>
  <div class="card-body">
    <section class="ipaddress" >
        <form class="" method="GET">
          <input type="submit" name="detect" value="DETECT"/>
        </form>
      <?php
      error_reporting(0);
       if(isset($_GET['detect'])){
         $ip_address=$_SERVER['REMOTE_ADDR'];
         echo "Your IP Address is:".$ip_address;
       }
      ?>
    </section>
  </div>
</div>

<br />
<br />

<div class="card" style="width: 30rem;">
  <h3 id="act7">Act#7</h3>
  <div class="card-body">
    <section class="location" >
      <form class="" method="GET">
        <input type="submit" name="locate" value="LOCATE"/>
      </form>

    <?php
      error_reporting(0);
      if(isset($_GET['locate'])){
      $query = @unserialize (file_get_contents('http://ip-api.com/php/'));
      if ($query && $query['status'] == 'success') {
      echo 'Hey user from ' . $query['country'] . ', ' . $query['city'] . '!';
      }
    }
      ?>
    </section>
  </div>
</div>

<br />
<br />

<div class="card" style="width: 30rem;">
  <h3 id="act8">Act#8</h3>
  <div class="card-body">
  <section class="email" >
    <h3 class="mt-5 pb-3 col">Activity #8</h3>
         <form method="GET" action="functions/functions8.php">
           <label for="email">Email Address:</label>
           <input type="email" id="email" name="email" required placeholder="Enter your email address"> <br>
           <input type="submit" name="send" value="SEND"/>
         </form>
  </section>

  <?php
  if (isset($_GET['send'])) {
    $email_address = $_GET['email'];
    echo "Hello, $email_address!";
  }
  ?>

  </div>
</div>

<br />
<br />

<div class="card" style="width: 30rem;">
  <h3 id="act9">>Act#9</h3>
  <div class="card-body">
    <section class="convertpdf">
      <form method="GET" action="functions9.php" target="_blank">
        <textarea name="text" rows="5" required></textarea>
        <br>
        <input type="submit" name="submit" value="Convert to PDF">
      </form>
    </div>

    <?php
    
    ?>

    </section>
  </div>


<br />
<br />

<div class="card" style="width: 30rem;">
  <h3 id="act10">Act#10</h3>
  <div class="card-body">
    <section class="uploadimg" >
      <div class="container text-center">
  <h3 class="mt-5 pb-3 col">Activity #10 </h3>
  <form method="post" action="upload.php" enctype="multipart/form-data">
    <input type="file" name="image">
    <br>
    <br>
    <input type="submit" name="upload" value="Upload">
  </form>
</div>
    </section>
  </div>
</div>

<br />
<br />

</div>

    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>
