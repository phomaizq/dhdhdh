
<html>
    <head>
        <title>Login</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="style2.css">
    </head>
    <body>
        
        <div id="form">
            <h1><center>Tra cứu giấy phép lái xe</center></h1>
            <center><form name="form" action="tracuu.php" onsubmit="return isvalid()" method="POST">
                <label>Mã căn cước công dân: </label>
                <input type="text" id="maCCCD" name="maCCCD"></br></br>
                <label>Mã giấy phép lái xe: </label>
                <input type="text" id="maGPLX" name="maGPLX"></br></br>
                <input type="submit" id="btn" value="Tra cứu" name = "submit"/>
            </form></center>
        </div>





        
        <script>
            function isvalid(){
                var maCCCD = document.form.maCCCD.value;
                var maGPLX = document.form.maGPLX.value;
                if(maGPLX.length==""){
                    alert("Không được để trống mã GPLX");
                    return false;
                }                
            }
        </script>
    </body>
</html>