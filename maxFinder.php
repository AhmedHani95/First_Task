<?php
if(isset($_POST['array'])){
    $A=explode(',',$_POST['array']);
    $M=max($A);
    $maxKey=solution($M,$A);
    setcookie("key",$maxKey,time() + 1800,'/');
    ?>
    <script>
    window.location='index.php';
    </script>
    <?php
}
    function solution($M, $A){
        $countArray = array_fill(0,$M+1,NULL);     
        $maxKey=0;$maxValue=0;
        foreach ($A as $value) {
            $countArray[$value]+=1;
            if ($countArray[$value]>=$maxValue) {
                $maxValue = max($countArray);
                $maxKey=  $value;
            }     
        }
        return $maxKey;
    }

?>