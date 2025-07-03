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
 * 规则模板内容
 *
 * @method string getRuleTemplateId() 获取规则模板ID。
 * @method void setRuleTemplateId(string $RuleTemplateId) 设置规则模板ID。
 * @method string getRuleTemplateName() 获取规则模板名称。
 * @method void setRuleTemplateName(string $RuleTemplateName) 设置规则模板名称。
 * @method array getRuleFilters() 获取规则内容。
 * @method void setRuleFilters(array $RuleFilters) 设置规则内容。
 * @method integer getAlarmLevel() 获取告警等级。1-低风险，2-中风险，3-高风险。
 * @method void setAlarmLevel(integer $AlarmLevel) 设置告警等级。1-低风险，2-中风险，3-高风险。
 * @method integer getAlarmPolicy() 获取告警策略。0-不告警，1-告警。
 * @method void setAlarmPolicy(integer $AlarmPolicy) 设置告警策略。0-不告警，1-告警。
 * @method string getDescription() 获取规则描述。
 * @method void setDescription(string $Description) 设置规则描述。
 */
class RuleTemplateInfo extends AbstractModel
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
     * @var array 规则内容。
     */
    public $RuleFilters;

    /**
     * @var integer 告警等级。1-低风险，2-中风险，3-高风险。
     */
    public $AlarmLevel;

    /**
     * @var integer 告警策略。0-不告警，1-告警。
     */
    public $AlarmPolicy;

    /**
     * @var string 规则描述。
     */
    public $Description;

    /**
     * @param string $RuleTemplateId 规则模板ID。
     * @param string $RuleTemplateName 规则模板名称。
     * @param array $RuleFilters 规则内容。
     * @param integer $AlarmLevel 告警等级。1-低风险，2-中风险，3-高风险。
     * @param integer $AlarmPolicy 告警策略。0-不告警，1-告警。
     * @param string $Description 规则描述。
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

        if (array_key_exists("AlarmLevel",$param) and $param["AlarmLevel"] !== null) {
            $this->AlarmLevel = $param["AlarmLevel"];
        }

        if (array_key_exists("AlarmPolicy",$param) and $param["AlarmPolicy"] !== null) {
            $this->AlarmPolicy = $param["AlarmPolicy"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }
    }
}
