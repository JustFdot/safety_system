<?php 
class Cms54e06e8400e64_2019630973Class extends \Cms\Classes\PageCode
{
public function onStart(){
    $this['users'] = DB::table('users')->select('name', 'email')->get();
    $this['backurl'] = post('backurl');
}

}
