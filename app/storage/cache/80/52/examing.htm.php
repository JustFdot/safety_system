<?php 
class Cms54e32543d55eb_1104722774Class extends \Cms\Classes\PageCode
{
public function onStart(){
    //Запилить выброс ошибок, если нет данных
    //Flash::success('dsadasd');
    $this['result'] = Question::get_all((int) post('category'), (int) post('advance'));
}
public function onCheckAnswer(){
    return Question::check_answer((int) post('id'));
}

}
