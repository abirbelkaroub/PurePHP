<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="cssCalculator.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>A calculator</title>
</head>
<body>
    <label class='label'> My First Project : A Calculator .</label>
    <form action="functions.php" method="get">
        <div class="search">
        <input type="text" name="num01" placeholder="Number 01"  class="search-input" require>
        </div>
        <div class="search" >
        <select name="operator"  class="search-input" require>
             <option value="" disabled selected hidden style="color:grey" >An operator</option>
             <option value="add" class="optionClass">Addition</option>
             <option value="sub" class="optionClass" >Subtract</option>
             <option value="mul"class="optionClass">Multiplication</option>
             <option value="div"class="optionClass">Division</option>
        </select>
        </div>
        <div class="search" >
        <input type="text" name="num02" placeholder="Number 02"  class="search-input" require>
        </div>
        <button type="sumbit" class="button button-block">Calculate </button>
    </form>
</body>
</html>