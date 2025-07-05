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
 * 恶意请求策略
 *
 * @method string getPolicyName() 获取策略名称
 * @method void setPolicyName(string $PolicyName) 设置策略名称
 * @method integer getPolicyType() 获取策略类型[0:系统,1:用户]
 * @method void setPolicyType(integer $PolicyType) 设置策略类型[0:系统,1:用户]
 * @method integer getPolicyAction() 获取策略动作[0:告警,1:放行,2:拦截+告警]
 * @method void setPolicyAction(integer $PolicyAction) 设置策略动作[0:告警,1:放行,2:拦截+告警]
 * @method integer getHostScope() 获取主机范围[1: 所有专业版+旗舰版|2:所有旗舰版|0: 部分主机]
 * @method void setHostScope(integer $HostScope) 设置主机范围[1: 所有专业版+旗舰版|2:所有旗舰版|0: 部分主机]
 * @method array getHostIds() 获取主机ID
 * @method void setHostIds(array $HostIds) 设置主机ID
 * @method array getDomains() 获取域名,作为入参时需要进行base64 encode
 * @method void setDomains(array $Domains) 设置域名,作为入参时需要进行base64 encode
 * @method integer getIsEnabled() 获取是否生效[0:生效,1:不生效]
 * @method void setIsEnabled(integer $IsEnabled) 设置是否生效[0:生效,1:不生效]
 * @method integer getPolicyId() 获取策略ID
 * @method void setPolicyId(integer $PolicyId) 设置策略ID
 * @method string getPolicyDesc() 获取策略描述
 * @method void setPolicyDesc(string $PolicyDesc) 设置策略描述
 * @method integer getIsDealOldEvent() 获取是否处理之前的事件[0:不处理|1:处理]
 * @method void setIsDealOldEvent(integer $IsDealOldEvent) 设置是否处理之前的事件[0:不处理|1:处理]
 * @method string getUpdateTime() 获取更新时间
 * @method void setUpdateTime(string $UpdateTime) 设置更新时间
 * @method integer getEventId() 获取事件ID
 * @method void setEventId(integer $EventId) 设置事件ID
 */
class RiskDnsPolicy extends AbstractModel
{
    /**
     * @var string 策略名称
     */
    public $PolicyName;

    /**
     * @var integer 策略类型[0:系统,1:用户]
     */
    public $PolicyType;

    /**
     * @var integer 策略动作[0:告警,1:放行,2:拦截+告警]
     */
    public $PolicyAction;

    /**
     * @var integer 主机范围[1: 所有专业版+旗舰版|2:所有旗舰版|0: 部分主机]
     */
    public $HostScope;

    /**
     * @var array 主机ID
     */
    public $HostIds;

    /**
     * @var array 域名,作为入参时需要进行base64 encode
     */
    public $Domains;

    /**
     * @var integer 是否生效[0:生效,1:不生效]
     */
    public $IsEnabled;

    /**
     * @var integer 策略ID
     */
    public $PolicyId;

    /**
     * @var string 策略描述
     */
    public $PolicyDesc;

    /**
     * @var integer 是否处理之前的事件[0:不处理|1:处理]
     */
    public $IsDealOldEvent;

    /**
     * @var string 更新时间
     */
    public $UpdateTime;

    /**
     * @var integer 事件ID
     */
    public $EventId;

    /**
     * @param string $PolicyName 策略名称
     * @param integer $PolicyType 策略类型[0:系统,1:用户]
     * @param integer $PolicyAction 策略动作[0:告警,1:放行,2:拦截+告警]
     * @param integer $HostScope 主机范围[1: 所有专业版+旗舰版|2:所有旗舰版|0: 部分主机]
     * @param array $HostIds 主机ID
     * @param array $Domains 域名,作为入参时需要进行base64 encode
     * @param integer $IsEnabled 是否生效[0:生效,1:不生效]
     * @param integer $PolicyId 策略ID
     * @param string $PolicyDesc 策略描述
     * @param integer $IsDealOldEvent 是否处理之前的事件[0:不处理|1:处理]
     * @param string $UpdateTime 更新时间
     * @param integer $EventId 事件ID
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
        if (array_key_exists("PolicyName",$param) and $param["PolicyName"] !== null) {
            $this->PolicyName = $param["PolicyName"];
        }

        if (array_key_exists("PolicyType",$param) and $param["PolicyType"] !== null) {
            $this->PolicyType = $param["PolicyType"];
        }

        if (array_key_exists("PolicyAction",$param) and $param["PolicyAction"] !== null) {
            $this->PolicyAction = $param["PolicyAction"];
        }

        if (array_key_exists("HostScope",$param) and $param["HostScope"] !== null) {
            $this->HostScope = $param["HostScope"];
        }

        if (array_key_exists("HostIds",$param) and $param["HostIds"] !== null) {
            $this->HostIds = $param["HostIds"];
        }

        if (array_key_exists("Domains",$param) and $param["Domains"] !== null) {
            $this->Domains = $param["Domains"];
        }

        if (array_key_exists("IsEnabled",$param) and $param["IsEnabled"] !== null) {
            $this->IsEnabled = $param["IsEnabled"];
        }

        if (array_key_exists("PolicyId",$param) and $param["PolicyId"] !== null) {
            $this->PolicyId = $param["PolicyId"];
        }

        if (array_key_exists("PolicyDesc",$param) and $param["PolicyDesc"] !== null) {
            $this->PolicyDesc = $param["PolicyDesc"];
        }

        if (array_key_exists("IsDealOldEvent",$param) and $param["IsDealOldEvent"] !== null) {
            $this->IsDealOldEvent = $param["IsDealOldEvent"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }

        if (array_key_exists("EventId",$param) and $param["EventId"] !== null) {
            $this->EventId = $param["EventId"];
        }
    }
}
