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
 * DB_DataObject for ox_banners_ox_adsense
 */
require_once MAX_PATH.'/lib/max/Dal/DataObjects/DB_DataObjectCommon.php';

class DataObjects_Banners_ox_adsense extends DB_DataObjectCommon
{
    ###START_AUTOCODE
    /* the code below is auto generated do not remove the above tag */

    public $__table = 'banners_ox_adsense';           // table name
    public $bannerid;                        // int(9)  not_null primary_key
    public $gas_publisher_id;                // string(32)  not_null
    public $gas_ad_type;                     // string(32)  not_null
    public $gas_ad_subtype;                  // string(32)  not_null

    /* Static get */
    public static function staticGet($k,$v=NULL) { return DB_DataObject::staticGetFromClassName('DataObjects_Ox_banners_ox_adsense',$k,$v); }

    /* the code above is auto generated do not remove the tag below */
    ###END_AUTOCODE

    /**
     * A private method to return the account ID of the
     * account that should "own" audit trail entries for
     * this entity type; NOT related to the account ID
     * of the currently active account performing an
     * action.
     *
     * @return integer The account ID to insert into the
     *                 "account_id" column of the audit trail
     *                 database table.
     */
    public function getOwningAccountIds($resetCache = false)
    {
        $accountType = OA_Permission::getAccountType(false);
        switch ($accountType)
        {
            case OA_ACCOUNT_ADMIN:
                return parent::_getOwningAccountIdsByAccountId($accountId  = OA_Permission::getAccountId());
            case OA_ACCOUNT_ADVERTISER:
                $parentTable = 'clients';
                $parentKeyName = 'clientid';
                break;
            case OA_ACCOUNT_TRAFFICKER:
                $parentTable = 'affiliates';
                $parentKeyName = 'affiliateid';
                break;
            case OA_ACCOUNT_MANAGER:
                $parentTable = 'agency';
                $parentKeyName = 'agencyid';
                break;
        }
        return $this->_getOwningAccountIds($parentTable, $parentKeyName);
    }

    function _auditEnabled()
    {
        return false;
    }

    function _getContextId()
    {
        return $this->bannerid;
    }

    function _getContext()
    {
        return 'openXHTML Adsense Banner';
    }

    /**
     * build a myplugin_table specific audit array
     *
     * @param integer $actionid
     * @param array $aAuditFields
     */
    function _buildAuditArray($actionid, &$aAuditFields)
    {
        $aAuditFields['key_desc']   = $this->gas_publisher_id;
    }
}
