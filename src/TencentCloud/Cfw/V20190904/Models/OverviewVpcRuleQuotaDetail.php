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
 * 概览 VPC 规则配额详情
 *
 * @method integer getAllowedNum() 获取<p>允许使用的规则总数。</p>
 * @method void setAllowedNum(integer $AllowedNum) 设置<p>允许使用的规则总数。</p>
 * @method integer getUsedNum() 获取<p>已使用规则数量。</p>
 * @method void setUsedNum(integer $UsedNum) 设置<p>已使用规则数量。</p>
 * @method integer getRemainQuota() 获取<p>剩余规则配额数量。</p>
 * @method void setRemainQuota(integer $RemainQuota) 设置<p>剩余规则配额数量。</p>
 * @method integer getRemainExtensionNum() 获取<p>剩余扩容规则数量。</p>
 * @method void setRemainExtensionNum(integer $RemainExtensionNum) 设置<p>剩余扩容规则数量。</p>
 * @method integer getGlobalRuleNum() 获取<p>全局规则总数。</p>
 * @method void setGlobalRuleNum(integer $GlobalRuleNum) 设置<p>全局规则总数。</p>
 * @method integer getGlobalEnableRuleNum() 获取<p>当前已启用的全局规则条目。</p>
 * @method void setGlobalEnableRuleNum(integer $GlobalEnableRuleNum) 设置<p>当前已启用的全局规则条目。</p>
 * @method integer getEdgeRuleNum() 获取<p>边界规则总数。</p>
 * @method void setEdgeRuleNum(integer $EdgeRuleNum) 设置<p>边界规则总数。</p>
 * @method integer getEdgeEnableRuleNum() 获取<p>边界启用规则数。</p>
 * @method void setEdgeEnableRuleNum(integer $EdgeEnableRuleNum) 设置<p>边界启用规则数。</p>
 * @method integer getV4RuleTotal() 获取<p>IPv4 规则总数。</p>
 * @method void setV4RuleTotal(integer $V4RuleTotal) 设置<p>IPv4 规则总数。</p>
 * @method integer getV4EnableRuleTotal() 获取<p>当前已启用的 IPv4 规则条目。</p>
 * @method void setV4EnableRuleTotal(integer $V4EnableRuleTotal) 设置<p>当前已启用的 IPv4 规则条目。</p>
 * @method integer getV6RuleTotal() 获取<p>IPv6 规则总数。</p>
 * @method void setV6RuleTotal(integer $V6RuleTotal) 设置<p>IPv6 规则总数。</p>
 * @method integer getV6EnableRuleTotal() 获取<p>当前已启用的 IPv6 规则条目。</p>
 * @method void setV6EnableRuleTotal(integer $V6EnableRuleTotal) 设置<p>当前已启用的 IPv6 规则条目。</p>
 * @method integer getIsSwitchEnable() 获取<p>VPC 防火墙开关状态标识。</p>
 * @method void setIsSwitchEnable(integer $IsSwitchEnable) 设置<p>VPC 防火墙开关状态标识。</p>
 */
class OverviewVpcRuleQuotaDetail extends AbstractModel
{
    /**
     * @var integer <p>允许使用的规则总数。</p>
     */
    public $AllowedNum;

    /**
     * @var integer <p>已使用规则数量。</p>
     */
    public $UsedNum;

    /**
     * @var integer <p>剩余规则配额数量。</p>
     */
    public $RemainQuota;

    /**
     * @var integer <p>剩余扩容规则数量。</p>
     */
    public $RemainExtensionNum;

    /**
     * @var integer <p>全局规则总数。</p>
     */
    public $GlobalRuleNum;

    /**
     * @var integer <p>当前已启用的全局规则条目。</p>
     */
    public $GlobalEnableRuleNum;

    /**
     * @var integer <p>边界规则总数。</p>
     */
    public $EdgeRuleNum;

    /**
     * @var integer <p>边界启用规则数。</p>
     */
    public $EdgeEnableRuleNum;

    /**
     * @var integer <p>IPv4 规则总数。</p>
     */
    public $V4RuleTotal;

    /**
     * @var integer <p>当前已启用的 IPv4 规则条目。</p>
     */
    public $V4EnableRuleTotal;

    /**
     * @var integer <p>IPv6 规则总数。</p>
     */
    public $V6RuleTotal;

    /**
     * @var integer <p>当前已启用的 IPv6 规则条目。</p>
     */
    public $V6EnableRuleTotal;

    /**
     * @var integer <p>VPC 防火墙开关状态标识。</p>
     */
    public $IsSwitchEnable;

    /**
     * @param integer $AllowedNum <p>允许使用的规则总数。</p>
     * @param integer $UsedNum <p>已使用规则数量。</p>
     * @param integer $RemainQuota <p>剩余规则配额数量。</p>
     * @param integer $RemainExtensionNum <p>剩余扩容规则数量。</p>
     * @param integer $GlobalRuleNum <p>全局规则总数。</p>
     * @param integer $GlobalEnableRuleNum <p>当前已启用的全局规则条目。</p>
     * @param integer $EdgeRuleNum <p>边界规则总数。</p>
     * @param integer $EdgeEnableRuleNum <p>边界启用规则数。</p>
     * @param integer $V4RuleTotal <p>IPv4 规则总数。</p>
     * @param integer $V4EnableRuleTotal <p>当前已启用的 IPv4 规则条目。</p>
     * @param integer $V6RuleTotal <p>IPv6 规则总数。</p>
     * @param integer $V6EnableRuleTotal <p>当前已启用的 IPv6 规则条目。</p>
     * @param integer $IsSwitchEnable <p>VPC 防火墙开关状态标识。</p>
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
        if (array_key_exists("AllowedNum",$param) and $param["AllowedNum"] !== null) {
            $this->AllowedNum = $param["AllowedNum"];
        }

        if (array_key_exists("UsedNum",$param) and $param["UsedNum"] !== null) {
            $this->UsedNum = $param["UsedNum"];
        }

        if (array_key_exists("RemainQuota",$param) and $param["RemainQuota"] !== null) {
            $this->RemainQuota = $param["RemainQuota"];
        }

        if (array_key_exists("RemainExtensionNum",$param) and $param["RemainExtensionNum"] !== null) {
            $this->RemainExtensionNum = $param["RemainExtensionNum"];
        }

        if (array_key_exists("GlobalRuleNum",$param) and $param["GlobalRuleNum"] !== null) {
            $this->GlobalRuleNum = $param["GlobalRuleNum"];
        }

        if (array_key_exists("GlobalEnableRuleNum",$param) and $param["GlobalEnableRuleNum"] !== null) {
            $this->GlobalEnableRuleNum = $param["GlobalEnableRuleNum"];
        }

        if (array_key_exists("EdgeRuleNum",$param) and $param["EdgeRuleNum"] !== null) {
            $this->EdgeRuleNum = $param["EdgeRuleNum"];
        }

        if (array_key_exists("EdgeEnableRuleNum",$param) and $param["EdgeEnableRuleNum"] !== null) {
            $this->EdgeEnableRuleNum = $param["EdgeEnableRuleNum"];
        }

        if (array_key_exists("V4RuleTotal",$param) and $param["V4RuleTotal"] !== null) {
            $this->V4RuleTotal = $param["V4RuleTotal"];
        }

        if (array_key_exists("V4EnableRuleTotal",$param) and $param["V4EnableRuleTotal"] !== null) {
            $this->V4EnableRuleTotal = $param["V4EnableRuleTotal"];
        }

        if (array_key_exists("V6RuleTotal",$param) and $param["V6RuleTotal"] !== null) {
            $this->V6RuleTotal = $param["V6RuleTotal"];
        }

        if (array_key_exists("V6EnableRuleTotal",$param) and $param["V6EnableRuleTotal"] !== null) {
            $this->V6EnableRuleTotal = $param["V6EnableRuleTotal"];
        }

        if (array_key_exists("IsSwitchEnable",$param) and $param["IsSwitchEnable"] !== null) {
            $this->IsSwitchEnable = $param["IsSwitchEnable"];
        }
    }
}
