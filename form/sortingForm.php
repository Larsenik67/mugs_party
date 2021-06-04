<?php 

if(empty($_POST['stock']) == 'Non') {
    $query = "SELECT * FROM `mugs` WHERE qte == '0'";
        if ($result = $mysqli->query($query)) {
            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()){
                    echo '<div class="col-sm mugs mx-1 my-1">
                    <img src=images/'.$row['image'].' alt="...">
                    <br/>
                    '.$row['title'].'
                    <br/>
                    <br/>
                    <p>'.$row['description'].'
                    <br/>
                    <br/>
                    Prix: '.$row['price'].'
                    <br/>
                    Stock: '.$row['qte'].'</p>

                    </div>';
                }
            }
        }
}

?>