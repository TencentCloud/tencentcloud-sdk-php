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
namespace TencentCloud\Antiddos\V20200309\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 高防IP资产实例的使用信息统计
 *
 * @method integer getPortRulesUsage() 获取已使用的端口规则数，单位条
 * @method void setPortRulesUsage(integer $PortRulesUsage) 设置已使用的端口规则数，单位条
 * @method integer getDomainRulesUsage() 获取已使用的域名规则数，单位条
 * @method void setDomainRulesUsage(integer $DomainRulesUsage) 设置已使用的域名规则数，单位条
 * @method integer getLast7DayAttackCount() 获取最近7天的攻击次数，单位次
 * @method void setLast7DayAttackCount(integer $Last7DayAttackCount) 设置最近7天的攻击次数，单位次
 */
class BGPIPInstanceUsages extends AbstractModel
{
    /**
     * @var integer 已使用的端口规则数，单位条
     */
    public $PortRulesUsage;

    /**
     * @var integer 已使用的域名规则数，单位条
     */
    public $DomainRulesUsage;

    /**
     * @var integer 最近7天的攻击次数，单位次
     */
    public $Last7DayAttackCount;

    /**
     * @param integer $PortRulesUsage 已使用的端口规则数，单位条
     * @param integer $DomainRulesUsage 已使用的域名规则数，单位条
     * @param integer $Last7DayAttackCount 最近7天的攻击次数，单位次
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
        if (array_key_exists("PortRulesUsage",$param) and $param["PortRulesUsage"] !== null) {
            $this->PortRulesUsage = $param["PortRulesUsage"];
        }

        if (array_key_exists("DomainRulesUsage",$param) and $param["DomainRulesUsage"] !== null) {
            $this->DomainRulesUsage = $param["DomainRulesUsage"];
        }

        if (array_key_exists("Last7DayAttackCount",$param) and $param["Last7DayAttackCount"] !== null) {
            $this->Last7DayAttackCount = $param["Last7DayAttackCount"];
        }
    }
}
