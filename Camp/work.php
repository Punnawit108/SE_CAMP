<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <style>
            div{
                width: 300px;
                height: 380px;
                overflow: scroll;
                max-height: 800px;
                max-width: 700px;
                background-color: #f0f0f4;
                padding: 20px;
                border-radius: 10px;
                

                
            }
            
            td {
                padding: 5px;
                text-align: center;
                background-color: #FFE4C4; 
            }
            h1 {
                
                color: #00008B; 
            }

        </style>
    </head>
    <body>
        <h1>
            ตารางแม่สูตรคูณแม่ 2
        </h1>
        <div>
            <table>
                <tbody>
                    
                <?php
                
            $mother_number =2;
            $row =24;
            $row =24;
            for($i = 1 ; $i <= $row ; $i++){
                $result = $mother_number * $i;

                echo"<tr>
                <td>$mother_number  X</td>
                
                <td>$i</td>
                <td>=</td>
                <td>$result</td>
                </tr>";
            }
            ?>
                </tbody>
            </table>
        </div>
    </body>
    



</html>