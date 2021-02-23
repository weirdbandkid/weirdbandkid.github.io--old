<?php

if(isset($_POST['Submit1']))
{ 
$filepath = "memes/" . $_FILES["file"]["name"];

if(move_uploaded_file($_FILES["file"]["tmp_name"], $filepath)) 
{
echo "The file ". basename( $_FILES["file"]["name"]). " uploaded.<br>";

echo "The File Name = " . $_FILES["file"]["name"] . "<br>";

echo "File Type = " . $_FILES["file"]["type"] . "<br>";

echo "File Size = " . ($_FILES["file"]["size"] / 1024) . " kB<br>";

echo "Temporary File Location = " . $_FILES["file"]["tmp_name"];
} 
else 
{
echo "Error !!";

}
}

?>