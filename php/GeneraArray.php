<?php       
class GeneraArray
{
    public function  __construct ($dire)  //declaramos constructor 
    {
    $this->A=$dire;
    }

    public function Num_Colum ($Dato)
    {
        $ABC='ABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $ABTAM=strlen ($ABC);
        $Dat_size=strlen($Dato);
       // echo $Dato;
        //echo $Dat_size;
        $asi="AA";
        $res=0;

        if ($Dat_size==1)
        {
            for ($j=0 ; $j<=$ABTAM ; $j++)
            {
                $res ++;
              if ($ABC[ $j ] == $Dato)
              { 
                 break;  
              }
             
            }
        }
        else {$res=$ABTAM;
            for ( $i=0 ; $i <= $ABTAM ; $i ++)
            {
                for ($j=0; $j<=$ABTAM ; $j++)
                {    $res ++;
                    $asi="AA";
                    $asi=$ABC[$i].$ABC[$j];
                    if ($asi==$Dato)
                    {
                    $sal=12;
                    break; 
                    }
                   
                }if ($sal==12) break;
            }
        }
               

















               /* if ($Dat_size>2){
                    $res=$ABTAM;
                }

        $sal=0;
            for ( $i=-1 ; $i <= $ABTAM ; $i ++)
            {
                if ($i==-1 && $Dat_size==1)
                {
                    for ($j=0 ; $j<=$ABTAM ; $j++)
                    {
                        $res ++;
                    if ($ABC[$j] == $Dato)
                    { 
                        $sal=12;
                        break;  
                    }
                    
                    }
                }
            
            else{  
                    for ($j=0; $j<=$ABTAM ; $j++)
                    {   $asi="AA";
                        $asi=$ABC[$i].$ABC[$j];
                        if ($asi==$Dato)
                        {
                        $sal=12;
                        break; 
                        }
                        $res ++;
                    }
                }
                    if ($sal==12)
                    {
                        break;
                    }
                    
                
            }*/













        return $res;

    } 

}


?>