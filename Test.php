<html class="Test">
    <head>
        <title>Tester</title>
        <meta charset="utf-8">
        <meta name="description" content="CSV needs to read properly">
        <link type="text/css" href="CSS.css" rel="stylesheet"/>
    </head>

    <?php
        include "Navigator.php";
    ?>

    <body class="TestBody">

        <div class="BodyDiv">

              <?php


                  $debug = false;

                      if(isset($_GET["debug"])){
                      $debug = true;
                      }

                      $myFolder = 'Data/';
                      $myFileName = 'Rest';
                      $fileExt = '.csv';
                      $filename = $myFolder . $myFileName . $fileExt;

                      if ($debug) print '<p>filename is ' . $filename;

                      $file=fopen($filename, "r");

                      if($debug){
                          if($file){
                              print '<p>File Opened Succesful.</p>';
                          }else{
                              print '<p>File Open Failed.</p>';
                          }
                      }

                      if($file){
                          if($debug) print '<p>Begin reading data into an array.</p>';

                          while(!feof($file)){
                              $TestData[] = fgetcsv($file);
                          }

                          if($debug) {
                              print '<p>Finished reading data. File closed.</p>';
                              print '<p>My data array<p><pre> ';
                              print_r($TestData);
                              print '</pre></p>';
                          }

                      }

                      $lastrest = "";
                      foreach ($TestData as $Data) {
                          if ($lastrest != $Data[0]) {
                              print "<li>";
                              print '<a href ="test-detail.php?rest=';
                              Print $Data[0];
                              print '">';
                              Print $Data[0];
                              print '</a>';


                              print "</li>";
                          }   $lastrest = $Data[0];
                      }

                  print "<table>";

                      print "<tr>";
                          print "<th>Name             </th>";
                          print "<th>nospacename      </th>";
                          print "<th>Location         </th>";
                          print "<th>Quality          </th>";
                          print "<th>Price            </th>";
                          print "<th>Food_Type        </th>";
                          print "<th>Delivery_Type    </th>";
                          print "<th>Vegan_Options    </th>";


                      print "</tr>";

                      foreach ($TestData as $Data) {
                          print "<tr>";
                              print "<td>". $Data[0] ."</td>";
                              print "<td>". $Data[1] ."</td>";
                              print "<td>". $Data[2] ."</td>";
                              print "<td>". $Data[3] ."</td>";
                              print "<td>". $Data[4] ."</td>";
                              print "<td>". $Data[5] ."</td>";
                              print "<td>". $Data[6] ."</td>";
                              print "<td>". $Data[7] ."</td>";

                              print "</tr>";
                      }

                  print "</table>";

              ?>
        </div>


    </body>

<!-- There is no reason, this is no rhyme. You have failed me for the last time -->

</html>
