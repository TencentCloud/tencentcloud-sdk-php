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
 * 审计规则模板的详情
 *
 * @method string getRuleTemplateId() 获取规则模板ID。
 * @method void setRuleTemplateId(string $RuleTemplateId) 设置规则模板ID。
 * @method string getRuleTemplateName() 获取规则模板名称。
 * @method void setRuleTemplateName(string $RuleTemplateName) 设置规则模板名称。
 * @method array getRuleFilters() 获取规则模板的过滤条件。
 * @method void setRuleFilters(array $RuleFilters) 设置规则模板的过滤条件。
 * @method string getDescription() 获取规则模板描述。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDescription(string $Description) 设置规则模板描述。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCreateAt() 获取规则模板创建时间。
 * @method void setCreateAt(string $CreateAt) 设置规则模板创建时间。
 * @method integer getAlarmLevel() 获取告警等级。1-低风险，2-中风险，3-高风险。
 * @method void setAlarmLevel(integer $AlarmLevel) 设置告警等级。1-低风险，2-中风险，3-高风险。
 * @method integer getAlarmPolicy() 获取告警策略。0-不告警，1-告警。
 * @method void setAlarmPolicy(integer $AlarmPolicy) 设置告警策略。0-不告警，1-告警。
 * @method array getAffectedInstances() 获取规则模板应用在哪些在实例。
 * @method void setAffectedInstances(array $AffectedInstances) 设置规则模板应用在哪些在实例。
 * @method integer getStatus() 获取模板状态。0-无任务 ，1-修改中。
 * @method void setStatus(integer $Status) 设置模板状态。0-无任务 ，1-修改中。
 * @method string getUpdateAt() 获取模板更新时间。
 * @method void setUpdateAt(string $UpdateAt) 设置模板更新时间。
 */
class AuditRuleTemplateInfo extends AbstractModel
{
    /**
     * @var string 规则模板ID。
     */
    public $RuleTemplateId;

    /**
     * @var string 规则模板名称。
     */
    public $RuleTemplateName;

    /**
     * @var array 规则模板的过滤条件。
     */
    public $RuleFilters;

    /**
     * @var string 规则模板描述。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Description;

    /**
     * @var string 规则模板创建时间。
     */
    public $CreateAt;

    /**
     * @var integer 告警等级。1-低风险，2-中风险，3-高风险。
     */
    public $AlarmLevel;

    /**
     * @var integer 告警策略。0-不告警，1-告警。
     */
    public $AlarmPolicy;

    /**
     * @var array 规则模板应用在哪些在实例。
     */
    public $AffectedInstances;

    /**
     * @var integer 模板状态。0-无任务 ，1-修改中。
     */
    public $Status;

    /**
     * @var string 模板更新时间。
     */
    public $UpdateAt;

    /**
     * @param string $RuleTemplateId 规则模板ID。
     * @param string $RuleTemplateName 规则模板名称。
     * @param array $RuleFilters 规则模板的过滤条件。
     * @param string $Description 规则模板描述。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CreateAt 规则模板创建时间。
     * @param integer $AlarmLevel 告警等级。1-低风险，2-中风险，3-高风险。
     * @param integer $AlarmPolicy 告警策略。0-不告警，1-告警。
     * @param array $AffectedInstances 规则模板应用在哪些在实例。
     * @param integer $Status 模板状态。0-无任务 ，1-修改中。
     * @param string $UpdateAt 模板更新时间。
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

        if (array_key_exists("RuleFilters",$param) and $param["RuleFilters"] !== null) {
            $this->RuleFilters = [];
            foreach ($param["RuleFilters"] as $key => $value){
                $obj = new RuleFilters();
                $obj->deserialize($value);
                array_push($this->RuleFilters, $obj);
            }
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("CreateAt",$param) and $param["CreateAt"] !== null) {
            $this->CreateAt = $param["CreateAt"];
        }

        if (array_key_exists("AlarmLevel",$param) and $param["AlarmLevel"] !== null) {
            $this->AlarmLevel = $param["AlarmLevel"];
        }

        if (array_key_exists("AlarmPolicy",$param) and $param["AlarmPolicy"] !== null) {
            $this->AlarmPolicy = $param["AlarmPolicy"];
        }

        if (array_key_exists("AffectedInstances",$param) and $param["AffectedInstances"] !== null) {
            $this->AffectedInstances = $param["AffectedInstances"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("UpdateAt",$param) and $param["UpdateAt"] !== null) {
            $this->UpdateAt = $param["UpdateAt"];
        }
    }
}
