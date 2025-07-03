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
namespace TencentCloud\Vpc\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyBandwidthPackageAttribute请求参数结构体
 *
 * @method string getBandwidthPackageId() 获取带宽包唯一标识ID
 * @method void setBandwidthPackageId(string $BandwidthPackageId) 设置带宽包唯一标识ID
 * @method string getBandwidthPackageName() 获取带宽包名称
 * @method void setBandwidthPackageName(string $BandwidthPackageName) 设置带宽包名称
 * @method string getChargeType() 获取带宽包计费模式，可选值:
<li>ENHANCED95_POSTPAID_BY_MONTH: 后付费-增强型95计费</li>
<li>PRIMARY_TRAFFIC_POSTPAID_BY_HOUR: 后付费-按主流量计费</li>
<li>BANDWIDTH_POSTPAID_BY_DAY: 常规BGP-后付费-按带宽计费</li>
<li>FIXED_PREPAID_BY_MONTH: 常规BGP-预付费</li>
<li>PEAK_BANDWIDTH_POSTPAID_BY_DAY: 静态单线-后付费-按日结算</li>
<li>TOP5_POSTPAID_BY_MONTH: 后付费-TOP5计费，如需使用，请提交工单申请</li>
 * @method void setChargeType(string $ChargeType) 设置带宽包计费模式，可选值:
<li>ENHANCED95_POSTPAID_BY_MONTH: 后付费-增强型95计费</li>
<li>PRIMARY_TRAFFIC_POSTPAID_BY_HOUR: 后付费-按主流量计费</li>
<li>BANDWIDTH_POSTPAID_BY_DAY: 常规BGP-后付费-按带宽计费</li>
<li>FIXED_PREPAID_BY_MONTH: 常规BGP-预付费</li>
<li>PEAK_BANDWIDTH_POSTPAID_BY_DAY: 静态单线-后付费-按日结算</li>
<li>TOP5_POSTPAID_BY_MONTH: 后付费-TOP5计费，如需使用，请提交工单申请</li>
 */
class ModifyBandwidthPackageAttributeRequest extends AbstractModel
{
    /**
     * @var string 带宽包唯一标识ID
     */
    public $BandwidthPackageId;

    /**
     * @var string 带宽包名称
     */
    public $BandwidthPackageName;

    /**
     * @var string 带宽包计费模式，可选值:
<li>ENHANCED95_POSTPAID_BY_MONTH: 后付费-增强型95计费</li>
<li>PRIMARY_TRAFFIC_POSTPAID_BY_HOUR: 后付费-按主流量计费</li>
<li>BANDWIDTH_POSTPAID_BY_DAY: 常规BGP-后付费-按带宽计费</li>
<li>FIXED_PREPAID_BY_MONTH: 常规BGP-预付费</li>
<li>PEAK_BANDWIDTH_POSTPAID_BY_DAY: 静态单线-后付费-按日结算</li>
<li>TOP5_POSTPAID_BY_MONTH: 后付费-TOP5计费，如需使用，请提交工单申请</li>
     */
    public $ChargeType;

    /**
     * @param string $BandwidthPackageId 带宽包唯一标识ID
     * @param string $BandwidthPackageName 带宽包名称
     * @param string $ChargeType 带宽包计费模式，可选值:
<li>ENHANCED95_POSTPAID_BY_MONTH: 后付费-增强型95计费</li>
<li>PRIMARY_TRAFFIC_POSTPAID_BY_HOUR: 后付费-按主流量计费</li>
<li>BANDWIDTH_POSTPAID_BY_DAY: 常规BGP-后付费-按带宽计费</li>
<li>FIXED_PREPAID_BY_MONTH: 常规BGP-预付费</li>
<li>PEAK_BANDWIDTH_POSTPAID_BY_DAY: 静态单线-后付费-按日结算</li>
<li>TOP5_POSTPAID_BY_MONTH: 后付费-TOP5计费，如需使用，请提交工单申请</li>
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
        if (array_key_exists("BandwidthPackageId",$param) and $param["BandwidthPackageId"] !== null) {
            $this->BandwidthPackageId = $param["BandwidthPackageId"];
        }

        if (array_key_exists("BandwidthPackageName",$param) and $param["BandwidthPackageName"] !== null) {
            $this->BandwidthPackageName = $param["BandwidthPackageName"];
        }

        if (array_key_exists("ChargeType",$param) and $param["ChargeType"] !== null) {
            $this->ChargeType = $param["ChargeType"];
        }
    }
}
