<form method="post">
    <label>
        <input type="text" name="number">
    </label>
    <input type="submit" value="Submit">
</form>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST"){
    if ($number = $_POST["number"]){
        $rand = mt_rand(0, 10);
        if ($number == $rand){
            echo "số bạn chọn là: ".$number."<br/>"."số của máy là: ".$rand."<br/>"."Win";
        }else{
            echo "số bạn chọn là: ".$number."<br/>"."số của máy là: ".$rand."<br/>"."Loss";
        }
    }else{
        echo "xin hãy nhập số ";
    }
}