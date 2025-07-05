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
 * 公摊规则概览
 *
 * @method integer getRuleId() 获取公摊规则ID
 * @method void setRuleId(integer $RuleId) 设置公摊规则ID
 * @method string getRuleName() 获取公摊规则名称
 * @method void setRuleName(string $RuleName) 设置公摊规则名称
 * @method integer getType() 获取公摊策略类型
枚举值：
1 - 自定义分摊占比 
2 - 等比分摊 
3 - 按占比分摊
 * @method void setType(integer $Type) 设置公摊策略类型
枚举值：
1 - 自定义分摊占比 
2 - 等比分摊 
3 - 按占比分摊
 * @method string getUpdateTime() 获取公摊规则最后更新时间
 * @method void setUpdateTime(string $UpdateTime) 设置公摊规则最后更新时间
 * @method array getAllocationNode() 获取分账单元概览
 * @method void setAllocationNode(array $AllocationNode) 设置分账单元概览
 */
class AllocationRuleOverview extends AbstractModel
{
    /**
     * @var integer 公摊规则ID
     */
    public $RuleId;

    /**
     * @var string 公摊规则名称
     */
    public $RuleName;

    /**
     * @var integer 公摊策略类型
枚举值：
1 - 自定义分摊占比 
2 - 等比分摊 
3 - 按占比分摊
     */
    public $Type;

    /**
     * @var string 公摊规则最后更新时间
     */
    public $UpdateTime;

    /**
     * @var array 分账单元概览
     */
    public $AllocationNode;

    /**
     * @param integer $RuleId 公摊规则ID
     * @param string $RuleName 公摊规则名称
     * @param integer $Type 公摊策略类型
枚举值：
1 - 自定义分摊占比 
2 - 等比分摊 
3 - 按占比分摊
     * @param string $UpdateTime 公摊规则最后更新时间
     * @param array $AllocationNode 分账单元概览
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

        if (array_key_exists("RuleName",$param) and $param["RuleName"] !== null) {
            $this->RuleName = $param["RuleName"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }

        if (array_key_exists("AllocationNode",$param) and $param["AllocationNode"] !== null) {
            $this->AllocationNode = [];
            foreach ($param["AllocationNode"] as $key => $value){
                $obj = new AllocationUnit();
                $obj->deserialize($value);
                array_push($this->AllocationNode, $obj);
            }
        }
    }
}
