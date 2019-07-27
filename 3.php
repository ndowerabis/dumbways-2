<?phpfunction prima($p_kolom, $p_baris){
	$kolom=1;
	$baris=1;
    
      for($i=1;$baris<=$p_baris;$i++){  //smw angka yg akan di cek  
			$counter = 0; 
              for($j=1;$j<=$i;$j++){ //smw kemungkinan faktor pembagi                  
                    //jika angka yg akan dicek habis dibagi faktor pembagi, counter nya +1
                    if($i % $j==0){                         
                          $counter++;
                    }
              }            
           //jumlah warna hijau / faktor habis bagi nya harus 2 
            if($counter==2){ 
				$kolom++;
                   print $i.",";
				if ($kolom>$p_kolom){
					$kolom=1;
					$baris++;
					print '<br>';
				};
      }
  }
} 

prima(4,3);  //cari bilang prima dari 1-20