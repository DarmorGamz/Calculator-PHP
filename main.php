<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Calculator</title>
</head>
<body>
<form method="post">
    <input type="text" name="num1"  placeholder="Number 1">
    <input type="text" name="num2"  placeholder="Number 2">
    <select name="operator">
        <option>None</option>
        <option>Add</option>
        <option>Subtract</option>
        <option>Multiply</option>
        <option>Divide</option>
    </select>
    <br>
    <button type="submit" name="submit" value="submit">Calculate</button>
    <button type="clear" name="clear" value="clear">Reset</button>
</form>
<p>Result:
    <?php
        if(isset($_POST['submit']) && !isset($_POST['clear'])) {
            $iNum1 = $_POST['num1'];
            $iNum2 = $_POST['num2'];
            $sOperator = $_POST['operator'];
            switch ($sOperator) {
                case 'None':
                    echo "You need to select a method!";
                    break;
                case 'Add':
                    echo $iNum1 + $iNum2;
                    break;
                case 'Subtract':
                    echo $iNum1 - $iNum2;
                    break;
                case 'Multiply':
                    echo $iNum1 * $iNum2;
                    break;
                case 'Divide':
                    echo $iNum1 / $iNum2;
                    break;
            }
        } elseif(isset($_POST['clear'])) {
            header('location', 'main.php');
        }
    ?>
</p>
</body>
</html>