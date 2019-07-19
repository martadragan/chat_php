<?php
    include 'DB.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Chat System PHP</title>
    <link rel="stylesheet" href="style.css" media="all">
</head>
<body>

<div class="container">

    <div id="chat_box">
        <?php 
            $query ="SELECT * FROM chat ORDER BY id DESC";
            $run = $conn->query($query);

            while($row = $run->fetch_array()) :
        ?>
        <div id="chat_data">
            <span style="color: pink;"><?= $row['name']; ?>:</span>
            <span style="color: blue;"><?= $row['message']; ?></span>
            <span style="float: right;"><?= $row['date']; ?></span>
        </div>
        <?php endwhile; ?>
    </div>    
    <form action="index.php" method="post">
        <input type="text" name="name" placeholder="Enter your name">
        <textarea type="text" name="name" placeholder="Enter your message"></textarea>
        <input type="submit" name="submit" value="Send">    

    </form>

</div>

    
</body>
</html>