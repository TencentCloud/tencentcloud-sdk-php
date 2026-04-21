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
namespace TencentCloud\Billing\V20180709\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateGatherRule请求参数结构体
 *
 * @method integer getId() 获取<p>规则所属分账单元ID</p>
 * @method void setId(integer $Id) 设置<p>规则所属分账单元ID</p>
 * @method GatherRuleSummary getRuleList() 获取<p>归集规则详情</p>
 * @method void setRuleList(GatherRuleSummary $RuleList) 设置<p>归集规则详情</p>
 * @method string getMonth() 获取<p>月份，不传默认当前月</p>
 * @method void setMonth(string $Month) 设置<p>月份，不传默认当前月</p>
 */
class CreateGatherRuleRequest extends AbstractModel
{
    /**
     * @var integer <p>规则所属分账单元ID</p>
     */
    public $Id;

    /**
     * @var GatherRuleSummary <p>归集规则详情</p>
     */
    public $RuleList;

    /**
     * @var string <p>月份，不传默认当前月</p>
     */
    public $Month;

    /**
     * @param integer $Id <p>规则所属分账单元ID</p>
     * @param GatherRuleSummary $RuleList <p>归集规则详情</p>
     * @param string $Month <p>月份，不传默认当前月</p>
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
