<?PHP
// *****************************************************************************
// This program is part of MyWISE - My Wiki Inside Site Engine
//
// See LICENSE.md in the project root for license information.
// *****************************************************************************
global $WIKI_TAG_EXTERNAL_LINK_TYPES;
global $WIKI_TAG_EXTERNAL_LINK_STYLE_PREFIX;

$WIKI_TAG_EXTERNAL_LINK_STYLE_PREFIX="user-external-link";
$WIKI_TAG_EXTERNAL_LINK_TYPES=array(
  array("tag"=>"ln", "style"=>"", "prefix"=>""),
  array("tag"=>"wk", "style"=>"wikipedia", "prefix"=>"http://zh.wikipedia.org/wiki/", "label-prefix"=>""),
  array("tag"=>"hd", "style"=>"hudong", "prefix"=>"http://www.hudong.com/wiki/", "label-prefix"=>""),
);
?>