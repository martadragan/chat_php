<?php 

include "DB.php";

$query ="SELECT * FROM chat ORDER BY id DESC";
$run = $conn->query($query);

while($row = $run->fetch_array()) :
?>
<div id="chat_data">
    <span style="color: pink;"><?= $row['name']; ?>:</span>
    <span style="color: blue;"><?= $row['message']; ?></span>
    <span style="float: right;"><?= formatDate($row['date']); ?></span>
</div>
<?php endwhile; ?>