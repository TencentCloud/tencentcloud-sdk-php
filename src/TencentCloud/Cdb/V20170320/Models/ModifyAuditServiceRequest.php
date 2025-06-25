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
 * ModifyAuditService请求参数结构体
 *
 * @method string getInstanceId() 获取实例 ID。可通过 [DescribeDBInstances](https://cloud.tencent.com/document/product/236/15872) 接口获取。
 * @method void setInstanceId(string $InstanceId) 设置实例 ID。可通过 [DescribeDBInstances](https://cloud.tencent.com/document/product/236/15872) 接口获取。
 * @method integer getLogExpireDay() 获取日志保留时长。支持值包括：
7 - 一周；
30 - 一个月；
90 - 三个月；
180 - 六个月；
365 - 一年；
1095 - 三年；
1825 - 五年。
 * @method void setLogExpireDay(integer $LogExpireDay) 设置日志保留时长。支持值包括：
7 - 一周；
30 - 一个月；
90 - 三个月；
180 - 六个月；
365 - 一年；
1095 - 三年；
1825 - 五年。
 * @method integer getHighLogExpireDay() 获取高频日志保留时长。默认值为7，此项取值需小于等于 LogExpireDay，支持值包括：
3 - 3天；
7 - 一周；
30 - 一个月；
90 - 三个月；
180 - 六个月；
365 - 一年；
1095 - 三年；
1825 - 五年。
 * @method void setHighLogExpireDay(integer $HighLogExpireDay) 设置高频日志保留时长。默认值为7，此项取值需小于等于 LogExpireDay，支持值包括：
3 - 3天；
7 - 一周；
30 - 一个月；
90 - 三个月；
180 - 六个月；
365 - 一年；
1095 - 三年；
1825 - 五年。
 * @method boolean getAuditAll() 获取修改实例审计规则为全审计。
 * @method void setAuditAll(boolean $AuditAll) 设置修改实例审计规则为全审计。
 * @method array getAuditRuleFilters() 获取废弃。
 * @method void setAuditRuleFilters(array $AuditRuleFilters) 设置废弃。
 * @method array getRuleTemplateIds() 获取规则模板 ID。可通过 [DescribeAuditRuleTemplates](https://cloud.tencent.com/document/api/236/101811) 接口获取。
 * @method void setRuleTemplateIds(array $RuleTemplateIds) 设置规则模板 ID。可通过 [DescribeAuditRuleTemplates](https://cloud.tencent.com/document/api/236/101811) 接口获取。
 */
class ModifyAuditServiceRequest extends AbstractModel
{
    /**
     * @var string 实例 ID。可通过 [DescribeDBInstances](https://cloud.tencent.com/document/product/236/15872) 接口获取。
     */
    public $InstanceId;

    /**
     * @var integer 日志保留时长。支持值包括：
7 - 一周；
30 - 一个月；
90 - 三个月；
180 - 六个月；
365 - 一年；
1095 - 三年；
1825 - 五年。
     */
    public $LogExpireDay;

    /**
     * @var integer 高频日志保留时长。默认值为7，此项取值需小于等于 LogExpireDay，支持值包括：
3 - 3天；
7 - 一周；
30 - 一个月；
90 - 三个月；
180 - 六个月；
365 - 一年；
1095 - 三年；
1825 - 五年。
     */
    public $HighLogExpireDay;

    /**
     * @var boolean 修改实例审计规则为全审计。
     */
    public $AuditAll;

    /**
     * @var array 废弃。
     * @deprecated
     */
    public $AuditRuleFilters;

    /**
     * @var array 规则模板 ID。可通过 [DescribeAuditRuleTemplates](https://cloud.tencent.com/document/api/236/101811) 接口获取。
     */
    public $RuleTemplateIds;

    /**
     * @param string $InstanceId 实例 ID。可通过 [DescribeDBInstances](https://cloud.tencent.com/document/product/236/15872) 接口获取。
     * @param integer $LogExpireDay 日志保留时长。支持值包括：
7 - 一周；
30 - 一个月；
90 - 三个月；
180 - 六个月；
365 - 一年；
1095 - 三年；
1825 - 五年。
     * @param integer $HighLogExpireDay 高频日志保留时长。默认值为7，此项取值需小于等于 LogExpireDay，支持值包括：
3 - 3天；
7 - 一周；
30 - 一个月；
90 - 三个月；
180 - 六个月；
365 - 一年；
1095 - 三年；
1825 - 五年。
     * @param boolean $AuditAll 修改实例审计规则为全审计。
     * @param array $AuditRuleFilters 废弃。
     * @param array $RuleTemplateIds 规则模板 ID。可通过 [DescribeAuditRuleTemplates](https://cloud.tencent.com/document/api/236/101811) 接口获取。
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

        if (array_key_exists("AuditAll",$param) and $param["AuditAll"] !== null) {
            $this->AuditAll = $param["AuditAll"];
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
    }
}
