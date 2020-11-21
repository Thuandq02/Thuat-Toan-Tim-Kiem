<h1>Nhap so dien thoai</h1>
<form method="post">
    <input type="text" name="number" placeholder="numberphone">
    <input type="submit" value="Submit">
</form>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if( $textArea = $_POST["number"]) {
        $viettel = array();
        $mobiphone = array();
        $vinaphone = array();
        $textArea = explode(",", $textArea);
        $viet = ["032", "033", "034", "035", "036", "037", "038", "035", "039"];
        $vina = ["088", "083", "084", "085", "081", "082"];
        $mobi = ["070", "079", "077", "076", "078"];
        for ($i = 0; $i < count($textArea); $i++) {
            $value = strlen($textArea[$i]);
            if ($value == 10) {
                $number = str_split($textArea[$i], 3);
                if (in_array($number[0], $viet)) {
                    array_push($viettel, $textArea[$i]);
                    echo "Viettel";
                    echo "<pre>";
                    print_r($viettel);
                    echo "</pre>";
                } elseif (in_array($number[0], $mobi)) {
                    array_push($mobiphone, $textArea[$i]);
                    echo "MobiPhone";
                    echo "<pre>";
                    print_r($mobiphone);
                    echo "</pre>";
                } elseif (in_array($number[0], $vina)) {
                    array_push($vinaphone, $textArea[$i]);
                    echo "VinaPhone";
                    echo "<pre>";
                    print_r($vinaphone);
                    echo "</pre>";
                }
            } else{
                echo "So ".$textArea[$i]." Khong ton tai";
            }
        }
    }
    else{
        echo "ban chua nhap gi";
    }
}
?>