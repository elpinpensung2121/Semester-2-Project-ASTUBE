<?php
              $produk=  mysql_query("select * from video ");
              $num_fields = mysql_num_fields($produk);
                $j=0;
                $x=1;
              while($row=mysql_fetch_array($produk)){
                  for($j=0;$j<$num_fields;$j++){
                $name = mysql_field_name($produk, $j);
                $object[$x][$name]=$row[$name];
                }$x++;}
               $i=1;
               $ii=count($object);        //quick access function
               for($i=1;$i<=$ii;$i++){
                   $satua=$object[1]['gambar']; $duaa=$object[2]['gambar'];
                   $tigaa=$object[3]['gambar']; $empata=$object[4]['gambar'];
                   $limaa=$object[5]['gambar']; $enama=$object[6]['gambar'];
                   $tujuha=$object[7]['gambar']; $lapana=$object[8]['gambar'];
                   $sembilana=$object[9]['gambar']; 
               }  
              ?>
