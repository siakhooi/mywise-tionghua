<?PHP
// *****************************************************************************
// This program is part of MyWISE - My Wiki Inside Site Engine
//
// See LICENSE.md in the project root for license information.
// *****************************************************************************

global $WISE_URL_STYLE;
  
if(wise_isLocalhost())
//Original Ugly style of md=xx&gr=yy&ty=zz&pg=oo
$WISE_URL_STYLE="wise-original";
else
//You need .htaccess to turn on this
$WISE_URL_STYLE="wise-default";

global $WISE_URL_DO_ENCODE;
$WISE_URL_DO_ENCODE="Y";
?>