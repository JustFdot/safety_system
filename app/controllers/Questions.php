<?php

class Questions extends Controller{

    public function index(){
        $group_id = 1;
        $query = DB::table('questions')->select(array('id', 'group_id', 'text'))->where('group_id', $group_id)->get();

        foreach ($query as $value) {
            $result[$value->id] = (array) $value;
        }

        $query = DB::table('answers')->select('id', 'question_id', 'text')->where('group_id', $group_id)->get();

        foreach ($query as $value) {
            $result[$value->question_id]['answers'][] = $value;
        }
        echo '<pre>', print_r($result), '</pre>';
    }

}