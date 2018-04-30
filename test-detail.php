<html class="test-detail">

<head>
    <title>details</title>
    <meta charset="utf-8">
    <meta name="description" content="The Sitemap for GG">
    <link type="text/css" href="CSS.css" rel="stylesheet"/>
</head>

<?php
    include "Navigator.php";
?>

    <body>



            <!--________________________________________________________________________________________-->

            <?php

                $rest = '';

                if (isset($_GET['rest'])) {
                    $rest = htmlentities($_GET['rest'], ENT_QUOTES, "UTF-8");
                }

                $debug = false;

                if (isset($_GET["debug"])) {
                    $debug = true;
                }

                $myFolder = 'Data/';
                $myFileName = 'Rest';
                $fileExt = '.csv';
                $filename = $myFolder . $myFileName . $fileExt;

                if ($debug)
                    print '<p>filename is ' . $filename;

                $file = fopen($filename, "r");

                if ($debug) {
                    if ($file) {
                        print '<p>File Opened Succesful.</p>';
                    } else {
                        print '<p>File Open Failed.</p>';
                    }
                }

                if ($file) {
                    if ($debug)
                        print '<p>Begin reading data into an array.</p>';



                    }

                    while (!feof($file)) {
                        $TestData[] = fgetcsv($file);
                    }

                    if ($debug) {
                        print '<p>Finished reading data. File closed.</p>';
                        print '<p>My data array<p><pre> ';
                        print ($TestData);
                        print '</pre></p>';
                    }


                print "<div class='bodydiv'>";


                foreach ($TestData as $restdata) {




                        print "<div class='detaildivsection1'>";
                        print "<h1>$restdata[0]</h1>";
                          print "<img class='imgresturantpic' alt='' src='IMG/resturants/$restdata[1].png'>";
                          print "<div>";
                            print "<ul>";
                              print "<div><img class='imgdetailindicators' alt='' src='IMG/Indicators/Price$restdata[4].png'></div>";
                              print "<div><img class='imgdetailindicators' alt='' src='IMG/Indicators/Star$restdata[3].png'></div>";
                              print "<div><img class='imgdetailindicators' alt='' src='IMG/Indicators/Vegan$restdata[8].png'></div>";
                            print "</ul>";
                          print "</div>";
                        print "</div>";



                        print "<div class='detaildivsection2'>";
                          print"<p> $restdata[22] </p>";
                        print"</div>";


                        print"<div class='detaildivsection3'>";
                          print"<div>";
                            print"<h2>Hours</h2>";
                            print"<table>";

                              print"<tr>";
                                print"<th>Day</th>";
                                print"<th>Open</th>";
                                print"<th>Close</th>";
                              print"</tr>";

                              print"<tr>";
                                print"<td>Monday</td>";
                                print"<td>$restdata[10]AM</td>";
                                print"<td>$restdata[11]PM</td>";
                              print"</tr>";

                              print"<tr>";
                                print"<td>Tuesday</td>";
                                print"<td>$restdata[12]AM</td>";
                              print"<td>$restdata[13]PM</td>";
                              print"</tr>";

                              print"<tr>";
                                print"<td>Thursday</td>";
                                print"<td>$restdata[14]AM</td>";
                                print"<td>$restdata[15]PM</td>";
                              print"</tr>";

                              print"<tr>";
                                print"<td>Friday</td>";
                                print"<td>$restdata[16]AM</td>";
                                print"<td>$restdata[17]PM</td>";
                              print"</tr>";

                              print"<tr>";
                                print"<td>Saturday</td>";
                                print"<td>$restdata[18]AM</td>";
                                print"<td>$restdata[19]PM</td>";
                              print"</tr>";

                              print"<tr>";
                                print"<td>Sunday</td>";
                                print"<td>$restdata[20]AM</td>";
                                print"<td>$restdata[21]PM</td>";
                              print"</tr>";

                            print"</table>";
                          print"</div>";

                          print"<div>";
                            print"<div class='detaildivsection3dub'><p>$restdata[2]</p></div>";
                            print"<div class='detaildivsection3dub'><p>Delivery Type:<br>$restdata[6]</p></div>";
                          print"</div>";

                          print"<div>";
                            print"<p>CONTACT INFORMATION<br>$restdata[7]<br>$restdata[9]</p>";
                          print"</div>";

                        print"</div>";

                                  print"</div>";


}












    print"</body>";
    ?>

</html>
