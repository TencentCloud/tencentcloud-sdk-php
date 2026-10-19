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
 * 概览通用规则配额详情
 *
 * @method integer getAllowedNum() 获取<p>允许使用的规则总数。</p>
 * @method void setAllowedNum(integer $AllowedNum) 设置<p>允许使用的规则总数。</p>
 * @method integer getUsedNum() 获取<p>已使用规则数量。</p>
 * @method void setUsedNum(integer $UsedNum) 设置<p>已使用规则数量。</p>
 * @method integer getRemainQuota() 获取<p>剩余规则配额数量。</p>
 * @method void setRemainQuota(integer $RemainQuota) 设置<p>剩余规则配额数量。</p>
 * @method integer getRemainExtensionNum() 获取<p>剩余扩容规则数量。</p>
 * @method void setRemainExtensionNum(integer $RemainExtensionNum) 设置<p>剩余扩容规则数量。</p>
 * @method integer getInTotal() 获取<p>入方向规则总数。</p>
 * @method void setInTotal(integer $InTotal) 设置<p>入方向规则总数。</p>
 * @method integer getInEnableNum() 获取<p>入方向启用规则数。</p>
 * @method void setInEnableNum(integer $InEnableNum) 设置<p>入方向启用规则数。</p>
 * @method integer getOutTotal() 获取<p>出方向规则总数。</p>
 * @method void setOutTotal(integer $OutTotal) 设置<p>出方向规则总数。</p>
 * @method integer getOutEnableNum() 获取<p>出方向启用规则数。</p>
 * @method void setOutEnableNum(integer $OutEnableNum) 设置<p>出方向启用规则数。</p>
 */
class OverviewCommonRuleQuotaDetail extends AbstractModel
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
     * @var integer <p>入方向规则总数。</p>
     */
    public $InTotal;

    /**
     * @var integer <p>入方向启用规则数。</p>
     */
    public $InEnableNum;

    /**
     * @var integer <p>出方向规则总数。</p>
     */
    public $OutTotal;

    /**
     * @var integer <p>出方向启用规则数。</p>
     */
    public $OutEnableNum;

    /**
     * @param integer $AllowedNum <p>允许使用的规则总数。</p>
     * @param integer $UsedNum <p>已使用规则数量。</p>
     * @param integer $RemainQuota <p>剩余规则配额数量。</p>
     * @param integer $RemainExtensionNum <p>剩余扩容规则数量。</p>
     * @param integer $InTotal <p>入方向规则总数。</p>
     * @param integer $InEnableNum <p>入方向启用规则数。</p>
     * @param integer $OutTotal <p>出方向规则总数。</p>
     * @param integer $OutEnableNum <p>出方向启用规则数。</p>
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

        if (array_key_exists("InTotal",$param) and $param["InTotal"] !== null) {
            $this->InTotal = $param["InTotal"];
        }

        if (array_key_exists("InEnableNum",$param) and $param["InEnableNum"] !== null) {
            $this->InEnableNum = $param["InEnableNum"];
        }

        if (array_key_exists("OutTotal",$param) and $param["OutTotal"] !== null) {
            $this->OutTotal = $param["OutTotal"];
        }

        if (array_key_exists("OutEnableNum",$param) and $param["OutEnableNum"] !== null) {
            $this->OutEnableNum = $param["OutEnableNum"];
        }
    }
}
