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
    <script>
        function ajax(){
            var req = new XMLHttpRequest();
            req.onreadystatechange = function() {
                if(req.readyState == 4 && req.status == 200){
                    document.getElementById('chat').innerHTML = req.responseText;
                }
            }
            req.open('GET', 'chat.php', true);
            req.send();
        }
        setInterval(function(){
            ajax()
        }, 1000);
    </script>
</head>
<body onload="ajax();">

<div class="container">

    <div id="chat_box">
        <div id="chat"></div>
    </div>    
    <form action="index.php" method="post">
        <input type="text" name="name" placeholder="Enter your name">
        <textarea type="text" name="message" placeholder="Enter your message"></textarea>
        <input type="submit" name="submit" value="Send">    

        </form>
<?php 
    if(isset($_POST['submit'])){
        $name = $_POST['name'];
        $msg = $_POST['message'];

        $query = "INSERT INTO chat (name, message) VALUES ('$name', '$msg')";
        $run = $conn->query($query);
    }
?>
</div>

    
</body>
</html>