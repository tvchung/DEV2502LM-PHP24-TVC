<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form - POST</title>
</head>
<body>
    <h1> Làm việc với form </h1>
    <hr/>
    <form name="myForm" method="POST" action="index4-result.php" >
        <p>Name: 
            <input type="text" name="txtFullName" value="" />
        <p> Age: 
            <input type="number" name="txtAge" value="" />
        <p>
            <input type="submit" value="Submit" name="btnSubmit" />
        </p>
    </form>
</body>
</html>