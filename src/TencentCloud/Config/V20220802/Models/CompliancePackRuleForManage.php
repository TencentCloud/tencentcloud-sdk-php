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
 * 管理端系统合规包规则
 *
 * @method string getIdentifier() 获取<p>规则唯一身份标识</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIdentifier(string $Identifier) 设置<p>规则唯一身份标识</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRuleName() 获取<p>规则名称</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRuleName(string $RuleName) 设置<p>规则名称</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDescription() 获取<p>描述</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDescription(string $Description) 设置<p>描述</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getRiskLevel() 获取<p>风险等级</p><p>1：高风险 2：中风险  3：低风险</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRiskLevel(integer $RiskLevel) 设置<p>风险等级</p><p>1：高风险 2：中风险  3：低风险</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCreateTime() 获取<p>创建时间</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCreateTime(string $CreateTime) 设置<p>创建时间</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getUpdateTime() 获取<p>更新时间</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUpdateTime(string $UpdateTime) 设置<p>更新时间</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getCompliancePackRules() 获取<p>合规包规则</p>
 * @method void setCompliancePackRules(array $CompliancePackRules) 设置<p>合规包规则</p>
 * @method array getControl() 获取<p>规则编号信息</p>
 * @method void setControl(array $Control) 设置<p>规则编号信息</p>
 * @method array getResourceTypes() 获取<p>资源类型</p>
 * @method void setResourceTypes(array $ResourceTypes) 设置<p>资源类型</p>
 */
class CompliancePackRuleForManage extends AbstractModel
{
    /**
     * @var string <p>规则唯一身份标识</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Identifier;

    /**
     * @var string <p>规则名称</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RuleName;

    /**
     * @var string <p>描述</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Description;

    /**
     * @var integer <p>风险等级</p><p>1：高风险 2：中风险  3：低风险</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RiskLevel;

    /**
     * @var string <p>创建时间</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CreateTime;

    /**
     * @var string <p>更新时间</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $UpdateTime;

    /**
     * @var array <p>合规包规则</p>
     */
    public $CompliancePackRules;

    /**
     * @var array <p>规则编号信息</p>
     */
    public $Control;

    /**
     * @var array <p>资源类型</p>
     */
    public $ResourceTypes;

    /**
     * @param string $Identifier <p>规则唯一身份标识</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $RuleName <p>规则名称</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Description <p>描述</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $RiskLevel <p>风险等级</p><p>1：高风险 2：中风险  3：低风险</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CreateTime <p>创建时间</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $UpdateTime <p>更新时间</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $CompliancePackRules <p>合规包规则</p>
     * @param array $Control <p>规则编号信息</p>
     * @param array $ResourceTypes <p>资源类型</p>
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

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("RiskLevel",$param) and $param["RiskLevel"] !== null) {
            $this->RiskLevel = $param["RiskLevel"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }

        if (array_key_exists("CompliancePackRules",$param) and $param["CompliancePackRules"] !== null) {
            $this->CompliancePackRules = [];
            foreach ($param["CompliancePackRules"] as $key => $value){
                $obj = new CompliancePackRules();
                $obj->deserialize($value);
                array_push($this->CompliancePackRules, $obj);
            }
        }

        if (array_key_exists("Control",$param) and $param["Control"] !== null) {
            $this->Control = [];
            foreach ($param["Control"] as $key => $value){
                $obj = new Control();
                $obj->deserialize($value);
                array_push($this->Control, $obj);
            }
        }

        if (array_key_exists("ResourceTypes",$param) and $param["ResourceTypes"] !== null) {
            $this->ResourceTypes = $param["ResourceTypes"];
        }
    }
}
