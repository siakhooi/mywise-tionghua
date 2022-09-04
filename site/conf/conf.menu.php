<?PHP
// *****************************************************************************
// This program is part of MyWISE - My Wiki Inside Site Engine
//
// See LICENSE.md in the project root for license information.
// *****************************************************************************
global $WISE_MENU_TYPE_LINK;
global $WISE_MENU_TYPE_CAT;

global $WISE_MENU_SHOW;
$WISE_MENU_SHOW="N";

//   $t=array(
// 		array("menutype"=>$WISE_MENU_TYPE_LINK, "label"=>"Welcome", "group"=>"Website", "type"=>"Page", "page"=>"Welcome"),
// 		array("menutype"=>$WISE_MENU_TYPE_CAT,	"label"=>"Website", "value"=>array(
// 			array("menutype"=>$WISE_MENU_TYPE_LINK, "label"=>"Welcome", "group"=>"Website", "type"=>"Page", "page"=>"Welcome"),
// 		)),
//   );

global $WISE_MENU_SITE;
//  $WISE_MENU_SITE=$t;

global $WISE_MENU_GROUP;
$WISE_MENU_GROUP=array(
//     array("group"=>"Layout", "menutree"=>$t2),
);

// need to have <DIV id="wise-menu-custom-id"></DIV> 
//id must be prefixed with wise-menu-custom
// or use wiki tag: {{menu:id}} // no need to add wise-menu-custom
global $WISE_MENU_CUSTOM;
$WISE_MENU_CUSTOM=array(
//     array("id"=>"Wise", "menutree"=>$WISE_MENU_SITE_TREE),
);

//format array of array(id, array(menutrees)
global $WISE_SITEMAP;
$WISE_SITEMAP=array(
//    array("id"=>"all", "menutrees"=>array($WISE_MENU_SITE))
);
?>