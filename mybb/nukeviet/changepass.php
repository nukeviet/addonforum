<?php

/**
 * @Project NUKEVIET 3.0
 * @Author VINADES.,JSC (contact@vinades.vn)
 * @Copyright (C) 2010 VINADES.,JSC. All rights reserved
 * @Createdate 14/7/2010, 2:34
 */

if ( ! defined( 'NV_IS_MOD_USER' ) ) die( 'Stop!!!' );

if ( file_exists( NV_ROOTDIR . '/' . DIR_FORUM . '/usercp.php' ) )
{
    Header( "Location: " . $global_config['site_url'] . "/" . DIR_FORUM . "/usercp.php?action=password" );
    die();
}
else
{
    trigger_error( "Error no forum mybb", 256 );
}

?>