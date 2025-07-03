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
 * 公摊规则列表
 *
 * @method string getName() 获取新增公摊规则名称
 * @method void setName(string $Name) 设置新增公摊规则名称
 * @method integer getType() 获取公摊策略类型，枚举值如下：
1 - 自定义分摊占比 
2 - 等比分摊
3 - 按占比分摊
 * @method void setType(integer $Type) 设置公摊策略类型，枚举值如下：
1 - 自定义分摊占比 
2 - 等比分摊
3 - 按占比分摊
 * @method AllocationRuleExpression getRuleDetail() 获取公摊规则表达式
 * @method void setRuleDetail(AllocationRuleExpression $RuleDetail) 设置公摊规则表达式
 * @method array getRatioDetail() 获取公摊比例表达式，按占比分摊不传
 * @method void setRatioDetail(array $RatioDetail) 设置公摊比例表达式，按占比分摊不传
 */
class AllocationRulesSummary extends AbstractModel
{
    /**
     * @var string 新增公摊规则名称
     */
    public $Name;

    /**
     * @var integer 公摊策略类型，枚举值如下：
1 - 自定义分摊占比 
2 - 等比分摊
3 - 按占比分摊
     */
    public $Type;

    /**
     * @var AllocationRuleExpression 公摊规则表达式
     */
    public $RuleDetail;

    /**
     * @var array 公摊比例表达式，按占比分摊不传
     */
    public $RatioDetail;

    /**
     * @param string $Name 新增公摊规则名称
     * @param integer $Type 公摊策略类型，枚举值如下：
1 - 自定义分摊占比 
2 - 等比分摊
3 - 按占比分摊
     * @param AllocationRuleExpression $RuleDetail 公摊规则表达式
     * @param array $RatioDetail 公摊比例表达式，按占比分摊不传
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
    }
}
