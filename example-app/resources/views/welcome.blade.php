<!DOCTYPE html>
<html>


<head>

    <title>Multiple table</title>
</head>

<body>

    <h1>ตารางแม่สูตรคูณ</h1>
    <input type="text" id="my_number" value="10">
    <button onclick="myFunction()"  class="btn btn-outline-success">submit</button>
    <br>
    <h1 id="number"></h1>
    <h1 id="result"></h1>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>


    <script>

        function myFunction(){
            $('.my_gen_number').remove();
            let my_number = parseInt($('#my_number').val());
            $('#number').after(`<h1 class="my_gen_number"> ${"สูตรคูณแม่ : " + my_number} </h1>`);
            for (let i = 1; i <= 24; i++) {
                $('#result').before(`<h3 class="my_gen_number , card-body table-responsive p-0">${my_number + " * " + i + " = " + (i) * my_number }</h3>`);
            }
            console.log(document.getElementById('my_number').value);
            console.log("Click sub");
        }

    </script>
</body>

</html>
