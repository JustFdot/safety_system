<?php 
class Cms54e109b899ff8_2196209204Class extends \Cms\Classes\PageCode
{
public function onStart(){
/*   $this->question = new Question;
    $this->question->ids = $this->question->get_ids();
    shuffle($this->question->ids);
    $this->question->category = (int) post('category');

    Session::put('training_qObj', $this->question);
    $this->onGetNext();
*/

    $ids = Question::get_ids();
    shuffle($ids);
    $this['category'] = (int) post('category');
    $this['result'] = $this->onGetNext(array_shift($ids), $this['category']);
    $this['ids'] = implode(',', $ids);
}
/*function onGetNext(){
    $qObj = $this->question ? $this->question : Session::get('training_qObj');
    return $this['result'] = $qObj->get_one(array_shift($qObj->ids), $qObj->category);
}
*/
public function onGetNext($id = null, $category = null){
    $id = $id ? $id : (int) post('id');
    $category = $category ? $category : (int) post('category');
    return $this['result'] = Question::get_one($id, $category);
}
public function onCheckAnswer(){
    return Question::check_answer((int) post('id'));
}

}
