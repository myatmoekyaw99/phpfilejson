<?php include 'menu.php';?>
<?php
    $myfile = fopen("studata1.txt", "r") or die("Unable to open file!");
    //$res=fread($myfile,filesize("studata1.txt"));
    
    echo "<table style='border:2px solid'>";
    echo "<tr>";
    echo "<td style='border:2px solid'>Name</td>";
    echo "<td style='border:2px solid'>E-mail</td>";
    echo "<td style='border:2px solid'>Phone</td>";
    echo "<td style='border:2px solid'>Township</td>";
    echo "<td style='border:2px solid'>Grade</td>";
    echo "<td style='border:2px solid'>Subject</td>";
    echo "</tr>";

    while(!feof($myfile)) {
        
        $st=fgets($myfile);
        if($st!=""){
            $obj=json_decode($st,true);
            echo "<tr style='border:2px solid'>";
            array_walk($obj,"myfunction");
            /*echo "<td>". $obj["Name"]."</td>";
            echo "<td>". $obj["E-mail"]."</td>";
            echo "<td>". $obj["Phone"]."</td>";
            echo "<td>". $obj["Township"]."</td>";
            echo "<td>". $obj["Grade"]."</td>";
            echo "<td>". $obj["Subjects"]."</td>";*/
            echo "</tr>";
        }
    }
    function myfunction($value,$key)
    {
        echo "<td style='border:2px solid'>".$value."</td>";
    }
    fclose($myfile);
    echo "</table>";
?>