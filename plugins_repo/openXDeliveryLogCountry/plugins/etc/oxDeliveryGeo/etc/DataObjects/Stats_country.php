<?php

/*
+---------------------------------------------------------------------------+
| Revive Adserver                                                           |
| http://www.revive-adserver.com                                            |
|                                                                           |
| Copyright: See the COPYRIGHT.txt file.                                    |
| License: GPLv2 or later, see the LICENSE.txt file.                        |
+---------------------------------------------------------------------------+
*/

/**
 * Table Definition for stats_country
 */
require_once MAX_PATH.'/lib/max/Dal/DataObjects/DB_DataObjectCommon.php';

class DataObjects_Stats_country extends DB_DataObjectCommon
{
    ###START_AUTOCODE
    /* the code below is auto generated do not remove the above tag */

    public $__table = 'stats_country';                   // table name
    public $stats_country_id;                // BIGINT(20) => openads_bigint => 129
    public $date_time;                       // DATETIME() => openads_datetime => 142
    public $operation_interval;              // INT(10) => openads_int => 129
    public $creative_id;                     // INT(10) => openads_int => 129
    public $zone_id;                         // INT(10) => openads_int => 129
    public $impressions;                     // INT(10) => openads_int => 129
    public $clicks;                          // INT(10) => openads_int => 129
    public $country;                         // CHAR(3) => openads_char => 130

    /* Static get */
    public static function staticGet($k,$v=NULL) { return DB_DataObject::staticGetFromClassName('DataObjects_Stats_country',$k,$v); }

    var $defaultValues = array(
                'date_time' => '%NO_DATE_TIME%',
                'impressions' => 0,
                'clicks' => 0,
                'country' => '',
                );

    /* the code above is auto generated do not remove the tag below */
    ###END_AUTOCODE
}
?>