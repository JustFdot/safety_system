<?php 
class Cms54d0dbf199c03_3469606407Class extends \Cms\Classes\PageCode
{
public function onStart(){
    $this['users'] = DB::table('users')->select('name', 'email')->get();
    $this['backurl'] = post('backurl');
}

}
