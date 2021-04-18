<?php

$input= $_POST['angka'];
if($input=='0'){
    echo "nol";
}elseif($input=='1'){
    echo "satu";
}elseif($input=='2'){
    echo "dua";
}elseif($input=='3'){
    echo "tiga";
}elseif($input=='4'){
    echo "empat";
}elseif($input=='5'){
    echo "lima";
}elseif($input=='6'){
    echo "enam";
}elseif($input=='7'){
    echo "tujuh";
}elseif($input=='8'){
    echo "delapan";
}elseif($input=='9'){
    echo "sembilan";
}
?>


<html>
    <head>
        <title>menentukan penyebutan bilangan</title>
    </head>
    <body>
        <form name="form1" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
            <label>Angka : <input type="text" name="angka" /></label>
            <label><input type="submit" name="button" value="Submit" /></label>
        </form>
<?php
if(isset($_POST['button'])){
    $angka= $_POST['angka'];
    $panjang_karakter=strlen($_POST['angka']);
    function sebut_bilangan($bilanganke,$angka){
        if(substr($angka, $bilanganke, 1)=='0' && $bilanganke=='0'){
            echo "nol";
        }elseif(substr($angka, $bilanganke, 1)=='1'){
            echo "satu";
        }elseif(substr($angka, $bilanganke, 1)=='2'){
            echo "dua";
        }elseif(substr($angka, $bilanganke, 1)=='3'){
            echo "tiga";
        }elseif(substr($angka, $bilanganke, 1)=='4'){
            echo "empat";
        }elseif(substr($angka, $bilanganke, 1)=='5'){
            echo "lima";
        }elseif(substr($angka, $bilanganke, 1)=='6'){
            echo "enam";
        }elseif(substr($angka, $bilanganke, 1)=='7'){
            echo "tujuh";
        }elseif(substr($angka, $bilanganke, 1)=='8'){
            echo "delapan";
        }elseif(substr($angka, $bilanganke, 1)=='9'){
            echo "sembilan";
        }
    }
    if($panjang_karakter==1){
        sebut_bilangan(0,$angka);
    }elseif($panjang_karakter>=2){
        if($panjang_karakter>=4){
            if(substr($angka,($panjang_karakter-4), 1)!=1){
                sebut_bilangan(($panjang_karakter-4),$angka);
                echo "ribu";
            }else{
                echo "seribu";
            }
        }
        if($panjang_karakter>=3){
            if(substr($angka,($panjang_karakter-3), 1)>1){
                sebut_bilangan(($panjang_karakter-3),$angka);
                echo "ratus";
            }elseif(substr($angka,($panjang_karakter-3), 1)==1){
                echo "seratus";
            }
        }
        if(substr($angka,($panjang_karakter-2),1)>1){
            sebut_bilangan(($panjang_karakter-2),$angka);
            echo " puluh ";
            sebut_bilangan(($panjang_karakter-1),$angka);
        
        }elseif(substr($angka,($panjang_karakter-2),1)==1 && (substr($angka,($panjang_karakter-1),1)!=1 && substr($angka,($panjang_karakter-1),1)!=0)){
            sebut_bilangan(($panjang_karakter-1),$angka);
            echo " belas";
        }elseif(substr($angka,($panjang_karakter-2),2)==11){
            echo "sebelas";
        }elseif(substr($angka,($panjang_karakter-2),2)==10){
            echo "sepuluh";
        }elseif(substr($angka,($panjang_karakter-2),1)<1){
            sebut_bilangan(($panjang_karakter-1),$angka);
        }
    }
}
?>
    </body>
</html>