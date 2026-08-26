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
namespace TencentCloud\Monitor\V20180724\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeAlarmHistoryShield请求参数结构体
 *
 * @method string getModule() 获取模块名，这里填“monitor”
 * @method void setModule(string $Module) 设置模块名，这里填“monitor”
 * @method string getShieldPolicyId() 获取策略id
 * @method void setShieldPolicyId(string $ShieldPolicyId) 设置策略id
 * @method array getShieldObject() 获取告警历史维度
 * @method void setShieldObject(array $ShieldObject) 设置告警历史维度
 * @method string getMetricName() 获取指标名称
 * @method void setMetricName(string $MetricName) 设置指标名称
 * @method string getShieldId() 获取屏蔽策略Id
 * @method void setShieldId(string $ShieldId) 设置屏蔽策略Id
 * @method string getShieldAlarmLevel() 获取告警等级
 * @method void setShieldAlarmLevel(string $ShieldAlarmLevel) 设置告警等级
 * @method string getSessionId() 获取告警历史会话ID
 * @method void setSessionId(string $SessionId) 设置告警历史会话ID
 * @method string getMonitorType() 获取监控类型
 * @method void setMonitorType(string $MonitorType) 设置监控类型
 */
class DescribeAlarmHistoryShieldRequest extends AbstractModel
{
    /**
     * @var string 模块名，这里填“monitor”
     */
    public $Module;

    /**
     * @var string 策略id
     */
    public $ShieldPolicyId;

    /**
     * @var array 告警历史维度
     */
    public $ShieldObject;

    /**
     * @var string 指标名称
     */
    public $MetricName;

    /**
     * @var string 屏蔽策略Id
     */
    public $ShieldId;

    /**
     * @var string 告警等级
     */
    public $ShieldAlarmLevel;

    /**
     * @var string 告警历史会话ID
     */
    public $SessionId;

    /**
     * @var string 监控类型
     */
    public $MonitorType;

    /**
     * @param string $Module 模块名，这里填“monitor”
     * @param string $ShieldPolicyId 策略id
     * @param array $ShieldObject 告警历史维度
     * @param string $MetricName 指标名称
     * @param string $ShieldId 屏蔽策略Id
     * @param string $ShieldAlarmLevel 告警等级
     * @param string $SessionId 告警历史会话ID
     * @param string $MonitorType 监控类型
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
        if (array_key_exists("Module",$param) and $param["Module"] !== null) {
            $this->Module = $param["Module"];
        }

        if (array_key_exists("ShieldPolicyId",$param) and $param["ShieldPolicyId"] !== null) {
            $this->ShieldPolicyId = $param["ShieldPolicyId"];
        }

        if (array_key_exists("ShieldObject",$param) and $param["ShieldObject"] !== null) {
            $this->ShieldObject = $param["ShieldObject"];
        }

        if (array_key_exists("MetricName",$param) and $param["MetricName"] !== null) {
            $this->MetricName = $param["MetricName"];
        }

        if (array_key_exists("ShieldId",$param) and $param["ShieldId"] !== null) {
            $this->ShieldId = $param["ShieldId"];
        }

        if (array_key_exists("ShieldAlarmLevel",$param) and $param["ShieldAlarmLevel"] !== null) {
            $this->ShieldAlarmLevel = $param["ShieldAlarmLevel"];
        }

        if (array_key_exists("SessionId",$param) and $param["SessionId"] !== null) {
            $this->SessionId = $param["SessionId"];
        }

        if (array_key_exists("MonitorType",$param) and $param["MonitorType"] !== null) {
            $this->MonitorType = $param["MonitorType"];
        }
    }
}
