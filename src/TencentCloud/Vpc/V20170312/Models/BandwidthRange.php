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
 * 带宽上下限。
 *
 * @method string getResourceId() 获取资源ID。
 * @method void setResourceId(string $ResourceId) 设置资源ID。
 * @method integer getBandwidthLowerLimit() 获取带宽下限，单位：Mbps。计费类型以及对应的带宽下限：
- TOP5_POSTPAID_BY_MONTH: 默认无下限
- BANDWIDTH_POSTPAID_BY_DAY: 50
- FIXED_PREPAID_BY_MONTH: 100
- ENHANCED95_POSTPAID_BY_MONTH: 300
- PEAK_BANDWIDTH_POSTPAID_BY_DAY: 50
- PRIMARY_TRAFFIC_POSTPAID_BY_HOUR: 50
 * @method void setBandwidthLowerLimit(integer $BandwidthLowerLimit) 设置带宽下限，单位：Mbps。计费类型以及对应的带宽下限：
- TOP5_POSTPAID_BY_MONTH: 默认无下限
- BANDWIDTH_POSTPAID_BY_DAY: 50
- FIXED_PREPAID_BY_MONTH: 100
- ENHANCED95_POSTPAID_BY_MONTH: 300
- PEAK_BANDWIDTH_POSTPAID_BY_DAY: 50
- PRIMARY_TRAFFIC_POSTPAID_BY_HOUR: 50
 * @method integer getBandwidthUpperLimit() 获取带宽上限，单位：Mbps。计费类型以及对应的带宽上限：
- TOP5_POSTPAID_BY_MONTH: 默认无上限
- BANDWIDTH_POSTPAID_BY_DAY: 300
- FIXED_PREPAID_BY_MONTH: 5000
- ENHANCED95_POSTPAID_BY_MONTH: 5000
- PEAK_BANDWIDTH_POSTPAID_BY_DAY: 300
- PRIMARY_TRAFFIC_POSTPAID_BY_HOUR: 2000
 * @method void setBandwidthUpperLimit(integer $BandwidthUpperLimit) 设置带宽上限，单位：Mbps。计费类型以及对应的带宽上限：
- TOP5_POSTPAID_BY_MONTH: 默认无上限
- BANDWIDTH_POSTPAID_BY_DAY: 300
- FIXED_PREPAID_BY_MONTH: 5000
- ENHANCED95_POSTPAID_BY_MONTH: 5000
- PEAK_BANDWIDTH_POSTPAID_BY_DAY: 300
- PRIMARY_TRAFFIC_POSTPAID_BY_HOUR: 2000
 */
class BandwidthRange extends AbstractModel
{
    /**
     * @var string 资源ID。
     */
    public $ResourceId;

    /**
     * @var integer 带宽下限，单位：Mbps。计费类型以及对应的带宽下限：
- TOP5_POSTPAID_BY_MONTH: 默认无下限
- BANDWIDTH_POSTPAID_BY_DAY: 50
- FIXED_PREPAID_BY_MONTH: 100
- ENHANCED95_POSTPAID_BY_MONTH: 300
- PEAK_BANDWIDTH_POSTPAID_BY_DAY: 50
- PRIMARY_TRAFFIC_POSTPAID_BY_HOUR: 50
     */
    public $BandwidthLowerLimit;

    /**
     * @var integer 带宽上限，单位：Mbps。计费类型以及对应的带宽上限：
- TOP5_POSTPAID_BY_MONTH: 默认无上限
- BANDWIDTH_POSTPAID_BY_DAY: 300
- FIXED_PREPAID_BY_MONTH: 5000
- ENHANCED95_POSTPAID_BY_MONTH: 5000
- PEAK_BANDWIDTH_POSTPAID_BY_DAY: 300
- PRIMARY_TRAFFIC_POSTPAID_BY_HOUR: 2000
     */
    public $BandwidthUpperLimit;

    /**
     * @param string $ResourceId 资源ID。
     * @param integer $BandwidthLowerLimit 带宽下限，单位：Mbps。计费类型以及对应的带宽下限：
- TOP5_POSTPAID_BY_MONTH: 默认无下限
- BANDWIDTH_POSTPAID_BY_DAY: 50
- FIXED_PREPAID_BY_MONTH: 100
- ENHANCED95_POSTPAID_BY_MONTH: 300
- PEAK_BANDWIDTH_POSTPAID_BY_DAY: 50
- PRIMARY_TRAFFIC_POSTPAID_BY_HOUR: 50
     * @param integer $BandwidthUpperLimit 带宽上限，单位：Mbps。计费类型以及对应的带宽上限：
- TOP5_POSTPAID_BY_MONTH: 默认无上限
- BANDWIDTH_POSTPAID_BY_DAY: 300
- FIXED_PREPAID_BY_MONTH: 5000
- ENHANCED95_POSTPAID_BY_MONTH: 5000
- PEAK_BANDWIDTH_POSTPAID_BY_DAY: 300
- PRIMARY_TRAFFIC_POSTPAID_BY_HOUR: 2000
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
        if (array_key_exists("ResourceId",$param) and $param["ResourceId"] !== null) {
            $this->ResourceId = $param["ResourceId"];
        }

        if (array_key_exists("BandwidthLowerLimit",$param) and $param["BandwidthLowerLimit"] !== null) {
            $this->BandwidthLowerLimit = $param["BandwidthLowerLimit"];
        }

        if (array_key_exists("BandwidthUpperLimit",$param) and $param["BandwidthUpperLimit"] !== null) {
            $this->BandwidthUpperLimit = $param["BandwidthUpperLimit"];
        }
    }
}
