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
namespace TencentCloud\Omics\V20221128\Models;
use TencentCloud\Common\AbstractModel;

/**
 * HPC节点网络信息
 *
 * @method integer getInternetMaxBandwidthOut() 获取<p>网络出口带宽，单位Mbps</p>
 * @method void setInternetMaxBandwidthOut(integer $InternetMaxBandwidthOut) 设置<p>网络出口带宽，单位Mbps</p>
 * @method string getInternetChargeType() 获取<p>网络收费类型</p><p>枚举值：</p><ul><li>BANDWIDTH_PREPAID： 预付费按带宽结算</li><li>TRAFFIC_POSTPAID_BY_HOUR： 流量按小时后付费</li><li>BANDWIDTH_POSTPAID_BY_HOUR： 带宽按小时后付费</li></ul>
 * @method void setInternetChargeType(string $InternetChargeType) 设置<p>网络收费类型</p><p>枚举值：</p><ul><li>BANDWIDTH_PREPAID： 预付费按带宽结算</li><li>TRAFFIC_POSTPAID_BY_HOUR： 流量按小时后付费</li><li>BANDWIDTH_POSTPAID_BY_HOUR： 带宽按小时后付费</li></ul>
 */
class HPCInternetInfo extends AbstractModel
{
    /**
     * @var integer <p>网络出口带宽，单位Mbps</p>
     */
    public $InternetMaxBandwidthOut;

    /**
     * @var string <p>网络收费类型</p><p>枚举值：</p><ul><li>BANDWIDTH_PREPAID： 预付费按带宽结算</li><li>TRAFFIC_POSTPAID_BY_HOUR： 流量按小时后付费</li><li>BANDWIDTH_POSTPAID_BY_HOUR： 带宽按小时后付费</li></ul>
     */
    public $InternetChargeType;

    /**
     * @param integer $InternetMaxBandwidthOut <p>网络出口带宽，单位Mbps</p>
     * @param string $InternetChargeType <p>网络收费类型</p><p>枚举值：</p><ul><li>BANDWIDTH_PREPAID： 预付费按带宽结算</li><li>TRAFFIC_POSTPAID_BY_HOUR： 流量按小时后付费</li><li>BANDWIDTH_POSTPAID_BY_HOUR： 带宽按小时后付费</li></ul>
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
        if (array_key_exists("InternetMaxBandwidthOut",$param) and $param["InternetMaxBandwidthOut"] !== null) {
            $this->InternetMaxBandwidthOut = $param["InternetMaxBandwidthOut"];
        }

        if (array_key_exists("InternetChargeType",$param) and $param["InternetChargeType"] !== null) {
            $this->InternetChargeType = $param["InternetChargeType"];
        }
    }
}
