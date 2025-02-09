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

require_once MAX_PATH.'/lib/max/Dal/DataObjects/DB_DataObjectCommon.php';

/**
 * DB_DataObject for data_bkt_country_m
 *
 * @package    Plugin
 * @subpackage openxDeliveryLogCountry
 */
class DataObjects_Data_bkt_country_m extends DB_DataObjectCommon
{
    ###START_AUTOCODE
    /* the code below is auto generated do not remove the above tag */

    public $__table = 'data_bkt_country_m';              // table name
    public $interval_start;                  // DATETIME() => openads_datetime => 142
    public $creative_id;                     // MEDIUMINT(20) => openads_mediumint => 129
    public $zone_id;                         // MEDIUMINT(20) => openads_mediumint => 129
    public $country;                         // CHAR(3) => openads_char => 130
    public $count;                           // INT(11) => openads_int => 129

    /* Static get */
    public static function staticGet($k,$v=NULL) { return DB_DataObject::staticGetFromClassName('DataObjects_Data_bkt_country_m',$k,$v); }

    var $defaultValues = array(
                'interval_start' => '%NO_DATE_TIME%',
                'country' => '',
                'count' => 0,
                );

    /* the code above is auto generated do not remove the tag below */
    ###END_AUTOCODE
}

?>