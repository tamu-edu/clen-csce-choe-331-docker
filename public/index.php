<html>

<!-- HEAD section ............................................................................ -->
<head>
  <title> Yoonsuck Choe's Experimental Web Site </title>


  <!-- javascript functions -->
  <script>
  function randText() {
      let randomBits = ["hello world", "random thoughts", "pinky and the brain"];
      document.getElementById("demo").innerHTML = randomBits[Math.floor(Math.random()*3)];
  }
  </script>

  <!-- style -->
 
  <!--
  <style>
    div.defaultFont {
        font-family: Helvetica, Arial, sans-serif;
    }
    
    div.secondaryFont {
        font-family: serif;
    }

    h3 {
        color: blue;
    }
    <link href="default.css" rel="stylesheet" type="text/css>
  </style> -->

  <LINK REL=StyleSheet HREF="simple.css" TYPE="text/css" MEDIA=screen>
  

</head>

<!-- BODY section ............................................................................. -->
<body>
<div class="defaultFont">

<!-- PHP testing area ................................ --> 
<?php

   echo "<h1> Choe's Experimental CSCE 331 Docker Web Site </h1>\n";

   echo "<font color=\"green\"> Haha update and redeploy </font><p/>\n";
   echo " Testing PHP <br>\n";
   echo " Hello world!<p/>\n";

   echo "<h3>Testing file loading:</h3>\n";

   # FILE access 
   # $h = fopen("false.dat","r");

   $handle = fopen("data.dat","r") or die("Cannot open data.dat");

   echo "<table  border=\"1\">\n";

   while ($data = fgets($handle)) {
        echo "<tr>\n";
        $data_cols = preg_split('/,/',$data);
        for ($k=0; $k<count($data_cols); ++$k) {
            echo "  <td> ".$data_cols[$k]." </td>\n";
        }
        echo "</tr>\n";
   }

   fclose($handle);

   echo "</table>\n<p/>";
   

   echo "Debug: ";
   print_r($data_cols); 

   echo "<p/>";

   echo "rand : ".$data_cols[rand(0,1)]."\n";

   echo "<p/>";

?>


<!-- Java script testing area ............................... -->

<div class="secondaryFont"> 

<h3>Java script test</h3>

<p id="demo"> Content to be changed: </p> 

<button type="button" onclick="randText()">Click Me!</button>

<button onClick="window.location.reload();">Reload Page</button>

<p>For more javascript examples, see <a href="jstest.php">jstest.php</a>.</p>

</div>

<!-- Fetch testing............................... -->
<div class="SecondaryFont">
<h3> Fetch html source code </h3>
<a href="fetch.php">fetch.php</a>
</div>

<!-- HTML form input handling .......................... -->

<h3>HTML Form input test</h3>
<p/>
<form action="action.php" method="post">
Search: <input type="text" name="name"> 
<input type="submit">
</form>
<p/>

<h3>HTML Form input test 2 </h3>

Search academic genealogy (external link: <a href="https://www.mathgenealogy.org">https://www.mathgenealogy.org</a>): <p/>
<form action="https://www.mathgenealogy.org/query-prep.php" method="post">
Firstname:
<input type="text" name="given_name" value="Yoonsuck">  <br/>
Lastname:
<input type="text" name="family_name" value="Choe"> 
<input type="submit">
</form>
<p/>
</div> <!-- end of big div -->

<?php echo "Container IP Address:".getenv('MY_IP')."\n"; ?>
</body>

</html>

