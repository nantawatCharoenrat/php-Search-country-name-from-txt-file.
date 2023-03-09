<!DOCTYPE html>
<html>
<head>
      <meta charset="UTF-8">
      <title>Example 4-4</title>
</head>
<body>
<?php
      $Asia = array(
            "Kazakhstan", "Kyrgyzstan", "Tajikistan", "Turkmenistan",
            "Uzbekistan", "China", "China, Hong Kong Special Administrative", "Region", "China, Macao Special Administrative",
            "Region", "North Korea", "Japan", "Mongolia", "South Korea", "Afghanistan", "Bangladesh",
            "Bhutan", "India", "Iran (Islamic Republic of)", "Maldives", "Nepal", "Pakistan", "Sri Lank", "Brunei Darussalam",
            "Cambodia", "Indonesia", "Lao People's Democratic Republic", "Malaysia",
            "Myanmar", "Philippines", "Singapore", "Thailand", "Timor-Leste", "Viet Nam", "Armenia",
            "Azerbaijan", "Bahrain", "Cyprus", "Georgia", "Iraq", "Israel", "Jordan", "Kuwait", "Lebanon", "Oman", "Qatar", "Saudi Arabia",
            "State of Palestine", "Syrian Arab Republic", "Turkey", "United Arab Emirates", "Yemen"
        );
      $msgtxt = array("hw-doc01.txt","hw-doc02.txt","hw-doc03.txt");
      for ($i = 0;$i <=2;$i++) {
      $msg = file_get_contents($msgtxt[$i]);
      $a = [];	//อาร์เรย์ว่างสำหรับเก็บคำหยาบที่พบ
      foreach ($Asia as $r) {
            if (stripos($msg, $r) != null) {   //ถ้ามีหยาบในสตริง
                  $a[] = $r;                                //ถ้าพบ ให้เก็บไว้ในอาร์เรย์
            }
      }
      
      if (count($a) > 0) {
            //รวมอาร์เรย์เป็นสตริงเดียวกันโดยคั่นด้วย  <br> เพื่อให้ขึ้นบรรทัดใหม่
            $a = array_unique($a);
            sort($a);
            $str = implode('<br>', $a);
            $ii = $i+1;
            echo "ประเทศที่พบในบทความ $ii : <br>$str<br>";
      }
}
?>
</body>
</html>
