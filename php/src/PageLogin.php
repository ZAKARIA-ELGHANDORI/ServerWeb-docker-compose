



<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Page Securise</title>
    <style>
        div{
            width: 15cm ; 
            height : 10cm;
            margin-left: 12cm;
            margin-top : 4cm;
            border : 0px solid black ; 
        }
        #i1{ 
            margin-left: 2cm;
        }

        
    </style>
</head>
<body>
     <form action="Verification.php" method="get">
    <div align="center">
        <img align="center" src="jmeter-tutorial.png" alt="" style="height: 3cm; width: 3cm; "> <p></p>
        <input type="text" class="form-control" placeholder="Your Login.." name="login" style="height: 1.5cm; width: 10cm; "> <br>
        <input type="password" class="form-control" placeholder="Your Password.." name="password" style="height: 1.5cm; width: 10cm; "> <p></p>
        <input align="center" id="i1" type="submit" name="submit" class="btn btn-primary" value="SUBMIT" style="margin-right: 2cm; width :2.5cm">

    </div>
    </form>
    
</body>
</html>