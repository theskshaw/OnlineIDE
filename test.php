<?php

$code='//Write your code here
class important
{
    public static void main(String args[]){
        System.out.println("Hello World 2");
    }
}';
$temp= explode("\n",$code);
echo $temp[0];
$classname="N_O_T_F_O_U_N_D";
for($i=0;$i<count($temp)-1;$i++)
{	
	$tt=explode(" ", $temp[$i]);
	if($tt[0]=="class"){
		
		if(count($tt)>1)
			$classname=$tt[1];
		break;
	}
}
echo $classname;
?>