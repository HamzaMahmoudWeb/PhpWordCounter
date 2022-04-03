<center>
<form method="POST">
<h2 style="text-align: center;"> Welcome To Hamza <Br>Word Counter </h2>
<h2 style="color: Green;"> Enter Your Text below </h2>
<textarea name="texx" id="texx" cols="30" rows="10"></textarea>
<br>
<br>
<button style="padding: 5px 12px;" name="subbb"> Submit </button>
</form>
</center>
<?php

if(isset($_POST['subbb'])){

    $len = str_word_count($_POST['texx']);

echo "<h3> Number of words is "  . $len . "</h3>";

}
?>

    


