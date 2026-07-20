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
 * @method string getRuleType() 获取<p>防火墙规则类型。必填。枚举：border 互联网边界；nat NAT 边界；vpc VPC 间；enterprise_sg 企业安全组。</p>
 * @method void setRuleType(string $RuleType) 设置<p>防火墙规则类型。必填。枚举：border 互联网边界；nat NAT 边界；vpc VPC 间；enterprise_sg 企业安全组。</p>
 * @method array getDimensions() 获取<p>要执行的优化维度白名单。可选，例如 D1、D2、D8；不传默认执行全部支持维度。</p>
 * @method void setDimensions(array $Dimensions) 设置<p>要执行的优化维度白名单。可选，例如 D1、D2、D8；不传默认执行全部支持维度。</p>
 * @method integer getIdleDays() 获取<p>长期零命中规则阈值天数。可选，默认 180。</p>
 * @method void setIdleDays(integer $IdleDays) 设置<p>长期零命中规则阈值天数。可选，默认 180。</p>
 * @method integer getIpAggMin() 获取<p>单 IP 离散过多聚合建议的最小数量。可选，默认 10。</p>
 * @method void setIpAggMin(integer $IpAggMin) 设置<p>单 IP 离散过多聚合建议的最小数量。可选，默认 10。</p>
 * @method integer getIocSample() 获取<p>可迁移 IOC 建议中返回的样例 IOC 数量上限。可选，默认 50。</p>
 * @method void setIocSample(integer $IocSample) 设置<p>可迁移 IOC 建议中返回的样例 IOC 数量上限。可选，默认 50。</p>
 */
class DescribeCfwRuleOptimizationRequest extends AbstractModel
{
    /**
     * @var string <p>防火墙规则类型。必填。枚举：border 互联网边界；nat NAT 边界；vpc VPC 间；enterprise_sg 企业安全组。</p>
     */
    public $RuleType;

    /**
     * @var array <p>要执行的优化维度白名单。可选，例如 D1、D2、D8；不传默认执行全部支持维度。</p>
     */
    public $Dimensions;

    /**
     * @var integer <p>长期零命中规则阈值天数。可选，默认 180。</p>
     */
    public $IdleDays;

    /**
     * @var integer <p>单 IP 离散过多聚合建议的最小数量。可选，默认 10。</p>
     */
    public $IpAggMin;

    /**
     * @var integer <p>可迁移 IOC 建议中返回的样例 IOC 数量上限。可选，默认 50。</p>
     */
    public $IocSample;

    /**
     * @param string $RuleType <p>防火墙规则类型。必填。枚举：border 互联网边界；nat NAT 边界；vpc VPC 间；enterprise_sg 企业安全组。</p>
     * @param array $Dimensions <p>要执行的优化维度白名单。可选，例如 D1、D2、D8；不传默认执行全部支持维度。</p>
     * @param integer $IdleDays <p>长期零命中规则阈值天数。可选，默认 180。</p>
     * @param integer $IpAggMin <p>单 IP 离散过多聚合建议的最小数量。可选，默认 10。</p>
     * @param integer $IocSample <p>可迁移 IOC 建议中返回的样例 IOC 数量上限。可选，默认 50。</p>
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
        if (array_key_exists("RuleType",$param) and $param["RuleType"] !== null) {
            $this->RuleType = $param["RuleType"];
        }

        if (array_key_exists("Dimensions",$param) and $param["Dimensions"] !== null) {
            $this->Dimensions = $param["Dimensions"];
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
