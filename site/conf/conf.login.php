<?PHP
// *****************************************************************************
// This program is part of MyWISE - My Wiki Inside Site Engine
//
// See LICENSE.md in the project root for license information.
// *****************************************************************************
global $WISE_LOGIN_DEFAULT;
$WISE_LOGIN_DEFAULT = "N"; // by default, check login?

global $WISE_LOGIN_EXCLUDE_GROUPS;
$WISE_LOGIN_EXCLUDE_GROUPS = array(
    array(
        "group" => "Digest",
        "type" => "Admin"
    )
);

global $WISE_LOGIN_PASSWORD;
$WISE_LOGIN_PASSWORD = "25582899";

global $WISE_LOGIN_LOGOUT_GROUP;
global $WISE_LOGIN_LOGOUT_TYPE;
global $WISE_LOGIN_LOGOUT_PAGE;
$WISE_LOGIN_LOGOUT_GROUP = ""; // group to go to after logout
$WISE_LOGIN_LOGOUT_TYPE = "Admin"; // type to go to after logout
$WISE_LOGIN_LOGOUT_PAGE = ""; // page to go to after logout

// display
global $WIKI_TAG_LOGOUT_TEXT;
global $WIKI_TAG_LOGIN_TEXT;
global $WIKI_TAG_PASSWORD_TEXT;
global $WISE_LOGIN_PAGE_TITLE;

$WIKI_TAG_LOGOUT_TEXT = "Logout";
$WIKI_TAG_LOGIN_TEXT = "Login";
$WIKI_TAG_PASSWORD_TEXT = "Password: ";
$WISE_LOGIN_PAGE_TITLE = "Login Required";

global $WISE_LOGIN_HASHSEED;
global $WISE_LOGIN_COOKIE;
$WISE_LOGIN_HASHSEED = "C8oGiT14e66B4qX9i7aY";
$WISE_LOGIN_COOKIE = "626XuR8Bc0Xym1yUlCWY1";

global $WISE_LOGIN_COMMAND;
global $WISE_LOGIN_CMD_LOGIN;
global $WISE_LOGIN_CMD_LOGOUT;
$WISE_LOGIN_COMMAND = "Ci9L9eI2V9XSOZoK188B1";
$WISE_LOGIN_CMD_LOGIN = "L9eoI2V9XSOZCi9K188B1";
$WISE_LOGIN_CMD_LOGOUT = "2V9XSOZoK188B1Ci9L9eI";

global $WISE_LOGIN_FIELD_PASSWORD;
$WISE_LOGIN_FIELD_PASSWORD = "1yUlCWY1R626Xuc0Xym8B";

?>