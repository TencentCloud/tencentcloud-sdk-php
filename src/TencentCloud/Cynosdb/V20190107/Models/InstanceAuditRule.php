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
namespace TencentCloud\Cynosdb\V20190107\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 实例的审计规则详情。
 *
 * @method string getInstanceId() 获取实例ID。
 * @method void setInstanceId(string $InstanceId) 设置实例ID。
 * @method boolean getAuditRule() 获取是否是规则审计。true-规则审计，false-全审计。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAuditRule(boolean $AuditRule) 设置是否是规则审计。true-规则审计，false-全审计。
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getAuditRuleFilters() 获取审计规则详情。仅当AuditRule=true时有效。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAuditRuleFilters(array $AuditRuleFilters) 设置审计规则详情。仅当AuditRule=true时有效。
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getOldRule() 获取是否是审计策略
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setOldRule(boolean $OldRule) 设置是否是审计策略
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getRuleTemplates() 获取实例应用的规则模板详情
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRuleTemplates(array $RuleTemplates) 设置实例应用的规则模板详情
注意：此字段可能返回 null，表示取不到有效值。
 */
class InstanceAuditRule extends AbstractModel
{
    /**
     * @var string 实例ID。
     */
    public $InstanceId;

    /**
     * @var boolean 是否是规则审计。true-规则审计，false-全审计。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AuditRule;

    /**
     * @var array 审计规则详情。仅当AuditRule=true时有效。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AuditRuleFilters;

    /**
     * @var boolean 是否是审计策略
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $OldRule;

    /**
     * @var array 实例应用的规则模板详情
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RuleTemplates;

    /**
     * @param string $InstanceId 实例ID。
     * @param boolean $AuditRule 是否是规则审计。true-规则审计，false-全审计。
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $AuditRuleFilters 审计规则详情。仅当AuditRule=true时有效。
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $OldRule 是否是审计策略
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $RuleTemplates 实例应用的规则模板详情
注意：此字段可能返回 null，表示取不到有效值。
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
        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("AuditRule",$param) and $param["AuditRule"] !== null) {
            $this->AuditRule = $param["AuditRule"];
        }

        if (array_key_exists("AuditRuleFilters",$param) and $param["AuditRuleFilters"] !== null) {
            $this->AuditRuleFilters = [];
            foreach ($param["AuditRuleFilters"] as $key => $value){
                $obj = new AuditRuleFilters();
                $obj->deserialize($value);
                array_push($this->AuditRuleFilters, $obj);
            }
        }

        if (array_key_exists("OldRule",$param) and $param["OldRule"] !== null) {
            $this->OldRule = $param["OldRule"];
        }

        if (array_key_exists("RuleTemplates",$param) and $param["RuleTemplates"] !== null) {
            $this->RuleTemplates = [];
            foreach ($param["RuleTemplates"] as $key => $value){
                $obj = new RuleTemplateInfo();
                $obj->deserialize($value);
                array_push($this->RuleTemplates, $obj);
            }
        }
    }
}
