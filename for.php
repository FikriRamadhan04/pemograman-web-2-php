<?php
$quote = $_POST['quote'];
$loop = $_POST['loop'];

echo "Jumlah Quote: $loop <br><br>";
for ($i=0; $i < $loop; $i++) { 
    echo "$quote <br>";
}

?>