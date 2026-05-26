<?php
/*
 * Copyright (c) 2017-2025 Tencent. All Rights Reserved.
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
 * @method integer getLicenseCnt() 获取<p>总授权数 (包含隔离,过期等不可用状态)</p>
 * @method void setLicenseCnt(integer $LicenseCnt) 设置<p>总授权数 (包含隔离,过期等不可用状态)</p>
 * @method integer getAvailableLicenseCnt() 获取<p>可用授权数</p>
 * @method void setAvailableLicenseCnt(integer $AvailableLicenseCnt) 设置<p>可用授权数</p>
 * @method integer getAvailableProVersionLicenseCnt() 获取<p>可用专业版授权数(包含后付费).</p>
 * @method void setAvailableProVersionLicenseCnt(integer $AvailableProVersionLicenseCnt) 设置<p>可用专业版授权数(包含后付费).</p>
 * @method integer getAvailableFlagshipVersionLicenseCnt() 获取<p>可用旗舰版授权数</p>
 * @method void setAvailableFlagshipVersionLicenseCnt(integer $AvailableFlagshipVersionLicenseCnt) 设置<p>可用旗舰版授权数</p>
 * @method integer getNearExpiryLicenseCnt() 获取<p>即将到期授权数 (15天内到期的)</p>
 * @method void setNearExpiryLicenseCnt(integer $NearExpiryLicenseCnt) 设置<p>即将到期授权数 (15天内到期的)</p>
 * @method integer getExpireLicenseCnt() 获取<p>已到期授权数(不包含已删除的记录)</p>
 * @method void setExpireLicenseCnt(integer $ExpireLicenseCnt) 设置<p>已到期授权数(不包含已删除的记录)</p>
 * @method boolean getAutoOpenStatus() 获取<p>自动升级开关状态,默认 false,  true 开启, false 关闭</p>
 * @method void setAutoOpenStatus(boolean $AutoOpenStatus) 设置<p>自动升级开关状态,默认 false,  true 开启, false 关闭</p>
 * @method string getProtectType() 获取<p>PROVERSION_POSTPAY 专业版-后付费, PROVERSION_PREPAY 专业版-预付费, FLAGSHIP_PREPAY 旗舰版-预付费</p>
 * @method void setProtectType(string $ProtectType) 设置<p>PROVERSION_POSTPAY 专业版-后付费, PROVERSION_PREPAY 专业版-预付费, FLAGSHIP_PREPAY 旗舰版-预付费</p>
 * @method boolean getIsOpenStatusHistory() 获取<p>历史是否开通过自动升级开关</p>
 * @method void setIsOpenStatusHistory(boolean $IsOpenStatusHistory) 设置<p>历史是否开通过自动升级开关</p>
 * @method integer getUsedLicenseCnt() 获取<p>已使用授权数</p>
 * @method void setUsedLicenseCnt(integer $UsedLicenseCnt) 设置<p>已使用授权数</p>
 * @method integer getNotExpiredLicenseCnt() 获取<p>未到期授权数</p>
 * @method void setNotExpiredLicenseCnt(integer $NotExpiredLicenseCnt) 设置<p>未到期授权数</p>
 * @method integer getFlagshipVersionLicenseCnt() 获取<p>旗舰版总授权数(有效订单)</p>
 * @method void setFlagshipVersionLicenseCnt(integer $FlagshipVersionLicenseCnt) 设置<p>旗舰版总授权数(有效订单)</p>
 * @method integer getProVersionLicenseCnt() 获取<p>专业版总授权数(有效订单)</p>
 * @method void setProVersionLicenseCnt(integer $ProVersionLicenseCnt) 设置<p>专业版总授权数(有效订单)</p>
 * @method integer getCwpVersionLicenseCnt() 获取<p>轻量版总授权数(有效订单的授权数)</p>
 * @method void setCwpVersionLicenseCnt(integer $CwpVersionLicenseCnt) 设置<p>轻量版总授权数(有效订单的授权数)</p>
 * @method integer getAvailableLHLicenseCnt() 获取<p>可用惠普版授权数</p>
 * @method void setAvailableLHLicenseCnt(integer $AvailableLHLicenseCnt) 设置<p>可用惠普版授权数</p>
 * @method boolean getAutoRepurchaseSwitch() 获取<p>自动加购开关, true 开启, false 关闭</p>
 * @method void setAutoRepurchaseSwitch(boolean $AutoRepurchaseSwitch) 设置<p>自动加购开关, true 开启, false 关闭</p>
 * @method boolean getAutoRepurchaseRenewSwitch() 获取<p>自动加购订单是否自动续费 ,true 开启, false 关闭</p>
 * @method void setAutoRepurchaseRenewSwitch(boolean $AutoRepurchaseRenewSwitch) 设置<p>自动加购订单是否自动续费 ,true 开启, false 关闭</p>
 * @method integer getDestroyOrderNum() 获取<p>已销毁订单数</p>
 * @method void setDestroyOrderNum(integer $DestroyOrderNum) 设置<p>已销毁订单数</p>
 * @method boolean getRepurchaseRenewSwitch() 获取<p>自动加购是否自动续费开关,true 开启,false 关闭</p>
 * @method void setRepurchaseRenewSwitch(boolean $RepurchaseRenewSwitch) 设置<p>自动加购是否自动续费开关,true 开启,false 关闭</p>
 * @method boolean getAutoBindRaspSwitch() 获取<p>是否自动新增机器绑定rasp防护,false 关闭 true 开启</p>
 * @method void setAutoBindRaspSwitch(boolean $AutoBindRaspSwitch) 设置<p>是否自动新增机器绑定rasp防护,false 关闭 true 开启</p>
 * @method boolean getAutoOpenRaspSwitch() 获取<p>是否自动新增机器开启rasp防护,false 关闭 true 开启</p>
 * @method void setAutoOpenRaspSwitch(boolean $AutoOpenRaspSwitch) 设置<p>是否自动新增机器开启rasp防护,false 关闭 true 开启</p>
 * @method boolean getAutoDowngradeSwitch() 获取<p>是否自动缩容开关开启</p>
 * @method void setAutoDowngradeSwitch(boolean $AutoDowngradeSwitch) 设置<p>是否自动缩容开关开启</p>
 * @method integer getAvailableAISecurityLicenseCnt() 获取<p>可使用的AI防护版授权数</p>
 * @method void setAvailableAISecurityLicenseCnt(integer $AvailableAISecurityLicenseCnt) 设置<p>可使用的AI防护版授权数</p>
 * @method integer getAISecurityVersionLicenseCnt() 获取<p>AI 防护版总授权数</p>
 * @method void setAISecurityVersionLicenseCnt(integer $AISecurityVersionLicenseCnt) 设置<p>AI 防护版总授权数</p>
 * @method integer getApplicationAvailableLicenseCnt() 获取<p>应用防护授权数+旗舰版授权数相加后的可使用授权数</p>
 * @method void setApplicationAvailableLicenseCnt(integer $ApplicationAvailableLicenseCnt) 设置<p>应用防护授权数+旗舰版授权数相加后的可使用授权数</p>
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeLicenseGeneralResponse extends AbstractModel
{
    /**
     * @var integer <p>总授权数 (包含隔离,过期等不可用状态)</p>
     */
    public $LicenseCnt;

    /**
     * @var integer <p>可用授权数</p>
     */
    public $AvailableLicenseCnt;

    /**
     * @var integer <p>可用专业版授权数(包含后付费).</p>
     */
    public $AvailableProVersionLicenseCnt;

    /**
     * @var integer <p>可用旗舰版授权数</p>
     */
    public $AvailableFlagshipVersionLicenseCnt;

    /**
     * @var integer <p>即将到期授权数 (15天内到期的)</p>
     */
    public $NearExpiryLicenseCnt;

    /**
     * @var integer <p>已到期授权数(不包含已删除的记录)</p>
     */
    public $ExpireLicenseCnt;

    /**
     * @var boolean <p>自动升级开关状态,默认 false,  true 开启, false 关闭</p>
     */
    public $AutoOpenStatus;

    /**
     * @var string <p>PROVERSION_POSTPAY 专业版-后付费, PROVERSION_PREPAY 专业版-预付费, FLAGSHIP_PREPAY 旗舰版-预付费</p>
     */
    public $ProtectType;

    /**
     * @var boolean <p>历史是否开通过自动升级开关</p>
     */
    public $IsOpenStatusHistory;

    /**
     * @var integer <p>已使用授权数</p>
     */
    public $UsedLicenseCnt;

    /**
     * @var integer <p>未到期授权数</p>
     */
    public $NotExpiredLicenseCnt;

    /**
     * @var integer <p>旗舰版总授权数(有效订单)</p>
     */
    public $FlagshipVersionLicenseCnt;

    /**
     * @var integer <p>专业版总授权数(有效订单)</p>
     */
    public $ProVersionLicenseCnt;

    /**
     * @var integer <p>轻量版总授权数(有效订单的授权数)</p>
     */
    public $CwpVersionLicenseCnt;

    /**
     * @var integer <p>可用惠普版授权数</p>
     */
    public $AvailableLHLicenseCnt;

    /**
     * @var boolean <p>自动加购开关, true 开启, false 关闭</p>
     */
    public $AutoRepurchaseSwitch;

    /**
     * @var boolean <p>自动加购订单是否自动续费 ,true 开启, false 关闭</p>
     */
    public $AutoRepurchaseRenewSwitch;

    /**
     * @var integer <p>已销毁订单数</p>
     */
    public $DestroyOrderNum;

    /**
     * @var boolean <p>自动加购是否自动续费开关,true 开启,false 关闭</p>
     */
    public $RepurchaseRenewSwitch;

    /**
     * @var boolean <p>是否自动新增机器绑定rasp防护,false 关闭 true 开启</p>
     */
    public $AutoBindRaspSwitch;

    /**
     * @var boolean <p>是否自动新增机器开启rasp防护,false 关闭 true 开启</p>
     */
    public $AutoOpenRaspSwitch;

    /**
     * @var boolean <p>是否自动缩容开关开启</p>
     */
    public $AutoDowngradeSwitch;

    /**
     * @var integer <p>可使用的AI防护版授权数</p>
     */
    public $AvailableAISecurityLicenseCnt;

    /**
     * @var integer <p>AI 防护版总授权数</p>
     */
    public $AISecurityVersionLicenseCnt;

    /**
     * @var integer <p>应用防护授权数+旗舰版授权数相加后的可使用授权数</p>
     */
    public $ApplicationAvailableLicenseCnt;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param integer $LicenseCnt <p>总授权数 (包含隔离,过期等不可用状态)</p>
     * @param integer $AvailableLicenseCnt <p>可用授权数</p>
     * @param integer $AvailableProVersionLicenseCnt <p>可用专业版授权数(包含后付费).</p>
     * @param integer $AvailableFlagshipVersionLicenseCnt <p>可用旗舰版授权数</p>
     * @param integer $NearExpiryLicenseCnt <p>即将到期授权数 (15天内到期的)</p>
     * @param integer $ExpireLicenseCnt <p>已到期授权数(不包含已删除的记录)</p>
     * @param boolean $AutoOpenStatus <p>自动升级开关状态,默认 false,  true 开启, false 关闭</p>
     * @param string $ProtectType <p>PROVERSION_POSTPAY 专业版-后付费, PROVERSION_PREPAY 专业版-预付费, FLAGSHIP_PREPAY 旗舰版-预付费</p>
     * @param boolean $IsOpenStatusHistory <p>历史是否开通过自动升级开关</p>
     * @param integer $UsedLicenseCnt <p>已使用授权数</p>
     * @param integer $NotExpiredLicenseCnt <p>未到期授权数</p>
     * @param integer $FlagshipVersionLicenseCnt <p>旗舰版总授权数(有效订单)</p>
     * @param integer $ProVersionLicenseCnt <p>专业版总授权数(有效订单)</p>
     * @param integer $CwpVersionLicenseCnt <p>轻量版总授权数(有效订单的授权数)</p>
     * @param integer $AvailableLHLicenseCnt <p>可用惠普版授权数</p>
     * @param boolean $AutoRepurchaseSwitch <p>自动加购开关, true 开启, false 关闭</p>
     * @param boolean $AutoRepurchaseRenewSwitch <p>自动加购订单是否自动续费 ,true 开启, false 关闭</p>
     * @param integer $DestroyOrderNum <p>已销毁订单数</p>
     * @param boolean $RepurchaseRenewSwitch <p>自动加购是否自动续费开关,true 开启,false 关闭</p>
     * @param boolean $AutoBindRaspSwitch <p>是否自动新增机器绑定rasp防护,false 关闭 true 开启</p>
     * @param boolean $AutoOpenRaspSwitch <p>是否自动新增机器开启rasp防护,false 关闭 true 开启</p>
     * @param boolean $AutoDowngradeSwitch <p>是否自动缩容开关开启</p>
     * @param integer $AvailableAISecurityLicenseCnt <p>可使用的AI防护版授权数</p>
     * @param integer $AISecurityVersionLicenseCnt <p>AI 防护版总授权数</p>
     * @param integer $ApplicationAvailableLicenseCnt <p>应用防护授权数+旗舰版授权数相加后的可使用授权数</p>
     * @param string $RequestId 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
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

        if (array_key_exists("RepurchaseRenewSwitch",$param) and $param["RepurchaseRenewSwitch"] !== null) {
            $this->RepurchaseRenewSwitch = $param["RepurchaseRenewSwitch"];
        }

        if (array_key_exists("AutoBindRaspSwitch",$param) and $param["AutoBindRaspSwitch"] !== null) {
            $this->AutoBindRaspSwitch = $param["AutoBindRaspSwitch"];
        }

        if (array_key_exists("AutoOpenRaspSwitch",$param) and $param["AutoOpenRaspSwitch"] !== null) {
            $this->AutoOpenRaspSwitch = $param["AutoOpenRaspSwitch"];
        }

        if (array_key_exists("AutoDowngradeSwitch",$param) and $param["AutoDowngradeSwitch"] !== null) {
            $this->AutoDowngradeSwitch = $param["AutoDowngradeSwitch"];
        }

        if (array_key_exists("AvailableAISecurityLicenseCnt",$param) and $param["AvailableAISecurityLicenseCnt"] !== null) {
            $this->AvailableAISecurityLicenseCnt = $param["AvailableAISecurityLicenseCnt"];
        }

        if (array_key_exists("AISecurityVersionLicenseCnt",$param) and $param["AISecurityVersionLicenseCnt"] !== null) {
            $this->AISecurityVersionLicenseCnt = $param["AISecurityVersionLicenseCnt"];
        }

        if (array_key_exists("ApplicationAvailableLicenseCnt",$param) and $param["ApplicationAvailableLicenseCnt"] !== null) {
            $this->ApplicationAvailableLicenseCnt = $param["ApplicationAvailableLicenseCnt"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
