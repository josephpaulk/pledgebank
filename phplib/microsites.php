<?php
/*
 * microsites.php:
 * Microsites are special sub-sites for Glastonbury festival etc.
 * 
 * Copyright (c) 2005 UK Citizens Online Democracy. All rights reserved.
 * Email: francis@mysociety.org; WWW: http://www.mysociety.org/
 *
 * $Id: microsites.php,v 1.2 2005-10-14 12:43:32 francis Exp $
 * 
 */

$microsites_list = array('glastonbury' => 'Glastonbury',
                         '365ways' => '365 Ways',
                         'interface' => 'Interface');

/* microsites_get_name 
 * Returns display name of microsite if we are on one. e.g. Glastonbury */
function microsites_get_name() {
    global $microsite, $microsites_list;
    if (array_key_exists($microsite, $microsites_list))
        return $microsites_list[$microsite];
    return null;
}



?>