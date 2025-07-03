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
 * 分账规则表达式
 *
 * @method string getRuleKey() 获取RuleKey：分账维度
枚举值：
ownerUin - 使用者UIN,
operateUin - 操作者UIN,
businessCode - 产品一层编码,
productCode - 产品二层编码,
itemCode - 产品四层编码,
projectId - 项目ID,
regionId - 地域ID,
resourceId - 资源ID,
tag - 标签键值对,
payMode - 计费模式,
instanceType - 实例类型,
actionType - 交易类型
 * @method void setRuleKey(string $RuleKey) 设置RuleKey：分账维度
枚举值：
ownerUin - 使用者UIN,
operateUin - 操作者UIN,
businessCode - 产品一层编码,
productCode - 产品二层编码,
itemCode - 产品四层编码,
projectId - 项目ID,
regionId - 地域ID,
resourceId - 资源ID,
tag - 标签键值对,
payMode - 计费模式,
instanceType - 实例类型,
actionType - 交易类型
 * @method string getOperator() 获取分账维度规则
枚举值：
in - 是
not in - 不是
 * @method void setOperator(string $Operator) 设置分账维度规则
枚举值：
in - 是
not in - 不是
 * @method array getRuleValue() 获取分账维度值，例如当RuleKey为businessCode时，["p_cbs","p_sqlserver"]表示产品一层是"p_cbs","p_sqlserver"的费用
 * @method void setRuleValue(array $RuleValue) 设置分账维度值，例如当RuleKey为businessCode时，["p_cbs","p_sqlserver"]表示产品一层是"p_cbs","p_sqlserver"的费用
 * @method string getConnectors() 获取分账逻辑连接词，枚举值如下：
and - 且
or - 或
 * @method void setConnectors(string $Connectors) 设置分账逻辑连接词，枚举值如下：
and - 且
or - 或
 * @method array getChildren() 获取嵌套规则
 * @method void setChildren(array $Children) 设置嵌套规则
 */
class AllocationRuleExpression extends AbstractModel
{
    /**
     * @var string RuleKey：分账维度
枚举值：
ownerUin - 使用者UIN,
operateUin - 操作者UIN,
businessCode - 产品一层编码,
productCode - 产品二层编码,
itemCode - 产品四层编码,
projectId - 项目ID,
regionId - 地域ID,
resourceId - 资源ID,
tag - 标签键值对,
payMode - 计费模式,
instanceType - 实例类型,
actionType - 交易类型
     */
    public $RuleKey;

    /**
     * @var string 分账维度规则
枚举值：
in - 是
not in - 不是
     */
    public $Operator;

    /**
     * @var array 分账维度值，例如当RuleKey为businessCode时，["p_cbs","p_sqlserver"]表示产品一层是"p_cbs","p_sqlserver"的费用
     */
    public $RuleValue;

    /**
     * @var string 分账逻辑连接词，枚举值如下：
and - 且
or - 或
     */
    public $Connectors;

    /**
     * @var array 嵌套规则
     */
    public $Children;

    /**
     * @param string $RuleKey RuleKey：分账维度
枚举值：
ownerUin - 使用者UIN,
operateUin - 操作者UIN,
businessCode - 产品一层编码,
productCode - 产品二层编码,
itemCode - 产品四层编码,
projectId - 项目ID,
regionId - 地域ID,
resourceId - 资源ID,
tag - 标签键值对,
payMode - 计费模式,
instanceType - 实例类型,
actionType - 交易类型
     * @param string $Operator 分账维度规则
枚举值：
in - 是
not in - 不是
     * @param array $RuleValue 分账维度值，例如当RuleKey为businessCode时，["p_cbs","p_sqlserver"]表示产品一层是"p_cbs","p_sqlserver"的费用
     * @param string $Connectors 分账逻辑连接词，枚举值如下：
and - 且
or - 或
     * @param array $Children 嵌套规则
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
        if (array_key_exists("RuleKey",$param) and $param["RuleKey"] !== null) {
            $this->RuleKey = $param["RuleKey"];
        }

        if (array_key_exists("Operator",$param) and $param["Operator"] !== null) {
            $this->Operator = $param["Operator"];
        }

        if (array_key_exists("RuleValue",$param) and $param["RuleValue"] !== null) {
            $this->RuleValue = $param["RuleValue"];
        }

        if (array_key_exists("Connectors",$param) and $param["Connectors"] !== null) {
            $this->Connectors = $param["Connectors"];
        }

        if (array_key_exists("Children",$param) and $param["Children"] !== null) {
            $this->Children = [];
            foreach ($param["Children"] as $key => $value){
                $obj = new AllocationRuleExpression();
                $obj->deserialize($value);
                array_push($this->Children, $obj);
            }
        }
    }
}
