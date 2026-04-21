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
 * ModifyAllocationRule请求参数结构体
 *
 * @method integer getRuleId() 获取<p>所编辑公摊规则ID</p>
 * @method void setRuleId(integer $RuleId) 设置<p>所编辑公摊规则ID</p>
 * @method string getName() 获取<p>编辑后公摊规则名称</p>
 * @method void setName(string $Name) 设置<p>编辑后公摊规则名称</p>
 * @method integer getType() 获取<p>公摊策略类型，枚举值如下： 1 - 自定义分摊占比 2 - 等比分摊 3 - 按占比分摊</p>
 * @method void setType(integer $Type) 设置<p>公摊策略类型，枚举值如下： 1 - 自定义分摊占比 2 - 等比分摊 3 - 按占比分摊</p>
 * @method AllocationRuleExpression getRuleDetail() 获取<p>编辑后公摊规则表达式</p>
 * @method void setRuleDetail(AllocationRuleExpression $RuleDetail) 设置<p>编辑后公摊规则表达式</p>
 * @method array getRatioDetail() 获取<p>编辑后公摊比例表达式</p>
 * @method void setRatioDetail(array $RatioDetail) 设置<p>编辑后公摊比例表达式</p>
 * @method string getMonth() 获取<p>月份，不传默认当前月</p>
 * @method void setMonth(string $Month) 设置<p>月份，不传默认当前月</p>
 */
class ModifyAllocationRuleRequest extends AbstractModel
{
    /**
     * @var integer <p>所编辑公摊规则ID</p>
     */
    public $RuleId;

    /**
     * @var string <p>编辑后公摊规则名称</p>
     */
    public $Name;

    /**
     * @var integer <p>公摊策略类型，枚举值如下： 1 - 自定义分摊占比 2 - 等比分摊 3 - 按占比分摊</p>
     */
    public $Type;

    /**
     * @var AllocationRuleExpression <p>编辑后公摊规则表达式</p>
     */
    public $RuleDetail;

    /**
     * @var array <p>编辑后公摊比例表达式</p>
     */
    public $RatioDetail;

    /**
     * @var string <p>月份，不传默认当前月</p>
     */
    public $Month;

    /**
     * @param integer $RuleId <p>所编辑公摊规则ID</p>
     * @param string $Name <p>编辑后公摊规则名称</p>
     * @param integer $Type <p>公摊策略类型，枚举值如下： 1 - 自定义分摊占比 2 - 等比分摊 3 - 按占比分摊</p>
     * @param AllocationRuleExpression $RuleDetail <p>编辑后公摊规则表达式</p>
     * @param array $RatioDetail <p>编辑后公摊比例表达式</p>
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
        if (array_key_exists("RuleId",$param) and $param["RuleId"] !== null) {
            $this->RuleId = $param["RuleId"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("RuleDetail",$param) and $param["RuleDetail"] !== null) {
            $this->RuleDetail = new AllocationRuleExpression();
            $this->RuleDetail->deserialize($param["RuleDetail"]);
        }

        if (array_key_exists("RatioDetail",$param) and $param["RatioDetail"] !== null) {
            $this->RatioDetail = [];
            foreach ($param["RatioDetail"] as $key => $value){
                $obj = new AllocationRationExpression();
                $obj->deserialize($value);
                array_push($this->RatioDetail, $obj);
            }
        }

        if (array_key_exists("Month",$param) and $param["Month"] !== null) {
            $this->Month = $param["Month"];
        }
    }
}
