<?php 
class Cms54d1295ec2f75_575320581Class extends \Cms\Classes\PageCode
{
public function onStart(){
    //Запилить выброс ошибок, если нет данных
    //Flash::success('dsadasd');
    $this['result'] = Question::get_all((int) post('category'), (int) post('advance'));
}
public function onCheckAnswer(){
    return Question::check_answer(
        (int) post('question_id'),
        (int) post('item')
    );
}

}
