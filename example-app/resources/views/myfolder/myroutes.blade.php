<html>


<head>

    <meta charset="utf-8" />

    <style>

        div {
            text-align: center;

        }
        div div{
            overflow: auto;
            margin: 0 auto;
            width: 40%;
            height: 90%;
            font-size: 40px;
            border:4px solid black;
            padding:5px;
            background-color:#FFF8DC

;
        }
    </style>
</head>



<body style="background: #D2691E
">

    <div>
        <h1>MULTIPLE TABLE</h1>

            <form method="POST" action="/my-multiple">
                @csrf
                  <h1> Input your number </h1>
                <input type="number" name="myinput" />
                <br><br>
                <button type="submit">Submit</button>
            </form>
            <?php
            if(isset($myinput)){
                $num = $myinput;
            }
            else{
                $num = 0;
            }
           ?>

            <div>
                <?php


                    if ($num != 0) {
                        for($i = 1 ; $i <= 24 ; $i++){
                            $temp = $num * $i;
                            echo " $num x $i = $temp<br>";
                        }
                    }
                ?>
            </div>

    </div>
</body>
</html>
