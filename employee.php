<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Employee Management</title>
    <style>
        .myButton {
        box-shadow:inset 0px 1px 0px 0px #f29c93;
        background:linear-gradient(to bottom, #fe1a00 5%, #ce0100 100%);
        background-color:#fe1a00;
        border-radius:6px;
        border:1px solid #d83526;
        display:inline-block;
        cursor:pointer;
        color:#ffffff;
        font-family:Arial;
        font-size:15px;
        font-weight:bold;
        padding:6px 24px;
        text-decoration:none;
        text-shadow:0px 1px 0px #b23e35;
        }
        .myButton:hover {
            background:linear-gradient(to bottom, #ce0100 5%, #fe1a00 100%);
            background-color:#ce0100;
        }
        .myButton:active {
            position:relative;
            top:1px;
        }
        body{
            display: flex;
            text-align: center;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background: url(https://static.vecteezy.com/system/resources/thumbnails/014/525/101/small_2x/simple-background-design-suitable-for-pc-ppt-and-other-backgrounds-vector.jpg);
            background-position: center;
            background-size: cover;
            background-attachment: fixed;
            
        }
        form{
            height: 200px;
            width: 350px;
            margin: 10px 10px 10px 10px;
            padding: 10px;
            border: 4px solid black;
            border-radius: 20px;
            box-shadow: rgba(0, 0, 0, 0.25) 0px 54px 55px, rgba(0, 0, 0, 0.12) 0px -12px 30px, rgba(0, 0, 0, 0.12) 0px 4px 6px, rgba(0, 0, 0, 0.17) 0px 12px 13px, rgba(0, 0, 0, 0.09) 0px -3px 5px;
            
        }
    </style>
</head>
<body>
    <div>
        <h2 style="font-size: 25px; font-family: cursive;">EMPLOYEE MANAGEMENT</h2>
        <form action="work.php" method="post">
            <div style="text-align: center; padding: 5px;">
            <label for="">Employee Name :</label>
            <input type="text" placeholder="Enter the Employee Name" name="employee_name">
            </div>
            <div style="text-align: center; padding: 5px;">
            <label for="">Employee ID :</label>
            <input type="number" placeholder="Enter the Employee ID" name="employee_id">
            </div>
            <div style="text-align: center; padding: 5px;">
            <label for="">Department :</label>
            <input type="text" placeholder="Enter the Department" name="department">
            </div>
            <div style="text-align: center; padding: 5px;">
            <label for="">Salary :</label>
            <input type="number" placeholder="Enter the Salary" name="salary">
            </div>
            <div style="text-align: center; padding: 5px;">
            <label for="">Shift :</label>
            <input type="text" placeholder="Enter the Employee Name" name="shift">
            </div>
            <button type="submit" class ="myButton"  style="padding: 5px;">SUBMIT</button>
        </form>
    </div>
</body>
</html>