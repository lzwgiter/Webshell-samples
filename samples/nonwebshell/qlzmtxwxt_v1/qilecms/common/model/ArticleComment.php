<?php
namespace app\common\model;
use think\Model;
class ArticleComment extends Base
{
   protected $autoCheckFields = true;

   public function del($comment_id){
      if(is_array($comment_id)){
           $comment_id_data = implode(',',$comment_id);
      }else{
          $comment_id_data =$comment_id;  
      }

      $res = $this->where("comment_id",'in',$comment_id_data)->delete();
        if($res){
           return true;
        }else{
           return false;
        }

   }
  public function edit($commentId,$data=[]){

     $where['comment_id'] = $commentId;
    return $res = $this->where($where)->update($data);
 
  
  }
}
