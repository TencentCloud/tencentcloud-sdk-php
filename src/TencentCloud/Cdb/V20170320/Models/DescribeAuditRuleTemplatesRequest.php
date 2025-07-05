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
namespace TencentCloud\Cdb\V20170320\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeAuditRuleTemplates请求参数结构体
 *
 * @method array getRuleTemplateIds() 获取规则模板ID。
 * @method void setRuleTemplateIds(array $RuleTemplateIds) 设置规则模板ID。
 * @method array getRuleTemplateNames() 获取规则模板名称。
 * @method void setRuleTemplateNames(array $RuleTemplateNames) 设置规则模板名称。
 * @method integer getLimit() 获取单次请求返回的数量。默认值20，最大值为1000。
 * @method void setLimit(integer $Limit) 设置单次请求返回的数量。默认值20，最大值为1000。
 * @method integer getOffset() 获取偏移量，默认值为 0。
 * @method void setOffset(integer $Offset) 设置偏移量，默认值为 0。
 * @method integer getAlarmLevel() 获取告警等级。1-低风险，2-中风险，3-高风险。
 * @method void setAlarmLevel(integer $AlarmLevel) 设置告警等级。1-低风险，2-中风险，3-高风险。
 * @method integer getAlarmPolicy() 获取告警策略。0-不告警，1-告警。
 * @method void setAlarmPolicy(integer $AlarmPolicy) 设置告警策略。0-不告警，1-告警。
 */
class DescribeAuditRuleTemplatesRequest extends AbstractModel
{
    /**
     * @var array 规则模板ID。
     */
    public $RuleTemplateIds;

    /**
     * @var array 规则模板名称。
     */
    public $RuleTemplateNames;

    /**
     * @var integer 单次请求返回的数量。默认值20，最大值为1000。
     */
    public $Limit;

    /**
     * @var integer 偏移量，默认值为 0。
     */
    public $Offset;

    /**
     * @var integer 告警等级。1-低风险，2-中风险，3-高风险。
     */
    public $AlarmLevel;

    /**
     * @var integer 告警策略。0-不告警，1-告警。
     */
    public $AlarmPolicy;

    /**
     * @param array $RuleTemplateIds 规则模板ID。
     * @param array $RuleTemplateNames 规则模板名称。
     * @param integer $Limit 单次请求返回的数量。默认值20，最大值为1000。
     * @param integer $Offset 偏移量，默认值为 0。
     * @param integer $AlarmLevel 告警等级。1-低风险，2-中风险，3-高风险。
     * @param integer $AlarmPolicy 告警策略。0-不告警，1-告警。
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
        if (array_key_exists("RuleTemplateIds",$param) and $param["RuleTemplateIds"] !== null) {
            $this->RuleTemplateIds = $param["RuleTemplateIds"];
        }

        if (array_key_exists("RuleTemplateNames",$param) and $param["RuleTemplateNames"] !== null) {
            $this->RuleTemplateNames = $param["RuleTemplateNames"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("AlarmLevel",$param) and $param["AlarmLevel"] !== null) {
            $this->AlarmLevel = $param["AlarmLevel"];
        }

        if (array_key_exists("AlarmPolicy",$param) and $param["AlarmPolicy"] !== null) {
            $this->AlarmPolicy = $param["AlarmPolicy"];
        }
    }
}
