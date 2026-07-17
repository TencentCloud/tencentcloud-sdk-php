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
namespace TencentCloud\Cfw\V20190904\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeCfwRuleOptimization请求参数结构体
 *
 * @method integer getIdleDays() 获取长期零命中规则阈值天数。可选，必须为正整数，默认 180。
 * @method void setIdleDays(integer $IdleDays) 设置长期零命中规则阈值天数。可选，必须为正整数，默认 180。
 * @method integer getIpAggMin() 获取单 IP 离散过多聚合建议的最小数量。可选，最小为 2，默认 10。
 * @method void setIpAggMin(integer $IpAggMin) 设置单 IP 离散过多聚合建议的最小数量。可选，最小为 2，默认 10。
 * @method integer getIocSample() 获取可迁移 IOC 建议中返回的样例 IOC 数量上限。可选，必须为正整数，默认 50。
 * @method void setIocSample(integer $IocSample) 设置可迁移 IOC 建议中返回的样例 IOC 数量上限。可选，必须为正整数，默认 50。
 */
class DescribeCfwRuleOptimizationRequest extends AbstractModel
{
    /**
     * @var integer 长期零命中规则阈值天数。可选，必须为正整数，默认 180。
     */
    public $IdleDays;

    /**
     * @var integer 单 IP 离散过多聚合建议的最小数量。可选，最小为 2，默认 10。
     */
    public $IpAggMin;

    /**
     * @var integer 可迁移 IOC 建议中返回的样例 IOC 数量上限。可选，必须为正整数，默认 50。
     */
    public $IocSample;

    /**
     * @param integer $IdleDays 长期零命中规则阈值天数。可选，必须为正整数，默认 180。
     * @param integer $IpAggMin 单 IP 离散过多聚合建议的最小数量。可选，最小为 2，默认 10。
     * @param integer $IocSample 可迁移 IOC 建议中返回的样例 IOC 数量上限。可选，必须为正整数，默认 50。
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
        if (array_key_exists("IdleDays",$param) and $param["IdleDays"] !== null) {
            $this->IdleDays = $param["IdleDays"];
        }

        if (array_key_exists("IpAggMin",$param) and $param["IpAggMin"] !== null) {
            $this->IpAggMin = $param["IpAggMin"];
        }

        if (array_key_exists("IocSample",$param) and $param["IocSample"] !== null) {
            $this->IocSample = $param["IocSample"];
        }
    }
}
