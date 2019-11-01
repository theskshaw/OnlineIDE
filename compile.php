<?php

    $value=$_POST['code'];
    $cookie_code=$value;
    setcookie('code', $cookie_code, time() + (86400 * 30), "/");
    $input=$_POST['input'];
    setcookie('input', $input, time() + (86400 * 30), "/");
    // echo $value;
    // $lang=$_POST['myLang'];

    $lang=$_POST['lang'];
    if($lang=="java"){
        $file=fopen("test.java","w");
        fwrite($file,$value);
        fclose($file);

        $file=fopen("input.txt","w");
        fwrite($file,$input);
        fclose($file);

        $cstatus= shell_exec("javac test.java 2>&1");
        // echo $cstatus;
        if($cstatus=="")
        {   
            $date1 = time();

            
            $result=shell_exec("java test.java 2>&1 <input.txt >output.txt");
            if($result==null)
            {   
                $myfile=fopen("output.txt","r");
                $output="";
                while(!feof($myfile)) {
                    $output=$output . fgets($myfile) ;
                }
                //echo $output;
                $date2 = time();
                $secs=$date2-$date1;
                echo json_encode(array('success' => 1,'cstatus' => $cstatus,'output' => $output,'time'=>$secs));
            }
            else{
                echo json_encode(array('success' => 1,'cstatus' => $cstatus,'output' => $result));
            }

        }
        else{
            echo json_encode(array('success' => 0,'cstatus'=>$cstatus));
        }

    }
    elseif ($lang=="cpp" or $lang=="c") {
        $file=fopen("test.cpp","w");
        fwrite($file,$value);
        fclose($file);

        $file=fopen("input.txt","w");
        fwrite($file,$input);
        fclose($file);

        $cstatus= shell_exec("g++ test.cpp 2>&1");
        // echo $cstatus;
        if($cstatus=="")
        {   
            $date1 = time();

            
            $result=shell_exec("a.exe 2>&1 <input.txt >output.txt");
            if($result==null)
            {   
                $myfile=fopen("output.txt","r");
                $output="";
                while(!feof($myfile)) {
                    $output=$output . fgets($myfile) ;
                }
                //echo $output;
                $date2 = time();
                $secs=$date2-$date1;
                echo json_encode(array('success' => 1,'cstatus' => $cstatus,'output' => $output,'time'=>$secs));
            }
            else{
                echo json_encode(array('success' => 1,'cstatus' => $cstatus,'output' => $result));
            }

        }
        else{
            echo json_encode(array('success' => 0,'cstatus'=>$cstatus));
        }
        # code...
    }
    elseif ($lang=="py") {
        $file=fopen("test.py","w");
        fwrite($file,$value);
        fclose($file);

        $file=fopen("input.txt","w");
        fwrite($file,$input);
        fclose($file);

        $cstatus= "";
        // echo $cstatus;
        if($cstatus=="" )
        {   
            $date1 = time();

            
            $result=shell_exec("python test.py 2>&1 <input.txt >output.txt");
            if($result==null)
            {   
                $myfile=fopen("output.txt","r");
                $output="";
                while(!feof($myfile)) {
                    $output=$output . fgets($myfile) ;
                }
                //echo $output;
                $date2 = time();
                $secs=$date2-$date1;
                echo json_encode(array('success' => 1,'cstatus' => $cstatus,'output' => $output,'time'=>$secs));
            }
            else{
                echo json_encode(array('success' => 1,'cstatus' => $cstatus,'output' => $result));
            }

        }
        else{
            echo json_encode(array('success' => 0,'cstatus'=>$cstatus));
        }
        # code...
    }
    // $file=fopen("test.java","w");
    // fwrite($file,$value);
    // fclose($file);

    // $file=fopen("input.txt","w");
    // fwrite($file,$input);
    // fclose($file);

    // $cstatus= shell_exec("javac test.java 2>&1");
    // // echo $cstatus;
    // if($cstatus=="")
    // {   
    //     $date1 = time();

        
    //     $result=shell_exec("java test.java 2>&1 <input.txt >output.txt");
    //     if($result==null)
    //     {   
    //         $myfile=fopen("output.txt","r");
    //         $output="";
    //         while(!feof($myfile)) {
    //             $output=$output . fgets($myfile) ;
    //         }
    //         //echo $output;
    //         $date2 = time();
    //         $secs=$date2-$date1;
    //         echo json_encode(array('success' => 1,'cstatus' => $cstatus,'output' => $output,'time'=>$secs));
    //     }
    //     else{
    //         echo json_encode(array('success' => 1,'cstatus' => $cstatus,'output' => $result));
    //     }

    // }
    // else{
    //     echo json_encode(array('success' => 0,'cstatus'=>$cstatus));
    // }
    
?>