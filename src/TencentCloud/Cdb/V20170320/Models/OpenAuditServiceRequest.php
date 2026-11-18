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
 * OpenAuditService请求参数结构体
 *
 * @method string getInstanceId() 获取<p>CDB 实例 ID。可通过 <a href="https://cloud.tencent.com/document/product/236/15872">DescribeDBInstances</a> 接口获取。</p>
 * @method void setInstanceId(string $InstanceId) 设置<p>CDB 实例 ID。可通过 <a href="https://cloud.tencent.com/document/product/236/15872">DescribeDBInstances</a> 接口获取。</p>
 * @method integer getLogExpireDay() 获取<p>审计日志保存时长。</p><p>枚举值：</p><ul><li>7： 一周</li><li>30： 一个月</li><li>90： 三个月</li><li>180： 六个月</li><li>365： 一年</li><li>1095： 三年</li><li>1825： 五年</li></ul>
 * @method void setLogExpireDay(integer $LogExpireDay) 设置<p>审计日志保存时长。</p><p>枚举值：</p><ul><li>7： 一周</li><li>30： 一个月</li><li>90： 三个月</li><li>180： 六个月</li><li>365： 一年</li><li>1095： 三年</li><li>1825： 五年</li></ul>
 * @method integer getHighLogExpireDay() 获取<p>高频审计日志保存时长。</p><p>枚举值：</p><ul><li>7： 一周</li><li>30： 一个月</li><li>90： 三个月</li><li>180： 六个月</li><li>365： 一年</li><li>1095： 三年</li><li>1825： 五年</li></ul><p>默认值：7</p><p>此项取值需小于等于 LogExpireDay。</p>
 * @method void setHighLogExpireDay(integer $HighLogExpireDay) 设置<p>高频审计日志保存时长。</p><p>枚举值：</p><ul><li>7： 一周</li><li>30： 一个月</li><li>90： 三个月</li><li>180： 六个月</li><li>365： 一年</li><li>1095： 三年</li><li>1825： 五年</li></ul><p>默认值：7</p><p>此项取值需小于等于 LogExpireDay。</p>
 * @method array getAuditRuleFilters() 获取<p>审计规则（该参数已废弃，不再生效）。</p>
 * @method void setAuditRuleFilters(array $AuditRuleFilters) 设置<p>审计规则（该参数已废弃，不再生效）。</p>
 * @method array getRuleTemplateIds() 获取<p>规则模板 ID。</p>
 * @method void setRuleTemplateIds(array $RuleTemplateIds) 设置<p>规则模板 ID。</p>
 * @method boolean getAuditAll() 获取<p>审计类型。true - 全审计；默认 false - 规则审计。</p>
 * @method void setAuditAll(boolean $AuditAll) 设置<p>审计类型。true - 全审计；默认 false - 规则审计。</p>
 */
class OpenAuditServiceRequest extends AbstractModel
{
    /**
     * @var string <p>CDB 实例 ID。可通过 <a href="https://cloud.tencent.com/document/product/236/15872">DescribeDBInstances</a> 接口获取。</p>
     */
    public $InstanceId;

    /**
     * @var integer <p>审计日志保存时长。</p><p>枚举值：</p><ul><li>7： 一周</li><li>30： 一个月</li><li>90： 三个月</li><li>180： 六个月</li><li>365： 一年</li><li>1095： 三年</li><li>1825： 五年</li></ul>
     */
    public $LogExpireDay;

    /**
     * @var integer <p>高频审计日志保存时长。</p><p>枚举值：</p><ul><li>7： 一周</li><li>30： 一个月</li><li>90： 三个月</li><li>180： 六个月</li><li>365： 一年</li><li>1095： 三年</li><li>1825： 五年</li></ul><p>默认值：7</p><p>此项取值需小于等于 LogExpireDay。</p>
     */
    public $HighLogExpireDay;

    /**
     * @var array <p>审计规则（该参数已废弃，不再生效）。</p>
     * @deprecated
     */
    public $AuditRuleFilters;

    /**
     * @var array <p>规则模板 ID。</p>
     */
    public $RuleTemplateIds;

    /**
     * @var boolean <p>审计类型。true - 全审计；默认 false - 规则审计。</p>
     */
    public $AuditAll;

    /**
     * @param string $InstanceId <p>CDB 实例 ID。可通过 <a href="https://cloud.tencent.com/document/product/236/15872">DescribeDBInstances</a> 接口获取。</p>
     * @param integer $LogExpireDay <p>审计日志保存时长。</p><p>枚举值：</p><ul><li>7： 一周</li><li>30： 一个月</li><li>90： 三个月</li><li>180： 六个月</li><li>365： 一年</li><li>1095： 三年</li><li>1825： 五年</li></ul>
     * @param integer $HighLogExpireDay <p>高频审计日志保存时长。</p><p>枚举值：</p><ul><li>7： 一周</li><li>30： 一个月</li><li>90： 三个月</li><li>180： 六个月</li><li>365： 一年</li><li>1095： 三年</li><li>1825： 五年</li></ul><p>默认值：7</p><p>此项取值需小于等于 LogExpireDay。</p>
     * @param array $AuditRuleFilters <p>审计规则（该参数已废弃，不再生效）。</p>
     * @param array $RuleTemplateIds <p>规则模板 ID。</p>
     * @param boolean $AuditAll <p>审计类型。true - 全审计；默认 false - 规则审计。</p>
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
