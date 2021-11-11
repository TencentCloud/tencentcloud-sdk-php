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
namespace TencentCloud\Tcm\V20210413\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 负载均衡配置
 *
 * @method string getLoadBalancerType() 获取负载均衡实例的网络类型：
OPEN：公网属性， INTERNAL：内网属性。
只读。
 * @method void setLoadBalancerType(string $LoadBalancerType) 设置负载均衡实例的网络类型：
OPEN：公网属性， INTERNAL：内网属性。
只读。
 * @method string getSubnetId() 获取负载均衡实例所在的子网（仅对内网VPC型LB有意义），只读。
 * @method void setSubnetId(string $SubnetId) 设置负载均衡实例所在的子网（仅对内网VPC型LB有意义），只读。
 * @method string getInternetChargeType() 获取TRAFFIC_POSTPAID_BY_HOUR 按流量按小时后计费 ; BANDWIDTH_POSTPAID_BY_HOUR 按带宽按小时后计费;只读。
 * @method void setInternetChargeType(string $InternetChargeType) 设置TRAFFIC_POSTPAID_BY_HOUR 按流量按小时后计费 ; BANDWIDTH_POSTPAID_BY_HOUR 按带宽按小时后计费;只读。
 * @method integer getInternetMaxBandwidthOut() 获取最大出带宽，单位Mbps，范围支持0到2048，仅对公网属性的LB生效，默认值 10
 * @method void setInternetMaxBandwidthOut(integer $InternetMaxBandwidthOut) 设置最大出带宽，单位Mbps，范围支持0到2048，仅对公网属性的LB生效，默认值 10
 */
class LoadBalancer extends AbstractModel
{
    /**
     * @var string 负载均衡实例的网络类型：
OPEN：公网属性， INTERNAL：内网属性。
只读。
     */
    public $LoadBalancerType;

    /**
     * @var string 负载均衡实例所在的子网（仅对内网VPC型LB有意义），只读。
     */
    public $SubnetId;

    /**
     * @var string TRAFFIC_POSTPAID_BY_HOUR 按流量按小时后计费 ; BANDWIDTH_POSTPAID_BY_HOUR 按带宽按小时后计费;只读。
     */
    public $InternetChargeType;

    /**
     * @var integer 最大出带宽，单位Mbps，范围支持0到2048，仅对公网属性的LB生效，默认值 10
     */
    public $InternetMaxBandwidthOut;

    /**
     * @param string $LoadBalancerType 负载均衡实例的网络类型：
OPEN：公网属性， INTERNAL：内网属性。
只读。
     * @param string $SubnetId 负载均衡实例所在的子网（仅对内网VPC型LB有意义），只读。
     * @param string $InternetChargeType TRAFFIC_POSTPAID_BY_HOUR 按流量按小时后计费 ; BANDWIDTH_POSTPAID_BY_HOUR 按带宽按小时后计费;只读。
     * @param integer $InternetMaxBandwidthOut 最大出带宽，单位Mbps，范围支持0到2048，仅对公网属性的LB生效，默认值 10
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
        if (array_key_exists("LoadBalancerType",$param) and $param["LoadBalancerType"] !== null) {
            $this->LoadBalancerType = $param["LoadBalancerType"];
        }

        if (array_key_exists("SubnetId",$param) and $param["SubnetId"] !== null) {
            $this->SubnetId = $param["SubnetId"];
        }

        if (array_key_exists("InternetChargeType",$param) and $param["InternetChargeType"] !== null) {
            $this->InternetChargeType = $param["InternetChargeType"];
        }

        if (array_key_exists("InternetMaxBandwidthOut",$param) and $param["InternetMaxBandwidthOut"] !== null) {
            $this->InternetMaxBandwidthOut = $param["InternetMaxBandwidthOut"];
        }
    }
}
