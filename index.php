<!doctype Html>
<html>
<head>
    <title>All Star Task</title>
    <script language="javascript">
    function datacheck(){
        var pattern = /^(\d{1,2},)*\d{1,2}$/;
        var testvalue = document.getElementById('inputValid').value;
        if(!pattern.test(testvalue)){
            alert("The input is Not entered properly please max sure to enter Integers seperated by Commas only");
            return false;
            }
        }
    </script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>

<body style="margin:10px;">
    <legend>Max Number from input</legend>
    <form onsubmit="return dateCheck(this)"  action="maxFinder.php" method="POST">
        <div class="form-group has-success">
            <label class="form-control-label" for="inputSuccess1">Enter array numbers seperated by commas </label>
            <input type="text" value="" name="array" class="form-control is-valid" id="inputValid">
        </div>
        <button type="submit" class="btn btn-success" onClick="return datacheck()">Get Max Number</button>
        <?php
            $d=0;
            if(isset($_COOKIE["key"])) 
            {
                $d=$d+1;  
            }
            if($d!=0){?>
                <div class="list-group" style="margin:15px;">
                    <a class="list-group-item list-group-item-action disabled">Max Number is : <?php echo $_COOKIE["key"]; ?></a>
                </div>
            <?php  setcookie("key",'',time() - 1800,'/'); }?>
                </div>
    <form>
</body>
</html>