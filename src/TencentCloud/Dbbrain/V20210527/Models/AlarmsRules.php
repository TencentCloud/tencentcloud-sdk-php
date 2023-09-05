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
namespace TencentCloud\Dbbrain\V20210527\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 告警规则
 *
 * @method integer getInterval() 获取间隔
 * @method void setInterval(integer $Interval) 设置间隔
 * @method string getName() 获取告警名
 * @method void setName(string $Name) 设置告警名
 * @method string getMetric() 获取指标
 * @method void setMetric(string $Metric) 设置指标
 * @method string getOperator() 获取操作符
 * @method void setOperator(string $Operator) 设置操作符
 * @method string getSeverity() 获取等级 
fatal-致命
critical-严重
warning-告警
information-通知

 * @method void setSeverity(string $Severity) 设置等级 
fatal-致命
critical-严重
warning-告警
information-通知

 * @method float getValue() 获取指标值
 * @method void setValue(float $Value) 设置指标值
 */
class AlarmsRules extends AbstractModel
{
    /**
     * @var integer 间隔
     */
    public $Interval;

    /**
     * @var string 告警名
     */
    public $Name;

    /**
     * @var string 指标
     */
    public $Metric;

    /**
     * @var string 操作符
     */
    public $Operator;

    /**
     * @var string 等级 
fatal-致命
critical-严重
warning-告警
information-通知

     */
    public $Severity;

    /**
     * @var float 指标值
     */
    public $Value;

    /**
     * @param integer $Interval 间隔
     * @param string $Name 告警名
     * @param string $Metric 指标
     * @param string $Operator 操作符
     * @param string $Severity 等级 
fatal-致命
critical-严重
warning-告警
information-通知

     * @param float $Value 指标值
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
        if (array_key_exists("Interval",$param) and $param["Interval"] !== null) {
            $this->Interval = $param["Interval"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Metric",$param) and $param["Metric"] !== null) {
            $this->Metric = $param["Metric"];
        }

        if (array_key_exists("Operator",$param) and $param["Operator"] !== null) {
            $this->Operator = $param["Operator"];
        }

        if (array_key_exists("Severity",$param) and $param["Severity"] !== null) {
            $this->Severity = $param["Severity"];
        }

        if (array_key_exists("Value",$param) and $param["Value"] !== null) {
            $this->Value = $param["Value"];
        }
    }
}
