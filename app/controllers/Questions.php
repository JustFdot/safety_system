<?php

class Questions extends Controller{

    public function index(){
        $qObj = new Question;
        $path = public_path().'/uploads/public/questions.csv';
        $line = 0;
        $num = 1;
        $qid = 1;
        if(($handle = fopen($path, "r")) !== FALSE){
            while(($data = fgetcsv($handle, 1000, ";")) !== FALSE){
                if($line == 0){
                    //$res[$num]['q'] = $data[0];
                    DB::table('questions')->insert(array(
                        'category' => 1,
                        'advance' => 3,
                        'group' => 1,
                        'item' => $num,
                        'text' => $data[0],
                        'info' => null
                    ));
                }else{
                    //$res[$num]['a'][] = array('text' => $data[0], 'iscorrect' => $data[1]);
                    DB::table('answers')->insert(array(
                        'group_id' => 1,
                        'question_id' => $qid,
                        'item' => $line,
                        'text' => $data[0],
                        'iscorrect' => $data[1]
                    ));
                }
                if($line++ == 5){
                    $num++;
                    $qid++;
                    $line = 0;
                }
            }
            fclose($handle);
        }
    }

}