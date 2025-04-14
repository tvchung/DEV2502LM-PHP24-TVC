<?php 
    class PhepTinh{
        // Phương thức
        function tinhTong($arrayParam){
            if(is_array($arrayParam)){
                $tong=0;
                foreach($arrayParam as $item){
                    $tong +=$item;
                }

                echo "<h2> $tong";
            }
            else
                echo $arrayParam;
        }
    }

    $arr = [10,20,30,40];
    $pt = new PhepTinh();
    $pt->tinhTong($arr);

    echo "<hr/>";
    $arr = "Devmaster";
    $pt->tinhTong($arr);

?>