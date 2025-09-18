<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form name = "myform" action ="" method = "POST">
        <table>
            <tr>
                <td>Name:</td>
                <td><input type = "text" name = "name"><span id = "ename"></td>
            </tr>
            <tr>
                <td>Roll No: </td>
                <td><input type = "text" name = "roll"><span id = "eroll"></td>
            </tr>
            <tr>
                <td>Semester:</td>
                <td><input type = "text" name = "sem"><span id = "esem"></td>
            </tr>
            <tr>
                <td>Department:</td>
                <td>
                    <input type = "text" name = "dep"><span id = "edep">
                </td>
            </tr>
            <tr>
                <td>Hostel name:</td>
                <td><input type = "text" name = "hostel"><span id = "ehostel"></td>
            </tr>
            <tr>
                <td>Food preferences:</td>
                <td>
                    <label for = "veg">Vegetarian</label><input type = "radio" id = "veg" name = "food" value = "veg">
                    <label for = "non-veg">Non-Vegetarian</label><input type = "radio" id = "non-veg" name = "food" value = "non-veg">
                </td>
            </tr>
            <tr>
                <td>
                    <input type = "submit" name = "submit" value = "submit">
                    <input type = "submit" name = "showVeg" value = "show Veg">
                    <input type = "submit" name = "showNonveg" value = "show Non veg">
                </td>
            </tr>
        </table>
    </form>
</body>
</html>

<?php
if(isset($_POST['submit']))
{
    $conn = mysqli_connect("localhost:3307","root","root123","menu");
    if(!$conn) 
    {
        print(mysqli_connect_error($conn));
    }
    else 
    {
        $name = $_POST['name'];
        $roll = $_POST['roll'];
        $sem = $_POST['sem'];
        $dep = $_POST['dep'];
        $hostel = $_POST['hostel'];
        $food = $_POST['food'];

        $query = "insert into student values ('$name', '$roll', '$sem', '$dep', '$hostel', '$food')";
        mysqli_query($conn,$query);
        mysqli_close($conn);
    }

}


?>

<?php
    if(isset($_POST['showVeg'])){
        
        $conn = mysqli_connect("localhost:3307","root","root123","menu");
        if(!$conn) 
        {
            print(mysqli_connect_error($conn));
        }
        else{
            $query = "select * from menu";
        $result = mysqli_query($conn,$query);
        ?>

        <table border = '1'>
            <tr>
                <th colspan = '8'>Mess Menu</th>
            </tr>
            <tr>
                <td>Meal</td>
                <td>Monday</td>
                <td>Tuesday</td>
                <td>Wednseday</td>
                <td>Thursday</td>
                <td>Friday</td>
                <td>Saturday</td>
                <td>Ratings
            </tr>
            <tr>
                <?php while($row = mysqli_fetch_array($result)){  ?>
                    <td><?php echo ($row['meal']);?></td>
                    <td><?php echo ($row['monday']);?></td>
                    <td><?php echo ($row['tuesday']); ?></td>
                    <td><?php echo ($row['wednesday']);?></td>
                    <td><?php echo ($row['thursday']);?></td>
                    <td><?php echo ($row['friday']);?></td>
                    <td><?php echo ($row['saturday']);?></td>
                    <td>
                    <label for = "1">1</label><input type = "radio" id = "1" name = "rating" value = "1">
                    <label for = "2">2</label><input type = "radio" id = "2" name = "rating" value = "2">
                    <label for = "3">3</label><input type = "radio" id = "3" name = "rating" value = "3">
                    <label for = "4">4</label><input type = "radio" id = "4" name = "rating" value = "4">
                    <label for = "5">5</label><input type = "radio" id = "5" name = "rating" value = "5">
                    </td>
                    
            </tr>
            <?php } ?>
            <?php }?>
        <?php }?>
        </table>

        <?php
    if(isset($_POST['showNonveg'])){
        
        $conn = mysqli_connect("localhost:3307","root","root123","menu");
        if(!$conn) 
        {
            print(mysqli_connect_error($conn));
        }
        else{
            $query = "select * from menuNonVeg";
        $result = mysqli_query($conn,$query);
        ?>

        <table border = '1'>
            <tr>
                <th colspan = '8'>Mess Menu</th>
            </tr>
            <tr>
                <td>Meal</td>
                <td>Monday</td>
                <td>Tuesday</td>
                <td>Wednseday</td>
                <td>Thursday</td>
                <td>Friday</td>
                <td>Saturday</td>
                <td>Ratings
            </tr>
            <tr>
                <?php while($row = mysqli_fetch_array($result)){  ?>
                    <td><?php echo ($row['meal']);?></td>
                    <td><?php echo ($row['monday']);?></td>
                    <td><?php echo ($row['tuesday']); ?></td>
                    <td><?php echo ($row['wednesday']);?></td>
                    <td><?php echo ($row['thursday']);?></td>
                    <td><?php echo ($row['friday']);?></td>
                    <td><?php echo ($row['saturday']);?></td>
                    <td>
                    <label for = "1">1</label><input type = "radio" id = "1" name = "rating" value = "1">
                    <label for = "2">2</label><input type = "radio" id = "2" name = "rating" value = "2">
                    <label for = "3">3</label><input type = "radio" id = "3" name = "rating" value = "3">
                    <label for = "4">4</label><input type = "radio" id = "4" name = "rating" value = "4">
                    <label for = "5">5</label><input type = "radio" id = "5" name = "rating" value = "5">
                    </td>
                    
            </tr>
            <?php } ?>
            <?php }?>
        <?php }?>
        </table>
