<?php
    require('dane.php');
    session_start();
    $pol = new mysqli($host, $uzytkownik, $haslodob, $baza);
   
        
    $e= array();
    $_SESSION['pkt']=0;
    $_SESSION['dane']="pyt1";
    $_SESSION['kt']=1;
    $dan="pyt1";
    $kt=1;
    if(isset($_SESSION['sql'])){
            $sql1="SELECT id FROM `pytania` where typ='sql'";
            $wynik1=$pol->query($sql1);
            while($wiersz1=$wynik1->fetch_row()){
                $e[]=$wiersz1[0];
            }
            unset($_SESSION['sql']);
          
        }
        if(isset($_SESSION['c++'])){
            $sql2="SELECT id FROM `pytania` where typ='c++'";
            $wynik2=$pol->query($sql2);
            while($wiersz2=$wynik2->fetch_row()){
                $e[]=$wiersz2[0];
            }
            unset($_SESSION['c++']);
           
        }
        if(isset($_SESSION['php'])){
            $sql3="SELECT id FROM `pytania` where typ='php'";
            $wynik3=$pol->query($sql3);
            while($wiersz3=$wynik3->fetch_row()){
                $e[]=$wiersz3[0];
            }
            unset($_SESSION['php']);
               
           }
           if(isset($_SESSION['html'])){
            $sql4="SELECT id FROM `pytania` where typ='html'";
            $wynik4=$pol->query($sql4);
            while($wiersz4=$wynik4->fetch_row()){
                $e[]=$wiersz4[0];
            }
            unset($_SESSION['html']);

               
               
               
           }
           if(isset($_SESSION['js'])){
            $sql5="SELECT id FROM `pytania` where typ='js'";
            $wynik5=$pol->query($sql5);
            while($wiersz5=$wynik5->fetch_row()){
                $e[]=$wiersz5[0];
            }
            unset($_SESSION['js']);
               
           }
        shuffle($e);
        for($i=1;$i<42;$i++){
            $ses="pyt$i";
            $_SESSION[$ses]="$e[$i]";
            
        }
       
    
    
            
           
        

                
      
            
          

header('location: check.php');

            ?>
