<html>
<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Ajax_1</title>  
<style>
html, body{
    height:100%;
    width:100%;
    display:flex;
    align-items:center;
    justify-content:center;
    font-size:25px;
}

input[type="checkbox"]{
    display:none;
}

input+label {

}

input:checked+label {
    background-color:gray;
}

label{
    width:100%;
    margin:2px;
    display:block;
}

form {
    display:flex;
    align-items:center;
    justify-content:center;
    background-color:lightgray;
    flex-direction:column;
}

</style>
</head>
<body>
<form id="registerform" action="for_test1.php" method="post">
    <p>which vehicle do you have right now?</p>
    <input type="checkbox" id="vehicle1" name="vehicle[]" value="Bike">
    <label for="vehicle1"> I have a bike</label>
    <input type="checkbox" id="vehicle2" name="vehicle[]" value="Car">
    <label for="vehicle2"> I have a car</label>
    <input type="checkbox" id="vehicle3" name="vehicle[]" value="Boat">
    <label for="vehicle3"> I have a motorcycle</label><br>
<input type="submit" value="SUBMIT" class="submit">
</form>

<script>
$(function() {
    $('form').submit(function(e) {
        e.preventDefault();

        var formData = new FormData(this);
        $.ajax({
            type: 'POST',
            url: 'for_test1.php',
            data: formData
        });
        return false;
    });
})
</script>
</body>
</html>
