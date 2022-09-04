<?PHP
	#$TO;
	#$grp;

$FROM=0;
	$t_cp='章回';
	$t_pp='人物';

	set_time_limit ( 60 * 10 ); //in seconds
	function html(){
		echo "<HTML>";
		echo "<HEAD>";
		echo "<META http-equiv=\"content-type\" content=\"text/html; charset=GB2312\"> ";
	}
	function title($t){
		echo "<TITLE>$t</TITLE>";
	}
	function body(){
		echo "</HEAD><BODY>";
	}
	function _html(){
		echo "</BODY>";
		echo "</HTML>";
	}
	function pr($s){ echo "$s<BR />"; }
	
	html(); body();
	
	for($i=$FROM;$i<=$TO;$i++){
		$cp=substr("000$i",  -3);	
		$path='site/wiki/'.$grp.'/'.$t_cp.'/'.$cp;
		$p='site/wiki/'.$grp.'/'.$t_pp.'/';
		
		$CR="\r\n";
		if(!file_exists ( $path )){
			echo "$path Not Exist.";
			_html();
			exit;
		}
		pr("process: $path");		
		$s=file_get_contents($path);
	
		preg_match_all('/\\[\\[p:([^|]*?\\]?)\\]\\]/', $s, $m1a);
		preg_match_all('/\\[\\[p:([^|\\]]*?)(\\|)[^|]*?\\]\\]/', $s, $m1b);
		preg_match_all('/\\[\\[ni:([^|]*?\\]?)\\]\\]/', $s, $m1c);
		preg_match_all('/\\[\\[ni:([^|\\]]*?)(\\|)[^|]*?\\]\\]/', $s, $m1d);
		preg_match_all('/\\[\\[tt:([^|]*?\\]?)\\]\\]/', $s, $m1e);
		preg_match_all('/\\[\\[tt:([^|\\]]*?)(\\|)[^|]*?\\]\\]/', $s, $m1f);
		
		$ma= array_merge($m1a[1], $m1b[1], $m1c[1], $m1d[1], $m1e[1], $m1f[1]);
		$m2=array_unique($ma);
		foreach($m2 as $m){
			$f1=$p.$m;
			if(!file_exists($f1)) {
				pr("create file: $f1");
				touch($f1);
			}
 			$s="* [[cp:$cp|#]]".$CR;
 			file_put_contents($f1, $s, FILE_APPEND);
			flush();
		}
	}
	pr("Done!");
	_html();	
?>