<?php 
$table = array(
    "header"=>array(
    "StudentID",
    "Firstname",
    "Middlename",
    "Lastname",
    "Section",
    "Course",
    "Yearlevel"
),
"body"=>array(
        array(
            "firstname"=>"John Oswald",
            "middlename"=>"B.",
            "lastname"=>"Yap",
            "section"=>"3A",
            "course"=>"BSIT",
            "yearlevel"=>"3rd"
        ),
array(
            "firstname"=>"John Andrei",
            "middlename"=>"Middlename",
            "lastname"=>"Martin",
            "section"=>"Section",
            "course"=>"BSIT",
            "yearlevel"=>"3rd"
        ),
        array(
            "firstname"=>"Carl Regiemon",
            "middlename"=>"Middlename",
            "lastname"=>"Marcelo",
            "section"=>"3A",
            "course"=>"BSIT",
            "yearlevel"=>"3rd"
        ),
        array(
            "firstname"=>"Jeorge Anthony",
            "middlename"=>"Middlename",
            "lastname"=>"Reyes",
            "section"=>"3A",
            "course"=>"BSIT",
            "yearlevel"=>"3rd"
        ),
        array(
            "firstname"=>"Cristan Irish",
            "middlename"=>"Middlename",
            "lastname"=>"Legaspi",
            "section"=>"3A",
            "course"=>"BSIT",
            "yearlevel"=>"3rd"
        ),
        array(
            "firstname"=>"Trishia Mae",
            "middlename"=>"Middlename",
            "lastname"=>"Manabat",
            "section"=>"3A",
            "course"=>"BSIT",
            "yearlevel"=>"3rd"
        ),
        array(
            "firstname"=>"Ian Angelo",
            "middlename"=>"Middlename",
            "lastname"=>"Llabore",
            "section"=>"3A",
            "course"=>"BSIT",
            "yearlevel"=>"3rd"
        )
        ),
        

)


?>

<table border='1'>
    <thead>
        <?php foreach($table["header"] as $header):?>
        <th><?php echo $header; ?></th>
        <?php endforeach; ?>
       
    </thead>
    <tbody border='1'>
        <?php for($i = 0; $i <= count($table["body"]) -1; $i++){
            echo "<tr>";
            echo "<td>" .$i."</td>";
            echo "<td>".$table["body"][$i]["firstname"]."</td>";
            echo "<td>".$table["body"][$i]["middlename"]."</td>";
            echo "<td>".$table["body"][$i]["lastname"]."</td>";
            echo "<td>".$table["body"][$i]["section"]."</td>";
            echo "<td>".$table["body"][$i]["course"]."</td>";
            echo "<td>".$table["body"][$i]["yearlevel"]."</td>";
            echo "</tr>";
        } ?>
       

        
     </tbody>
</table>
<?php
?>