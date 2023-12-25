<html>
    <head>
        <meta charset="utf-8">
</head>
<body>
    <?php
    //http://localhost/SE_CAMP/Camp/from%20101.php
    //POST

    ?>

<from action = ""method=post">
    <input type ="text" name="my_val"/>
    <button type = "submit">บันทึก</button>
</from>
<h1><?php 
print_r($_REQUEST);
if(isset($_POST['my_val'])){
    echo $_POST['my_val'];
}?></h1>
</body>
    </html>