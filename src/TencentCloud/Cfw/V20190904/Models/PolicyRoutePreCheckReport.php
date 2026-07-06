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
 * 策略路由预编排配额报告
 *
 * @method integer getNextHopCount() 获取本次编排生成的下一跳数量
 * @method void setNextHopCount(integer $NextHopCount) 设置本次编排生成的下一跳数量
 * @method integer getNextHopLimit() 获取下一跳上限
 * @method void setNextHopLimit(integer $NextHopLimit) 设置下一跳上限
 * @method integer getMatchRuleCount() 获取本次编排生成的匹配规则数
 * @method void setMatchRuleCount(integer $MatchRuleCount) 设置本次编排生成的匹配规则数
 * @method integer getMatchRuleLimit() 获取匹配规则上限
 * @method void setMatchRuleLimit(integer $MatchRuleLimit) 设置匹配规则上限
 * @method integer getCloudExistingRuleCount() 获取云上已有匹配规则数（其他防火墙类型占用）
 * @method void setCloudExistingRuleCount(integer $CloudExistingRuleCount) 设置云上已有匹配规则数（其他防火墙类型占用）
 * @method integer getCloudExistingNextHopCount() 获取云上已有下一跳数（其他防火墙类型占用）
 * @method void setCloudExistingNextHopCount(integer $CloudExistingNextHopCount) 设置云上已有下一跳数（其他防火墙类型占用）
 * @method integer getAvailableRuleQuota() 获取可用匹配规则配额 = MatchRuleLimit - CloudExistingRuleCount - MatchRuleCount
 * @method void setAvailableRuleQuota(integer $AvailableRuleQuota) 设置可用匹配规则配额 = MatchRuleLimit - CloudExistingRuleCount - MatchRuleCount
 * @method integer getAvailableNextHopQuota() 获取可用下一跳配额 = NextHopLimit - CloudExistingNextHopCount - NextHopCount
 * @method void setAvailableNextHopQuota(integer $AvailableNextHopQuota) 设置可用下一跳配额 = NextHopLimit - CloudExistingNextHopCount - NextHopCount
 */
class PolicyRoutePreCheckReport extends AbstractModel
{
    /**
     * @var integer 本次编排生成的下一跳数量
     */
    public $NextHopCount;

    /**
     * @var integer 下一跳上限
     */
    public $NextHopLimit;

    /**
     * @var integer 本次编排生成的匹配规则数
     */
    public $MatchRuleCount;

    /**
     * @var integer 匹配规则上限
     */
    public $MatchRuleLimit;

    /**
     * @var integer 云上已有匹配规则数（其他防火墙类型占用）
     */
    public $CloudExistingRuleCount;

    /**
     * @var integer 云上已有下一跳数（其他防火墙类型占用）
     */
    public $CloudExistingNextHopCount;

    /**
     * @var integer 可用匹配规则配额 = MatchRuleLimit - CloudExistingRuleCount - MatchRuleCount
     */
    public $AvailableRuleQuota;

    /**
     * @var integer 可用下一跳配额 = NextHopLimit - CloudExistingNextHopCount - NextHopCount
     */
    public $AvailableNextHopQuota;

    /**
     * @param integer $NextHopCount 本次编排生成的下一跳数量
     * @param integer $NextHopLimit 下一跳上限
     * @param integer $MatchRuleCount 本次编排生成的匹配规则数
     * @param integer $MatchRuleLimit 匹配规则上限
     * @param integer $CloudExistingRuleCount 云上已有匹配规则数（其他防火墙类型占用）
     * @param integer $CloudExistingNextHopCount 云上已有下一跳数（其他防火墙类型占用）
     * @param integer $AvailableRuleQuota 可用匹配规则配额 = MatchRuleLimit - CloudExistingRuleCount - MatchRuleCount
     * @param integer $AvailableNextHopQuota 可用下一跳配额 = NextHopLimit - CloudExistingNextHopCount - NextHopCount
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
        if (array_key_exists("NextHopCount",$param) and $param["NextHopCount"] !== null) {
            $this->NextHopCount = $param["NextHopCount"];
        }

        if (array_key_exists("NextHopLimit",$param) and $param["NextHopLimit"] !== null) {
            $this->NextHopLimit = $param["NextHopLimit"];
        }

        if (array_key_exists("MatchRuleCount",$param) and $param["MatchRuleCount"] !== null) {
            $this->MatchRuleCount = $param["MatchRuleCount"];
        }

        if (array_key_exists("MatchRuleLimit",$param) and $param["MatchRuleLimit"] !== null) {
            $this->MatchRuleLimit = $param["MatchRuleLimit"];
        }

        if (array_key_exists("CloudExistingRuleCount",$param) and $param["CloudExistingRuleCount"] !== null) {
            $this->CloudExistingRuleCount = $param["CloudExistingRuleCount"];
        }

        if (array_key_exists("CloudExistingNextHopCount",$param) and $param["CloudExistingNextHopCount"] !== null) {
            $this->CloudExistingNextHopCount = $param["CloudExistingNextHopCount"];
        }

        if (array_key_exists("AvailableRuleQuota",$param) and $param["AvailableRuleQuota"] !== null) {
            $this->AvailableRuleQuota = $param["AvailableRuleQuota"];
        }

        if (array_key_exists("AvailableNextHopQuota",$param) and $param["AvailableNextHopQuota"] !== null) {
            $this->AvailableNextHopQuota = $param["AvailableNextHopQuota"];
        }
    }
}
