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
namespace TencentCloud\Antiddos\V20200309\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeDefaultAlarmThreshold请求参数结构体
 *
 * @method string getInstanceType() 获取产品类型，取值[
bgp(表示高防包产品)
bgpip(表示高防IP产品)
]
 * @method void setInstanceType(string $InstanceType) 设置产品类型，取值[
bgp(表示高防包产品)
bgpip(表示高防IP产品)
]
 * @method integer getFilterAlarmType() 获取告警阈值类型搜索，取值[
1(入流量告警阈值)
2(攻击清洗流量告警阈值)
]
 * @method void setFilterAlarmType(integer $FilterAlarmType) 设置告警阈值类型搜索，取值[
1(入流量告警阈值)
2(攻击清洗流量告警阈值)
]
 */
class DescribeDefaultAlarmThresholdRequest extends AbstractModel
{
    /**
     * @var string 产品类型，取值[
bgp(表示高防包产品)
bgpip(表示高防IP产品)
]
     */
    public $InstanceType;

    /**
     * @var integer 告警阈值类型搜索，取值[
1(入流量告警阈值)
2(攻击清洗流量告警阈值)
]
     */
    public $FilterAlarmType;

    /**
     * @param string $InstanceType 产品类型，取值[
bgp(表示高防包产品)
bgpip(表示高防IP产品)
]
     * @param integer $FilterAlarmType 告警阈值类型搜索，取值[
1(入流量告警阈值)
2(攻击清洗流量告警阈值)
]
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
        if (array_key_exists("InstanceType",$param) and $param["InstanceType"] !== null) {
            $this->InstanceType = $param["InstanceType"];
        }

        if (array_key_exists("FilterAlarmType",$param) and $param["FilterAlarmType"] !== null) {
            $this->FilterAlarmType = $param["FilterAlarmType"];
        }
    }
}
