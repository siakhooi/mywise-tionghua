<?PHP
// *****************************************************************************
// This program is part of MyWISE - My Wiki Inside Site Engine
//
// See LICENSE.md in the project root for license information.
// *****************************************************************************
global $WIKI_TAG_INTERNAL_LINK_TYPES;
global $WIKI_TAG_INTERNAL_LINK_STYLE_PREFIX;

$WIKI_TAG_INTERNAL_LINK_STYLE_PREFIX="user-link";

$WIKI_TAG_INTERNAL_LINK_TYPES=array(
//     array("tag"=>"img", "mode"=>"img", "group"=>"",     "type"=>"",       "style"=>"icon"),
//     array("tag"=>"m",   "mode"=>"",    "group"=>"Wise", "type"=>"Manual", "style"=>"manual"),
   array("tag"=>"p",   "mode"=>"",    "group"=>"",     "type"=>"人物",     "style"=>"people"),
   array("tag"=>"ni",  "mode"=>"",    "group"=>"",     "type"=>"人物",     "style"=>"nickname"),
   array("tag"=>"tt",  "mode"=>"",    "group"=>"",     "type"=>"人物",     "style"=>"position"),
   array("tag"=>"qt",  "mode"=>"",    "group"=>"",     "type"=>"典故",     "style"=>"quotation"),
   array("tag"=>"cp",  "mode"=>"",    "group"=>"",     "type"=>"章回",     "style"=>"chapter"),
);
?>