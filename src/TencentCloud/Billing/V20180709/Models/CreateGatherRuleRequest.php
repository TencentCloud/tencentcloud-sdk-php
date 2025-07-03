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
namespace TencentCloud\Billing\V20180709\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateGatherRule请求参数结构体
 *
 * @method integer getId() 获取规则所属分账单元ID
 * @method void setId(integer $Id) 设置规则所属分账单元ID
 * @method GatherRuleSummary getRuleList() 获取归集规则详情
 * @method void setRuleList(GatherRuleSummary $RuleList) 设置归集规则详情
 * @method string getMonth() 获取月份，不传默认当前月
 * @method void setMonth(string $Month) 设置月份，不传默认当前月
 */
class CreateGatherRuleRequest extends AbstractModel
{
    /**
     * @var integer 规则所属分账单元ID
     */
    public $Id;

    /**
     * @var GatherRuleSummary 归集规则详情
     */
    public $RuleList;

    /**
     * @var string 月份，不传默认当前月
     */
    public $Month;

    /**
     * @param integer $Id 规则所属分账单元ID
     * @param GatherRuleSummary $RuleList 归集规则详情
     * @param string $Month 月份，不传默认当前月
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
        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }

        if (array_key_exists("RuleList",$param) and $param["RuleList"] !== null) {
            $this->RuleList = new GatherRuleSummary();
            $this->RuleList->deserialize($param["RuleList"]);
        }

        if (array_key_exists("Month",$param) and $param["Month"] !== null) {
            $this->Month = $param["Month"];
        }
    }
}
