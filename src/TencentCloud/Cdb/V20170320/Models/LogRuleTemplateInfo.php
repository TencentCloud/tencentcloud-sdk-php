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
namespace TencentCloud\Cdb\V20170320\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 审计日志命中规则模板的基本信息
 *
 * @method string getRuleTemplateId() 获取模板ID。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRuleTemplateId(string $RuleTemplateId) 设置模板ID。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRuleTemplateName() 获取规则模板名
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRuleTemplateName(string $RuleTemplateName) 设置规则模板名
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getAlarmLevel() 获取告警等级。1-低风险，2-中风险，3-高风险。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAlarmLevel(string $AlarmLevel) 设置告警等级。1-低风险，2-中风险，3-高风险。
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getRuleTemplateStatus() 获取规则模板变更状态：0-未变更；1-已变更；2-已删除
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRuleTemplateStatus(integer $RuleTemplateStatus) 设置规则模板变更状态：0-未变更；1-已变更；2-已删除
注意：此字段可能返回 null，表示取不到有效值。
 */
class LogRuleTemplateInfo extends AbstractModel
{
    /**
     * @var string 模板ID。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RuleTemplateId;

    /**
     * @var string 规则模板名
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RuleTemplateName;

    /**
     * @var string 告警等级。1-低风险，2-中风险，3-高风险。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AlarmLevel;

    /**
     * @var integer 规则模板变更状态：0-未变更；1-已变更；2-已删除
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RuleTemplateStatus;

    /**
     * @param string $RuleTemplateId 模板ID。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $RuleTemplateName 规则模板名
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $AlarmLevel 告警等级。1-低风险，2-中风险，3-高风险。
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $RuleTemplateStatus 规则模板变更状态：0-未变更；1-已变更；2-已删除
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
        if (array_key_exists("RuleTemplateId",$param) and $param["RuleTemplateId"] !== null) {
            $this->RuleTemplateId = $param["RuleTemplateId"];
        }

        if (array_key_exists("RuleTemplateName",$param) and $param["RuleTemplateName"] !== null) {
            $this->RuleTemplateName = $param["RuleTemplateName"];
        }

        if (array_key_exists("AlarmLevel",$param) and $param["AlarmLevel"] !== null) {
            $this->AlarmLevel = $param["AlarmLevel"];
        }

        if (array_key_exists("RuleTemplateStatus",$param) and $param["RuleTemplateStatus"] !== null) {
            $this->RuleTemplateStatus = $param["RuleTemplateStatus"];
        }
    }
}
