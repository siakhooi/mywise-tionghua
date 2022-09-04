<?PHP
// *****************************************************************************
// This program is part of MyWISE - My Wiki Inside Site Engine
//
// See LICENSE.md in the project root for license information.
// *****************************************************************************
global $WIKI_TAG_FIELDSET_TYPES_WIKI;
global $WIKI_TAG_FIELDSET_TYPES_WIKI;
global $WIKI_TAG_FIELDSET_TYPES_PRE;
global $WIKI_TAG_FIELDSET_STYLE_PREFIX;

$WIKI_TAG_FIELDSET_STYLE_PREFIX="user-fieldset";
$WIKI_TAG_FIELDSET_TYPES_WIKI=array(
   array("tag"=>"o", "style"=>"original-text", "title"=>"原文"),
   array("tag"=>"r", "style"=>"reference", "title"=>"外部鏈接"),
   array("tag"=>"ps", "style"=>"post-script", "title"=>"站長按："),
);
$WIKI_TAG_FIELDSET_TYPES_PRE=array(
   array("tag"=>"w",    "style"=>"wiki", "title"=>"標示方式"),
);

?>