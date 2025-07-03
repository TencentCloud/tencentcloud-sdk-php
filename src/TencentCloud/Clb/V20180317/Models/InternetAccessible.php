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
namespace TencentCloud\Clb\V20180317\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 网络计费模式，最大出带宽
 *
 * @method string getInternetChargeType() 获取TRAFFIC_POSTPAID_BY_HOUR 按流量按小时后计费 ; BANDWIDTH_POSTPAID_BY_HOUR 按带宽按小时后计费，国际站用户不支持该计费模式; BANDWIDTH_PACKAGE 按带宽包计费;BANDWIDTH_PREPAID按带宽预付费。
 * @method void setInternetChargeType(string $InternetChargeType) 设置TRAFFIC_POSTPAID_BY_HOUR 按流量按小时后计费 ; BANDWIDTH_POSTPAID_BY_HOUR 按带宽按小时后计费，国际站用户不支持该计费模式; BANDWIDTH_PACKAGE 按带宽包计费;BANDWIDTH_PREPAID按带宽预付费。
 * @method integer getInternetMaxBandwidthOut() 获取最大出带宽，单位Mbps，仅对公网属性的共享型、性能容量型和独占型 CLB 实例、以及内网属性的性能容量型 CLB 实例生效。
- 对于公网属性的共享型和独占型 CLB 实例，最大出带宽的范围为1Mbps-2048Mbps。
- 对于公网属性和内网属性的性能容量型 CLB实例，最大出带宽的范围为1Mbps-61440Mbps。
（调用CreateLoadBalancer创建LB时不指定此参数则设置为默认值10Mbps。此上限可调整）
 * @method void setInternetMaxBandwidthOut(integer $InternetMaxBandwidthOut) 设置最大出带宽，单位Mbps，仅对公网属性的共享型、性能容量型和独占型 CLB 实例、以及内网属性的性能容量型 CLB 实例生效。
- 对于公网属性的共享型和独占型 CLB 实例，最大出带宽的范围为1Mbps-2048Mbps。
- 对于公网属性和内网属性的性能容量型 CLB实例，最大出带宽的范围为1Mbps-61440Mbps。
（调用CreateLoadBalancer创建LB时不指定此参数则设置为默认值10Mbps。此上限可调整）
 * @method string getBandwidthpkgSubType() 获取带宽包的类型，如 BGP（多线）。
类型如下：
SINGLEISP: 单线
BGP: 多线
HIGH_QUALITY_BGP: 精品BGP共享带宽包
SINGLEISP_CMCC: 中国移动共享带宽包
SINGLEISP_CTCC: 中国电信共享带宽包
SINGLEISP_CUCC: 中国联通共享带宽包
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setBandwidthpkgSubType(string $BandwidthpkgSubType) 设置带宽包的类型，如 BGP（多线）。
类型如下：
SINGLEISP: 单线
BGP: 多线
HIGH_QUALITY_BGP: 精品BGP共享带宽包
SINGLEISP_CMCC: 中国移动共享带宽包
SINGLEISP_CTCC: 中国电信共享带宽包
SINGLEISP_CUCC: 中国联通共享带宽包
注意：此字段可能返回 null，表示取不到有效值。
 */
class InternetAccessible extends AbstractModel
{
    /**
     * @var string TRAFFIC_POSTPAID_BY_HOUR 按流量按小时后计费 ; BANDWIDTH_POSTPAID_BY_HOUR 按带宽按小时后计费，国际站用户不支持该计费模式; BANDWIDTH_PACKAGE 按带宽包计费;BANDWIDTH_PREPAID按带宽预付费。
     */
    public $InternetChargeType;

    /**
     * @var integer 最大出带宽，单位Mbps，仅对公网属性的共享型、性能容量型和独占型 CLB 实例、以及内网属性的性能容量型 CLB 实例生效。
- 对于公网属性的共享型和独占型 CLB 实例，最大出带宽的范围为1Mbps-2048Mbps。
- 对于公网属性和内网属性的性能容量型 CLB实例，最大出带宽的范围为1Mbps-61440Mbps。
（调用CreateLoadBalancer创建LB时不指定此参数则设置为默认值10Mbps。此上限可调整）
     */
    public $InternetMaxBandwidthOut;

    /**
     * @var string 带宽包的类型，如 BGP（多线）。
类型如下：
SINGLEISP: 单线
BGP: 多线
HIGH_QUALITY_BGP: 精品BGP共享带宽包
SINGLEISP_CMCC: 中国移动共享带宽包
SINGLEISP_CTCC: 中国电信共享带宽包
SINGLEISP_CUCC: 中国联通共享带宽包
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $BandwidthpkgSubType;

    /**
     * @param string $InternetChargeType TRAFFIC_POSTPAID_BY_HOUR 按流量按小时后计费 ; BANDWIDTH_POSTPAID_BY_HOUR 按带宽按小时后计费，国际站用户不支持该计费模式; BANDWIDTH_PACKAGE 按带宽包计费;BANDWIDTH_PREPAID按带宽预付费。
     * @param integer $InternetMaxBandwidthOut 最大出带宽，单位Mbps，仅对公网属性的共享型、性能容量型和独占型 CLB 实例、以及内网属性的性能容量型 CLB 实例生效。
- 对于公网属性的共享型和独占型 CLB 实例，最大出带宽的范围为1Mbps-2048Mbps。
- 对于公网属性和内网属性的性能容量型 CLB实例，最大出带宽的范围为1Mbps-61440Mbps。
（调用CreateLoadBalancer创建LB时不指定此参数则设置为默认值10Mbps。此上限可调整）
     * @param string $BandwidthpkgSubType 带宽包的类型，如 BGP（多线）。
类型如下：
SINGLEISP: 单线
BGP: 多线
HIGH_QUALITY_BGP: 精品BGP共享带宽包
SINGLEISP_CMCC: 中国移动共享带宽包
SINGLEISP_CTCC: 中国电信共享带宽包
SINGLEISP_CUCC: 中国联通共享带宽包
注意：此字段可能返回 null，表示取不到有效值。
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
        if (array_key_exists("InternetChargeType",$param) and $param["InternetChargeType"] !== null) {
            $this->InternetChargeType = $param["InternetChargeType"];
        }

        if (array_key_exists("InternetMaxBandwidthOut",$param) and $param["InternetMaxBandwidthOut"] !== null) {
            $this->InternetMaxBandwidthOut = $param["InternetMaxBandwidthOut"];
        }

        if (array_key_exists("BandwidthpkgSubType",$param) and $param["BandwidthpkgSubType"] !== null) {
            $this->BandwidthpkgSubType = $param["BandwidthpkgSubType"];
        }
    }
}
