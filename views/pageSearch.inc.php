<!DOCTYPE html>
<html lang="en">
<?php

$title = "TEST";
ob_start();
$category = array("Linear Search","Binary Search","Bubble Search");

?>
<body style="width: 100%">

<!--Search-->
<div class="container" >
    <form action="" id="formSearch">
        <div class="containerList">
            <label for="labelList">List </label> <input type="text" name="list" id="list" required>
        </div>
        <div class="containerSearch">
            <label for="labelSearch">Search </label><input type="text" name="search" id="search" required>
            <input type="submit" value="Search">
        </div>
        <div class="containerCategory">
            <label for="labelCategory">Category</label>
            <select name="category" id="category">
                <?php
                    foreach($category as $key => $value) echo "<option value='".$key."'>".$value."</option>";
                ?>
            </select>
        </div>
        <div class="containerResult">
            <label for="labelResult">Result</label>
            <div class="result">
                
            </div>
        </div>
    </form>
</div>

<script type="text/javascript" language="javascript" src= "<?= Router::getSourcePath()."/javascript/pageSearch.js" ?>"></script>
</body>
<?php
$content = ob_get_clean();
include Router::getSourcePath()."templates/layout.php";

?>
</html>