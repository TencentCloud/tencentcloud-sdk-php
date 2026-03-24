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
namespace TencentCloud\Config\V20220802\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 管理端规则详情
 *
 * @method string getIdentifier() 获取规则标识
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIdentifier(string $Identifier) 设置规则标识
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRuleName() 获取规则名
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRuleName(string $RuleName) 设置规则名
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getInputParameter() 获取规则参数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setInputParameter(array $InputParameter) 设置规则参数
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getSourceCondition() 获取规则触发条件
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSourceCondition(array $SourceCondition) 设置规则触发条件
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getResourceType() 获取支持的资源类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setResourceType(array $ResourceType) 设置支持的资源类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getLabel() 获取标签
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLabel(array $Label) 设置标签
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getRiskLevel() 获取风险等级，1，2，3
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRiskLevel(integer $RiskLevel) 设置风险等级，1，2，3
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getServiceFunction() 获取对应的函数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setServiceFunction(string $ServiceFunction) 设置对应的函数
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCreateTime() 获取创建时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCreateTime(string $CreateTime) 设置创建时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getUpdateTime() 获取更新时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUpdateTime(string $UpdateTime) 设置更新时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getTriggerType() 获取触发类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTriggerType(array $TriggerType) 设置触发类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDescription() 获取描述
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDescription(string $Description) 设置描述
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getReferenceCount() 获取使用次数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setReferenceCount(integer $ReferenceCount) 设置使用次数
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getIdentifierType() 获取规则类型
 * @method void setIdentifierType(string $IdentifierType) 设置规则类型
 */
class SystemConfigRule extends AbstractModel
{
    /**
     * @var string 规则标识
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Identifier;

    /**
     * @var string 规则名
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RuleName;

    /**
     * @var array 规则参数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $InputParameter;

    /**
     * @var array 规则触发条件
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SourceCondition;

    /**
     * @var array 支持的资源类型
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ResourceType;

    /**
     * @var array 标签
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Label;

    /**
     * @var integer 风险等级，1，2，3
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RiskLevel;

    /**
     * @var string 对应的函数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ServiceFunction;

    /**
     * @var string 创建时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CreateTime;

    /**
     * @var string 更新时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $UpdateTime;

    /**
     * @var array 触发类型
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TriggerType;

    /**
     * @var string 描述
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Description;

    /**
     * @var integer 使用次数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ReferenceCount;

    /**
     * @var string 规则类型
     */
    public $IdentifierType;

    /**
     * @param string $Identifier 规则标识
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $RuleName 规则名
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $InputParameter 规则参数
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $SourceCondition 规则触发条件
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $ResourceType 支持的资源类型
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $Label 标签
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $RiskLevel 风险等级，1，2，3
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ServiceFunction 对应的函数
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CreateTime 创建时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $UpdateTime 更新时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $TriggerType 触发类型
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Description 描述
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $ReferenceCount 使用次数
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $IdentifierType 规则类型
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
        if (array_key_exists("Identifier",$param) and $param["Identifier"] !== null) {
            $this->Identifier = $param["Identifier"];
        }

        if (array_key_exists("RuleName",$param) and $param["RuleName"] !== null) {
            $this->RuleName = $param["RuleName"];
        }

        if (array_key_exists("InputParameter",$param) and $param["InputParameter"] !== null) {
            $this->InputParameter = [];
            foreach ($param["InputParameter"] as $key => $value){
                $obj = new InputParameterForManage();
                $obj->deserialize($value);
                array_push($this->InputParameter, $obj);
            }
        }

        if (array_key_exists("SourceCondition",$param) and $param["SourceCondition"] !== null) {
            $this->SourceCondition = [];
            foreach ($param["SourceCondition"] as $key => $value){
                $obj = new SourceConditionForManage();
                $obj->deserialize($value);
                array_push($this->SourceCondition, $obj);
            }
        }

        if (array_key_exists("ResourceType",$param) and $param["ResourceType"] !== null) {
            $this->ResourceType = $param["ResourceType"];
        }

        if (array_key_exists("Label",$param) and $param["Label"] !== null) {
            $this->Label = $param["Label"];
        }

        if (array_key_exists("RiskLevel",$param) and $param["RiskLevel"] !== null) {
            $this->RiskLevel = $param["RiskLevel"];
        }

        if (array_key_exists("ServiceFunction",$param) and $param["ServiceFunction"] !== null) {
            $this->ServiceFunction = $param["ServiceFunction"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }

        if (array_key_exists("TriggerType",$param) and $param["TriggerType"] !== null) {
            $this->TriggerType = $param["TriggerType"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("ReferenceCount",$param) and $param["ReferenceCount"] !== null) {
            $this->ReferenceCount = $param["ReferenceCount"];
        }

        if (array_key_exists("IdentifierType",$param) and $param["IdentifierType"] !== null) {
            $this->IdentifierType = $param["IdentifierType"];
        }
    }
}
