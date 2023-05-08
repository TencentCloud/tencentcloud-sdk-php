<?php
/*
 * Copyright (c) 2017-2018 THL A29 Limited, a Tencent company. All Rights Reserved.
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *    http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */
namespace TencentCloud\Cwp\V20180228\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeLicenseGeneral返回参数结构体
 *
 * @method integer getLicenseCnt() 获取总授权数 (包含隔离,过期等不可用状态)
 * @method void setLicenseCnt(integer $LicenseCnt) 设置总授权数 (包含隔离,过期等不可用状态)
 * @method integer getAvailableLicenseCnt() 获取可用授权数
 * @method void setAvailableLicenseCnt(integer $AvailableLicenseCnt) 设置可用授权数
 * @method integer getAvailableProVersionLicenseCnt() 获取可用专业版授权数(包含后付费).
 * @method void setAvailableProVersionLicenseCnt(integer $AvailableProVersionLicenseCnt) 设置可用专业版授权数(包含后付费).
 * @method integer getAvailableFlagshipVersionLicenseCnt() 获取可用旗舰版授权数
 * @method void setAvailableFlagshipVersionLicenseCnt(integer $AvailableFlagshipVersionLicenseCnt) 设置可用旗舰版授权数
 * @method integer getNearExpiryLicenseCnt() 获取即将到期授权数 (15天内到期的)
 * @method void setNearExpiryLicenseCnt(integer $NearExpiryLicenseCnt) 设置即将到期授权数 (15天内到期的)
 * @method integer getExpireLicenseCnt() 获取已到期授权数(不包含已删除的记录)
 * @method void setExpireLicenseCnt(integer $ExpireLicenseCnt) 设置已到期授权数(不包含已删除的记录)
 * @method boolean getAutoOpenStatus() 获取自动升级开关状态,默认 false,  true 开启, false 关闭
 * @method void setAutoOpenStatus(boolean $AutoOpenStatus) 设置自动升级开关状态,默认 false,  true 开启, false 关闭
 * @method string getProtectType() 获取PROVERSION_POSTPAY 专业版-后付费, PROVERSION_PREPAY 专业版-预付费, FLAGSHIP_PREPAY 旗舰版-预付费
 * @method void setProtectType(string $ProtectType) 设置PROVERSION_POSTPAY 专业版-后付费, PROVERSION_PREPAY 专业版-预付费, FLAGSHIP_PREPAY 旗舰版-预付费
 * @method boolean getIsOpenStatusHistory() 获取历史是否开通过自动升级开关
 * @method void setIsOpenStatusHistory(boolean $IsOpenStatusHistory) 设置历史是否开通过自动升级开关
 * @method integer getUsedLicenseCnt() 获取已使用授权数
 * @method void setUsedLicenseCnt(integer $UsedLicenseCnt) 设置已使用授权数
 * @method integer getNotExpiredLicenseCnt() 获取未到期授权数
 * @method void setNotExpiredLicenseCnt(integer $NotExpiredLicenseCnt) 设置未到期授权数
 * @method integer getFlagshipVersionLicenseCnt() 获取旗舰版总授权数(有效订单)
 * @method void setFlagshipVersionLicenseCnt(integer $FlagshipVersionLicenseCnt) 设置旗舰版总授权数(有效订单)
 * @method integer getProVersionLicenseCnt() 获取专业版总授权数(有效订单)
 * @method void setProVersionLicenseCnt(integer $ProVersionLicenseCnt) 设置专业版总授权数(有效订单)
 * @method integer getCwpVersionLicenseCnt() 获取普惠版总授权数(有效订单的授权数)
 * @method void setCwpVersionLicenseCnt(integer $CwpVersionLicenseCnt) 设置普惠版总授权数(有效订单的授权数)
 * @method integer getAvailableLHLicenseCnt() 获取可用惠普版授权数
 * @method void setAvailableLHLicenseCnt(integer $AvailableLHLicenseCnt) 设置可用惠普版授权数
 * @method boolean getAutoRepurchaseSwitch() 获取自动加购开关, true 开启, false 关闭
 * @method void setAutoRepurchaseSwitch(boolean $AutoRepurchaseSwitch) 设置自动加购开关, true 开启, false 关闭
 * @method boolean getAutoRepurchaseRenewSwitch() 获取自动加购订单是否自动续费 ,true 开启, false 关闭
 * @method void setAutoRepurchaseRenewSwitch(boolean $AutoRepurchaseRenewSwitch) 设置自动加购订单是否自动续费 ,true 开启, false 关闭
 * @method integer getDestroyOrderNum() 获取已销毁订单数
 * @method void setDestroyOrderNum(integer $DestroyOrderNum) 设置已销毁订单数
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeLicenseGeneralResponse extends AbstractModel
{
    /**
     * @var integer 总授权数 (包含隔离,过期等不可用状态)
     */
    public $LicenseCnt;

    /**
     * @var integer 可用授权数
     */
    public $AvailableLicenseCnt;

    /**
     * @var integer 可用专业版授权数(包含后付费).
     */
    public $AvailableProVersionLicenseCnt;

    /**
     * @var integer 可用旗舰版授权数
     */
    public $AvailableFlagshipVersionLicenseCnt;

    /**
     * @var integer 即将到期授权数 (15天内到期的)
     */
    public $NearExpiryLicenseCnt;

    /**
     * @var integer 已到期授权数(不包含已删除的记录)
     */
    public $ExpireLicenseCnt;

    /**
     * @var boolean 自动升级开关状态,默认 false,  true 开启, false 关闭
     */
    public $AutoOpenStatus;

    /**
     * @var string PROVERSION_POSTPAY 专业版-后付费, PROVERSION_PREPAY 专业版-预付费, FLAGSHIP_PREPAY 旗舰版-预付费
     */
    public $ProtectType;

    /**
     * @var boolean 历史是否开通过自动升级开关
     */
    public $IsOpenStatusHistory;

    /**
     * @var integer 已使用授权数
     */
    public $UsedLicenseCnt;

    /**
     * @var integer 未到期授权数
     */
    public $NotExpiredLicenseCnt;

    /**
     * @var integer 旗舰版总授权数(有效订单)
     */
    public $FlagshipVersionLicenseCnt;

    /**
     * @var integer 专业版总授权数(有效订单)
     */
    public $ProVersionLicenseCnt;

    /**
     * @var integer 普惠版总授权数(有效订单的授权数)
     */
    public $CwpVersionLicenseCnt;

    /**
     * @var integer 可用惠普版授权数
     */
    public $AvailableLHLicenseCnt;

    /**
     * @var boolean 自动加购开关, true 开启, false 关闭
     */
    public $AutoRepurchaseSwitch;

    /**
     * @var boolean 自动加购订单是否自动续费 ,true 开启, false 关闭
     */
    public $AutoRepurchaseRenewSwitch;

    /**
     * @var integer 已销毁订单数
     */
    public $DestroyOrderNum;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param integer $LicenseCnt 总授权数 (包含隔离,过期等不可用状态)
     * @param integer $AvailableLicenseCnt 可用授权数
     * @param integer $AvailableProVersionLicenseCnt 可用专业版授权数(包含后付费).
     * @param integer $AvailableFlagshipVersionLicenseCnt 可用旗舰版授权数
     * @param integer $NearExpiryLicenseCnt 即将到期授权数 (15天内到期的)
     * @param integer $ExpireLicenseCnt 已到期授权数(不包含已删除的记录)
     * @param boolean $AutoOpenStatus 自动升级开关状态,默认 false,  true 开启, false 关闭
     * @param string $ProtectType PROVERSION_POSTPAY 专业版-后付费, PROVERSION_PREPAY 专业版-预付费, FLAGSHIP_PREPAY 旗舰版-预付费
     * @param boolean $IsOpenStatusHistory 历史是否开通过自动升级开关
     * @param integer $UsedLicenseCnt 已使用授权数
     * @param integer $NotExpiredLicenseCnt 未到期授权数
     * @param integer $FlagshipVersionLicenseCnt 旗舰版总授权数(有效订单)
     * @param integer $ProVersionLicenseCnt 专业版总授权数(有效订单)
     * @param integer $CwpVersionLicenseCnt 普惠版总授权数(有效订单的授权数)
     * @param integer $AvailableLHLicenseCnt 可用惠普版授权数
     * @param boolean $AutoRepurchaseSwitch 自动加购开关, true 开启, false 关闭
     * @param boolean $AutoRepurchaseRenewSwitch 自动加购订单是否自动续费 ,true 开启, false 关闭
     * @param integer $DestroyOrderNum 已销毁订单数
     * @param string $RequestId 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    function __construct()
    {

    }

    /**
     * For internal only. DO NOT USE IT.
     */
    public function deserialize($param)
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("LicenseCnt",$param) and $param["LicenseCnt"] !== null) {
            $this->LicenseCnt = $param["LicenseCnt"];
        }

        if (array_key_exists("AvailableLicenseCnt",$param) and $param["AvailableLicenseCnt"] !== null) {
            $this->AvailableLicenseCnt = $param["AvailableLicenseCnt"];
        }

        if (array_key_exists("AvailableProVersionLicenseCnt",$param) and $param["AvailableProVersionLicenseCnt"] !== null) {
            $this->AvailableProVersionLicenseCnt = $param["AvailableProVersionLicenseCnt"];
        }

        if (array_key_exists("AvailableFlagshipVersionLicenseCnt",$param) and $param["AvailableFlagshipVersionLicenseCnt"] !== null) {
            $this->AvailableFlagshipVersionLicenseCnt = $param["AvailableFlagshipVersionLicenseCnt"];
        }

        if (array_key_exists("NearExpiryLicenseCnt",$param) and $param["NearExpiryLicenseCnt"] !== null) {
            $this->NearExpiryLicenseCnt = $param["NearExpiryLicenseCnt"];
        }

        if (array_key_exists("ExpireLicenseCnt",$param) and $param["ExpireLicenseCnt"] !== null) {
            $this->ExpireLicenseCnt = $param["ExpireLicenseCnt"];
        }

        if (array_key_exists("AutoOpenStatus",$param) and $param["AutoOpenStatus"] !== null) {
            $this->AutoOpenStatus = $param["AutoOpenStatus"];
        }

        if (array_key_exists("ProtectType",$param) and $param["ProtectType"] !== null) {
            $this->ProtectType = $param["ProtectType"];
        }

        if (array_key_exists("IsOpenStatusHistory",$param) and $param["IsOpenStatusHistory"] !== null) {
            $this->IsOpenStatusHistory = $param["IsOpenStatusHistory"];
        }

        if (array_key_exists("UsedLicenseCnt",$param) and $param["UsedLicenseCnt"] !== null) {
            $this->UsedLicenseCnt = $param["UsedLicenseCnt"];
        }

        if (array_key_exists("NotExpiredLicenseCnt",$param) and $param["NotExpiredLicenseCnt"] !== null) {
            $this->NotExpiredLicenseCnt = $param["NotExpiredLicenseCnt"];
        }

        if (array_key_exists("FlagshipVersionLicenseCnt",$param) and $param["FlagshipVersionLicenseCnt"] !== null) {
            $this->FlagshipVersionLicenseCnt = $param["FlagshipVersionLicenseCnt"];
        }

        if (array_key_exists("ProVersionLicenseCnt",$param) and $param["ProVersionLicenseCnt"] !== null) {
            $this->ProVersionLicenseCnt = $param["ProVersionLicenseCnt"];
        }

        if (array_key_exists("CwpVersionLicenseCnt",$param) and $param["CwpVersionLicenseCnt"] !== null) {
            $this->CwpVersionLicenseCnt = $param["CwpVersionLicenseCnt"];
        }

        if (array_key_exists("AvailableLHLicenseCnt",$param) and $param["AvailableLHLicenseCnt"] !== null) {
            $this->AvailableLHLicenseCnt = $param["AvailableLHLicenseCnt"];
        }

        if (array_key_exists("AutoRepurchaseSwitch",$param) and $param["AutoRepurchaseSwitch"] !== null) {
            $this->AutoRepurchaseSwitch = $param["AutoRepurchaseSwitch"];
        }

        if (array_key_exists("AutoRepurchaseRenewSwitch",$param) and $param["AutoRepurchaseRenewSwitch"] !== null) {
            $this->AutoRepurchaseRenewSwitch = $param["AutoRepurchaseRenewSwitch"];
        }

        if (array_key_exists("DestroyOrderNum",$param) and $param["DestroyOrderNum"] !== null) {
            $this->DestroyOrderNum = $param["DestroyOrderNum"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
