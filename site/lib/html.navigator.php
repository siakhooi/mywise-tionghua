<?PHP
  
  function generateNavigator($group, $type, $page){
	  global $NAVIGATOR_FIRST_PAGE, $NAVIGATOR_NEXT_PAGE;
	  global $NAVIGATOR_PREV_PAGE, $NAVIGATOR_LAST_PAGE;
	  global $NAVIGATOR_REFERENCE;
    global $NAVIGATOR_TEXT;
    
    $first=0;
    $last=0;
    $length=1;
	  foreach($NAVIGATOR_REFERENCE as $st){
		  $t=$st['group'];
		  if($group==$t) {
			  $first=$st["first"];
			  $last=$st["last"];
			  $length=$st["length"];
			  break;
		  }
	  }
    
    $NAVIGATOR_TEXT="<DIV class='navigator'>";
	  
	  $NAVIGATOR_TEXT.=" ";
	  if($page==$first){
  	  $NAVIGATOR_TEXT.=getNavigatorLabel($NAVIGATOR_FIRST_PAGE);
  	  $NAVIGATOR_TEXT.=" ";
  	  $NAVIGATOR_TEXT.=getNavigatorLabel($NAVIGATOR_PREV_PAGE);
	  }else{
 	    $NAVIGATOR_TEXT.=getNavigatorLink($group, $type, getChapterFileName($first, $length), $NAVIGATOR_FIRST_PAGE);
  	  $NAVIGATOR_TEXT.=" ";
		  $NAVIGATOR_TEXT.=getNavigatorLink($group, $type, getChapterFileName($page-1, $length), $NAVIGATOR_PREV_PAGE);
	  }
	  $NAVIGATOR_TEXT.=" ";
	  if($page==$last){
  	  $NAVIGATOR_TEXT.=getNavigatorLabel($NAVIGATOR_NEXT_PAGE);
  	  $NAVIGATOR_TEXT.=" ";
		  $NAVIGATOR_TEXT.=getNavigatorLabel($NAVIGATOR_LAST_PAGE);
    }else{
		  $NAVIGATOR_TEXT.=getNavigatorLink($group, $type, getChapterFileName($page+1, $length), $NAVIGATOR_NEXT_PAGE);
  	  $NAVIGATOR_TEXT.=" ";
		  $NAVIGATOR_TEXT.=getNavigatorLink($group, $type, getChapterFileName($last, $length), $NAVIGATOR_LAST_PAGE);
	  }
    $NAVIGATOR_TEXT.="</DIV>";
  }
  
  function getNavigatorLabel($label){
	  return "<SPAN class='navigator'>$label</SPAN>";
  }
  function getNavigatorLink($group, $type, $page, $label){
	  $url=wise_getWikiURL($group, $type, $page);
	  return "<SPAN class='navigator'><A HREF='$url' class='navigator'>$label</A></SPAN>";
  }
	function getChapterFileName($n, $length){
		return substr("000$n",  -$length);
	}
	function navigator_show(){
		global $NAVIGATOR_TEXT;
		echo $NAVIGATOR_TEXT;
	}
  global $NAVIGATOR_TEXT;
  $NAVIGATOR_TEXT="";
  $gr=wise_getGroup();
  $ty=wise_getType();
  $pg=wise_getPage();
  if($ty=='章回' || $ty=='Chapter') generateNavigator($gr, $ty, $pg);
?>