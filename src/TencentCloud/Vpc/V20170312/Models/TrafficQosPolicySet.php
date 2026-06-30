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
namespace TencentCloud\Vpc\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 流量调度规则
 *
 * @method string getCcnId() 获取<p>CCN实例ID。形如：ccn-f49l6u0z。</p>
 * @method void setCcnId(string $CcnId) 设置<p>CCN实例ID。形如：ccn-f49l6u0z。</p>
 * @method integer getQosId() 获取<p>qos id。</p>
 * @method void setQosId(integer $QosId) 设置<p>qos id。</p>
 * @method string getQosPolicyDescription() 获取<p>描述。</p>
 * @method void setQosPolicyDescription(string $QosPolicyDescription) 设置<p>描述。</p>
 * @method string getQosPolicyName() 获取<p>名称。</p>
 * @method void setQosPolicyName(string $QosPolicyName) 设置<p>名称。</p>
 * @method integer getBandwidth() 获取<p>带宽。</p>
 * @method void setBandwidth(integer $Bandwidth) 设置<p>带宽。</p>
 * @method string getQosPolicyId() 获取<p>流量调度策略ID。</p>
 * @method void setQosPolicyId(string $QosPolicyId) 设置<p>流量调度策略ID。</p>
 * @method string getQosLevel() 获取<p>服务等级信息</p>
 * @method void setQosLevel(string $QosLevel) 设置<p>服务等级信息</p>
 * @method string getServiceLevel() 获取<p>服务等级信息</p>
 * @method void setServiceLevel(string $ServiceLevel) 设置<p>服务等级信息</p>
 * @method string getRegionFlowControlId() 获取<p>带宽ID</p><p>参数格式：fcr-xxx</p>
 * @method void setRegionFlowControlId(string $RegionFlowControlId) 设置<p>带宽ID</p><p>参数格式：fcr-xxx</p>
 * @method string getLocalRegion() 获取<p>源地域</p><p>参数格式：ap-xxx</p>
 * @method void setLocalRegion(string $LocalRegion) 设置<p>源地域</p><p>参数格式：ap-xxx</p>
 * @method string getRemoteRegion() 获取<p>目的地域</p><p>参数格式：ap-xxx</p>
 * @method void setRemoteRegion(string $RemoteRegion) 设置<p>目的地域</p><p>参数格式：ap-xxx</p>
 * @method string getTrafficMatchPolicyId() 获取<p>流量匹配策略ID</p>
 * @method void setTrafficMatchPolicyId(string $TrafficMatchPolicyId) 设置<p>流量匹配策略ID</p>
 */
class TrafficQosPolicySet extends AbstractModel
{
    /**
     * @var string <p>CCN实例ID。形如：ccn-f49l6u0z。</p>
     */
    public $CcnId;

    /**
     * @var integer <p>qos id。</p>
     */
    public $QosId;

    /**
     * @var string <p>描述。</p>
     */
    public $QosPolicyDescription;

    /**
     * @var string <p>名称。</p>
     */
    public $QosPolicyName;

    /**
     * @var integer <p>带宽。</p>
     */
    public $Bandwidth;

    /**
     * @var string <p>流量调度策略ID。</p>
     */
    public $QosPolicyId;

    /**
     * @var string <p>服务等级信息</p>
     */
    public $QosLevel;

    /**
     * @var string <p>服务等级信息</p>
     */
    public $ServiceLevel;

    /**
     * @var string <p>带宽ID</p><p>参数格式：fcr-xxx</p>
     */
    public $RegionFlowControlId;

    /**
     * @var string <p>源地域</p><p>参数格式：ap-xxx</p>
     */
    public $LocalRegion;

    /**
     * @var string <p>目的地域</p><p>参数格式：ap-xxx</p>
     */
    public $RemoteRegion;

    /**
     * @var string <p>流量匹配策略ID</p>
     */
    public $TrafficMatchPolicyId;

    /**
     * @param string $CcnId <p>CCN实例ID。形如：ccn-f49l6u0z。</p>
     * @param integer $QosId <p>qos id。</p>
     * @param string $QosPolicyDescription <p>描述。</p>
     * @param string $QosPolicyName <p>名称。</p>
     * @param integer $Bandwidth <p>带宽。</p>
     * @param string $QosPolicyId <p>流量调度策略ID。</p>
     * @param string $QosLevel <p>服务等级信息</p>
     * @param string $ServiceLevel <p>服务等级信息</p>
     * @param string $RegionFlowControlId <p>带宽ID</p><p>参数格式：fcr-xxx</p>
     * @param string $LocalRegion <p>源地域</p><p>参数格式：ap-xxx</p>
     * @param string $RemoteRegion <p>目的地域</p><p>参数格式：ap-xxx</p>
     * @param string $TrafficMatchPolicyId <p>流量匹配策略ID</p>
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
        if (array_key_exists("CcnId",$param) and $param["CcnId"] !== null) {
            $this->CcnId = $param["CcnId"];
        }

        if (array_key_exists("QosId",$param) and $param["QosId"] !== null) {
            $this->QosId = $param["QosId"];
        }

        if (array_key_exists("QosPolicyDescription",$param) and $param["QosPolicyDescription"] !== null) {
            $this->QosPolicyDescription = $param["QosPolicyDescription"];
        }

        if (array_key_exists("QosPolicyName",$param) and $param["QosPolicyName"] !== null) {
            $this->QosPolicyName = $param["QosPolicyName"];
        }

        if (array_key_exists("Bandwidth",$param) and $param["Bandwidth"] !== null) {
            $this->Bandwidth = $param["Bandwidth"];
        }

        if (array_key_exists("QosPolicyId",$param) and $param["QosPolicyId"] !== null) {
            $this->QosPolicyId = $param["QosPolicyId"];
        }

        if (array_key_exists("QosLevel",$param) and $param["QosLevel"] !== null) {
            $this->QosLevel = $param["QosLevel"];
        }

        if (array_key_exists("ServiceLevel",$param) and $param["ServiceLevel"] !== null) {
            $this->ServiceLevel = $param["ServiceLevel"];
        }

        if (array_key_exists("RegionFlowControlId",$param) and $param["RegionFlowControlId"] !== null) {
            $this->RegionFlowControlId = $param["RegionFlowControlId"];
        }

        if (array_key_exists("LocalRegion",$param) and $param["LocalRegion"] !== null) {
            $this->LocalRegion = $param["LocalRegion"];
        }

        if (array_key_exists("RemoteRegion",$param) and $param["RemoteRegion"] !== null) {
            $this->RemoteRegion = $param["RemoteRegion"];
        }

        if (array_key_exists("TrafficMatchPolicyId",$param) and $param["TrafficMatchPolicyId"] !== null) {
            $this->TrafficMatchPolicyId = $param["TrafficMatchPolicyId"];
        }
    }
}
