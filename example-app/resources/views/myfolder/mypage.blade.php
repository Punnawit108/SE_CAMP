<h1>My Folder and My Page</h1>

<form method="POST" action="/my-route">
     @csrf
    <input type="text" name="myinput"/>
    <button type="submit">Submit</button>
</form>

<?php
if(isset(&myinput))
{
    $num = &myinput;
} else {
    $num = 0;
}

?>
