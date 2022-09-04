<?PHP
  global $NAVIGATOR_FIRST_PAGE, $NAVIGATOR_NEXT_PAGE;
  global $NAVIGATOR_PREV_PAGE, $NAVIGATOR_LAST_PAGE;
  $NAVIGATOR_FIRST_PAGE='第一頁';
  $NAVIGATOR_NEXT_PAGE='下一頁';
  $NAVIGATOR_PREV_PAGE='上一頁';
  $NAVIGATOR_LAST_PAGE='最後一頁';
  
  global $NAVIGATOR_REFERENCE;
  $NAVIGATOR_REFERENCE=array(
    array("group"=>"三國演義", "first"=>0, "last"=>120, "length"=>3),
    array("group"=>"水滸傳", "first"=>0, "last"=>120, "length"=>3),
    array("group"=>"西遊記", "first"=>0, "last"=>100, "length"=>3),
    array("group"=>"紅樓夢", "first"=>0, "last"=>120, "length"=>3)
  );
  
?>