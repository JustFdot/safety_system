<?php
class Question extends Model{

    protected $table = 'questions';

    public $ids;

    public static function get_all($category_id, $advance_id){
        $group_id = 1; //rand(1, 10);
        $query = DB::table('questions')->select('id', 'group', 'item', 'text')->where(array('group' =>  $group_id, 'category' => $category_id, 'advance' => $advance_id))->get();

        foreach ($query as $value) {
            $result[$value->id] = (array) $value;
        }

        $query = DB::table('answers')->select('id', 'question_id', 'item', 'text')->where('group_id', $group_id)->get();

        foreach ($query as $value) {
            $result[$value->question_id]['answers'][] = $value;
        }
        return $result;
    }

    public static function get_one($id, $category_id){
        $id = is_array($id) ? (int) head($id) : (int) $id;
        $query = DB::table('questions')->select('id', 'group', 'item', 'text')->where(array('id' => $id, 'category' => $category_id))->first();

        $result[$query->id] = (array) $query;

        $query = DB::table('answers')->select('id', 'question_id', 'item', 'text')->where('question_id', $id)->get();

        foreach ($query as $value) {
            $result[$value->question_id]['answers'][] = $value;
        }
        return $result;
    }

    public static function get_ids(){
        return DB::table('questions')->lists('id');
    }

    public static function check_answer($id){
        $query = DB::table('answers')->select('iscorrect')->where('id', $id)->first();
        return ['iscorrect' => (bool) $query->iscorrect];
    }

}