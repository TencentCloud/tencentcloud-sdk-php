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
 * OpenAuditService请求参数结构体
 *
 * @method string getInstanceId() 获取CDB实例ID
 * @method void setInstanceId(string $InstanceId) 设置CDB实例ID
 * @method integer getLogExpireDay() 获取审计日志保存时长。支持值包括：
7 - 一周
30 - 一个月；
90 - 三个月；
180 - 六个月；
365 - 一年；
1095 - 三年；
1825 - 五年；
 * @method void setLogExpireDay(integer $LogExpireDay) 设置审计日志保存时长。支持值包括：
7 - 一周
30 - 一个月；
90 - 三个月；
180 - 六个月；
365 - 一年；
1095 - 三年；
1825 - 五年；
 * @method integer getHighLogExpireDay() 获取高频审计日志保存时长。支持值包括：
7 - 一周
30 - 一个月；
 * @method void setHighLogExpireDay(integer $HighLogExpireDay) 设置高频审计日志保存时长。支持值包括：
7 - 一周
30 - 一个月；
 * @method array getAuditRuleFilters() 获取审计规则（该参数已废弃，不再生效）。
 * @method void setAuditRuleFilters(array $AuditRuleFilters) 设置审计规则（该参数已废弃，不再生效）。
 * @method array getRuleTemplateIds() 获取规则模板ID。同AuditRuleFilters都不填是全审计。
 * @method void setRuleTemplateIds(array $RuleTemplateIds) 设置规则模板ID。同AuditRuleFilters都不填是全审计。
 * @method boolean getAuditAll() 获取审计类型。true-全审计；默认false-规则审计。
 * @method void setAuditAll(boolean $AuditAll) 设置审计类型。true-全审计；默认false-规则审计。
 */
class OpenAuditServiceRequest extends AbstractModel
{
    /**
     * @var string CDB实例ID
     */
    public $InstanceId;

    /**
     * @var integer 审计日志保存时长。支持值包括：
7 - 一周
30 - 一个月；
90 - 三个月；
180 - 六个月；
365 - 一年；
1095 - 三年；
1825 - 五年；
     */
    public $LogExpireDay;

    /**
     * @var integer 高频审计日志保存时长。支持值包括：
7 - 一周
30 - 一个月；
     */
    public $HighLogExpireDay;

    /**
     * @var array 审计规则（该参数已废弃，不再生效）。
     */
    public $AuditRuleFilters;

    /**
     * @var array 规则模板ID。同AuditRuleFilters都不填是全审计。
     */
    public $RuleTemplateIds;

    /**
     * @var boolean 审计类型。true-全审计；默认false-规则审计。
     */
    public $AuditAll;

    /**
     * @param string $InstanceId CDB实例ID
     * @param integer $LogExpireDay 审计日志保存时长。支持值包括：
7 - 一周
30 - 一个月；
90 - 三个月；
180 - 六个月；
365 - 一年；
1095 - 三年；
1825 - 五年；
     * @param integer $HighLogExpireDay 高频审计日志保存时长。支持值包括：
7 - 一周
30 - 一个月；
     * @param array $AuditRuleFilters 审计规则（该参数已废弃，不再生效）。
     * @param array $RuleTemplateIds 规则模板ID。同AuditRuleFilters都不填是全审计。
     * @param boolean $AuditAll 审计类型。true-全审计；默认false-规则审计。
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

        if (array_key_exists("LogExpireDay",$param) and $param["LogExpireDay"] !== null) {
            $this->LogExpireDay = $param["LogExpireDay"];
        }

        if (array_key_exists("HighLogExpireDay",$param) and $param["HighLogExpireDay"] !== null) {
            $this->HighLogExpireDay = $param["HighLogExpireDay"];
        }

        if (array_key_exists("AuditRuleFilters",$param) and $param["AuditRuleFilters"] !== null) {
            $this->AuditRuleFilters = [];
            foreach ($param["AuditRuleFilters"] as $key => $value){
                $obj = new AuditRuleFilters();
                $obj->deserialize($value);
                array_push($this->AuditRuleFilters, $obj);
            }
        }

        if (array_key_exists("RuleTemplateIds",$param) and $param["RuleTemplateIds"] !== null) {
            $this->RuleTemplateIds = $param["RuleTemplateIds"];
        }

        if (array_key_exists("AuditAll",$param) and $param["AuditAll"] !== null) {
            $this->AuditAll = $param["AuditAll"];
        }
    }
}
