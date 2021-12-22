<form action="../api/addtime.php">
    開始時間
<input type="date" name="startime"><br>
結束時間
<input type="date" name="endtime">
<input type="submit" value="提交">
</form>
<?php

echo date("Y/m/d");
?>