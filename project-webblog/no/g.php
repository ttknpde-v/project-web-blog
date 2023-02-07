<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <br>
    
    num1 : <input type="text" name="num1" id="num1">
    output :<input type="text" name="name" id="comment">
    <button type="button" id="send">send</button>

</body>
<script src="https://code.jquery.com/jquery-3.6.3.js" integrity="sha256-nQLuAZGRRcILA+6dMBOvcRh5Pe310sBpanc6+QBmyVM="
    crossorigin="anonymous"></script>
<script>
    $(document).ready(function () {
        console.log("hello");
        $("#send").on("click", function () {
            out();
        })
    })

    function out() {
        console.log("output");
        let num1 = $('#num1').val()
    
        $.ajax({
            url: "TEST.php?var2=" + num1,
        }).done(function (response) {
           console.log(response);

           let text = JSON.parse(response);

           console.log(text);
           $("#comment").val(text.ipAddress);

        });
    }
</script>

</html>