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
 * DescribeAlarmHistoryShield返回参数结构体
 *
 * @method string getShieldId() 获取告警屏蔽规则的ID
 * @method void setShieldId(string $ShieldId) 设置告警屏蔽规则的ID
 * @method string getMonitorType() 获取监控类型
 * @method void setMonitorType(string $MonitorType) 设置监控类型
 * @method string getName() 获取屏蔽策略名称
 * @method void setName(string $Name) 设置屏蔽策略名称
 * @method integer getEnable() 获取是否开启 1=开启 0=关闭
 * @method void setEnable(integer $Enable) 设置是否开启 1=开启 0=关闭
 * @method string getMonitorTypeShowName() 获取监控类型展示名称
 * @method void setMonitorTypeShowName(string $MonitorTypeShowName) 设置监控类型展示名称
 * @method string getNameSpace() 获取命名空间即策略类型
 * @method void setNameSpace(string $NameSpace) 设置命名空间即策略类型
 * @method string getNameSpaceShowName() 获取策略类型展示名称
 * @method void setNameSpaceShowName(string $NameSpaceShowName) 设置策略类型展示名称
 * @method array getShieldObject() 获取屏蔽对象
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setShieldObject(array $ShieldObject) 设置屏蔽对象
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getShieldMetric() 获取屏蔽指标列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setShieldMetric(array $ShieldMetric) 设置屏蔽指标列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getShieldTimeType() 获取屏蔽时间类型 FOREVER_SHIELD:永久屏蔽 PERIOD_SHIELD:绝对时间范围屏蔽 LOOP_SHIELD:相对时间范围屏蔽
 * @method void setShieldTimeType(string $ShieldTimeType) 设置屏蔽时间类型 FOREVER_SHIELD:永久屏蔽 PERIOD_SHIELD:绝对时间范围屏蔽 LOOP_SHIELD:相对时间范围屏蔽
 * @method integer getStartTime() 获取开始时间 10:00
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setStartTime(integer $StartTime) 设置开始时间 10:00
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getEndTime() 获取结束时间 20:00
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setEndTime(integer $EndTime) 设置结束时间 20:00
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getLoopStartDate() 获取循环开始日期 2022/04/01
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLoopStartDate(integer $LoopStartDate) 设置循环开始日期 2022/04/01
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getLoopEndDate() 获取循环结束日期 2022/04/05
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLoopEndDate(integer $LoopEndDate) 设置循环结束日期 2022/04/05
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCurrentStatus() 获取NOT_TRIGGERED:未生效 TRIGGERING:生效中 EXPIRED:已过期
 * @method void setCurrentStatus(string $CurrentStatus) 设置NOT_TRIGGERED:未生效 TRIGGERING:生效中 EXPIRED:已过期
 * @method string getShieldPolicyId() 获取需要屏蔽的策略ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setShieldPolicyId(string $ShieldPolicyId) 设置需要屏蔽的策略ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getShieldAlarmLevel() 获取需要屏蔽的告警等级
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setShieldAlarmLevel(array $ShieldAlarmLevel) 设置需要屏蔽的告警等级
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getShieldTag() 获取屏蔽类型，1为维度屏蔽，0为实例名称屏蔽
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setShieldTag(string $ShieldTag) 设置屏蔽类型，1为维度屏蔽，0为实例名称屏蔽
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getMetricName() 获取指标名称
 * @method void setMetricName(string $MetricName) 设置指标名称
 * @method float getTimeZone() 获取时区
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTimeZone(float $TimeZone) 设置时区
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getSessionId() 获取告警历史会话ID
 * @method void setSessionId(string $SessionId) 设置告警历史会话ID
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeAlarmHistoryShieldResponse extends AbstractModel
{
    /**
     * @var string 告警屏蔽规则的ID
     */
    public $ShieldId;

    /**
     * @var string 监控类型
     */
    public $MonitorType;

    /**
     * @var string 屏蔽策略名称
     */
    public $Name;

    /**
     * @var integer 是否开启 1=开启 0=关闭
     */
    public $Enable;

    /**
     * @var string 监控类型展示名称
     */
    public $MonitorTypeShowName;

    /**
     * @var string 命名空间即策略类型
     */
    public $NameSpace;

    /**
     * @var string 策略类型展示名称
     */
    public $NameSpaceShowName;

    /**
     * @var array 屏蔽对象
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ShieldObject;

    /**
     * @var array 屏蔽指标列表
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ShieldMetric;

    /**
     * @var string 屏蔽时间类型 FOREVER_SHIELD:永久屏蔽 PERIOD_SHIELD:绝对时间范围屏蔽 LOOP_SHIELD:相对时间范围屏蔽
     */
    public $ShieldTimeType;

    /**
     * @var integer 开始时间 10:00
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $StartTime;

    /**
     * @var integer 结束时间 20:00
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $EndTime;

    /**
     * @var integer 循环开始日期 2022/04/01
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $LoopStartDate;

    /**
     * @var integer 循环结束日期 2022/04/05
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $LoopEndDate;

    /**
     * @var string NOT_TRIGGERED:未生效 TRIGGERING:生效中 EXPIRED:已过期
     */
    public $CurrentStatus;

    /**
     * @var string 需要屏蔽的策略ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ShieldPolicyId;

    /**
     * @var array 需要屏蔽的告警等级
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ShieldAlarmLevel;

    /**
     * @var string 屏蔽类型，1为维度屏蔽，0为实例名称屏蔽
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ShieldTag;

    /**
     * @var string 指标名称
     */
    public $MetricName;

    /**
     * @var float 时区
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TimeZone;

    /**
     * @var string 告警历史会话ID
     */
    public $SessionId;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param string $ShieldId 告警屏蔽规则的ID
     * @param string $MonitorType 监控类型
     * @param string $Name 屏蔽策略名称
     * @param integer $Enable 是否开启 1=开启 0=关闭
     * @param string $MonitorTypeShowName 监控类型展示名称
     * @param string $NameSpace 命名空间即策略类型
     * @param string $NameSpaceShowName 策略类型展示名称
     * @param array $ShieldObject 屏蔽对象
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $ShieldMetric 屏蔽指标列表
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ShieldTimeType 屏蔽时间类型 FOREVER_SHIELD:永久屏蔽 PERIOD_SHIELD:绝对时间范围屏蔽 LOOP_SHIELD:相对时间范围屏蔽
     * @param integer $StartTime 开始时间 10:00
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $EndTime 结束时间 20:00
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $LoopStartDate 循环开始日期 2022/04/01
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $LoopEndDate 循环结束日期 2022/04/05
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CurrentStatus NOT_TRIGGERED:未生效 TRIGGERING:生效中 EXPIRED:已过期
     * @param string $ShieldPolicyId 需要屏蔽的策略ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $ShieldAlarmLevel 需要屏蔽的告警等级
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ShieldTag 屏蔽类型，1为维度屏蔽，0为实例名称屏蔽
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $MetricName 指标名称
     * @param float $TimeZone 时区
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $SessionId 告警历史会话ID
     * @param string $RequestId 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
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
        if (array_key_exists("ShieldId",$param) and $param["ShieldId"] !== null) {
            $this->ShieldId = $param["ShieldId"];
        }

        if (array_key_exists("MonitorType",$param) and $param["MonitorType"] !== null) {
            $this->MonitorType = $param["MonitorType"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Enable",$param) and $param["Enable"] !== null) {
            $this->Enable = $param["Enable"];
        }

        if (array_key_exists("MonitorTypeShowName",$param) and $param["MonitorTypeShowName"] !== null) {
            $this->MonitorTypeShowName = $param["MonitorTypeShowName"];
        }

        if (array_key_exists("NameSpace",$param) and $param["NameSpace"] !== null) {
            $this->NameSpace = $param["NameSpace"];
        }

        if (array_key_exists("NameSpaceShowName",$param) and $param["NameSpaceShowName"] !== null) {
            $this->NameSpaceShowName = $param["NameSpaceShowName"];
        }

        if (array_key_exists("ShieldObject",$param) and $param["ShieldObject"] !== null) {
            $this->ShieldObject = $param["ShieldObject"];
        }

        if (array_key_exists("ShieldMetric",$param) and $param["ShieldMetric"] !== null) {
            $this->ShieldMetric = [];
            foreach ($param["ShieldMetric"] as $key => $value){
                $obj = new ShieldMetric();
                $obj->deserialize($value);
                array_push($this->ShieldMetric, $obj);
            }
        }

        if (array_key_exists("ShieldTimeType",$param) and $param["ShieldTimeType"] !== null) {
            $this->ShieldTimeType = $param["ShieldTimeType"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("LoopStartDate",$param) and $param["LoopStartDate"] !== null) {
            $this->LoopStartDate = $param["LoopStartDate"];
        }

        if (array_key_exists("LoopEndDate",$param) and $param["LoopEndDate"] !== null) {
            $this->LoopEndDate = $param["LoopEndDate"];
        }

        if (array_key_exists("CurrentStatus",$param) and $param["CurrentStatus"] !== null) {
            $this->CurrentStatus = $param["CurrentStatus"];
        }

        if (array_key_exists("ShieldPolicyId",$param) and $param["ShieldPolicyId"] !== null) {
            $this->ShieldPolicyId = $param["ShieldPolicyId"];
        }

        if (array_key_exists("ShieldAlarmLevel",$param) and $param["ShieldAlarmLevel"] !== null) {
            $this->ShieldAlarmLevel = $param["ShieldAlarmLevel"];
        }

        if (array_key_exists("ShieldTag",$param) and $param["ShieldTag"] !== null) {
            $this->ShieldTag = $param["ShieldTag"];
        }

        if (array_key_exists("MetricName",$param) and $param["MetricName"] !== null) {
            $this->MetricName = $param["MetricName"];
        }

        if (array_key_exists("TimeZone",$param) and $param["TimeZone"] !== null) {
            $this->TimeZone = $param["TimeZone"];
        }

        if (array_key_exists("SessionId",$param) and $param["SessionId"] !== null) {
            $this->SessionId = $param["SessionId"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
