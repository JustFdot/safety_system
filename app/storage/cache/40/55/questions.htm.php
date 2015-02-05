<?php 
class Cms54d1610797b58_2232226227Class extends \Cms\Classes\PageCode
{
public function onStart(){
    $ids = Question::get_ids();
    shuffle($ids);
    $this['result'] = $this->onGetNext(array_shift($ids));
    $this['ids'] = $ids;
}
public function onGetNext($id = null){
    $id = $id ? $id : post($id);
    return $this['result'] = Question::get_one($id);
}
public function onCheckAnswer(){
    return Question::check_answer(
        (int) post('question_id'),
        (int) post('item')
    );
}

}
