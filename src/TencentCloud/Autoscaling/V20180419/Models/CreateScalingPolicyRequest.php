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
namespace TencentCloud\Autoscaling\V20180419\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateScalingPolicy请求参数结构体
 *
 * @method string getAutoScalingGroupId() 获取伸缩组ID。
 * @method void setAutoScalingGroupId(string $AutoScalingGroupId) 设置伸缩组ID。
 * @method string getScalingPolicyName() 获取告警触发策略名称。
 * @method void setScalingPolicyName(string $ScalingPolicyName) 设置告警触发策略名称。
 * @method string getScalingPolicyType() 获取告警触发策略类型，默认类型为SIMPLE。取值范围：<br><li>SIMPLE：简单策略</li><li>TARGET_TRACKING：目标追踪策略</li>
 * @method void setScalingPolicyType(string $ScalingPolicyType) 设置告警触发策略类型，默认类型为SIMPLE。取值范围：<br><li>SIMPLE：简单策略</li><li>TARGET_TRACKING：目标追踪策略</li>
 * @method string getAdjustmentType() 获取告警触发后，期望实例数修改方式，仅适用于简单策略。取值范围：<br><li>CHANGE_IN_CAPACITY：增加或减少若干期望实例数</li><li>EXACT_CAPACITY：调整至指定期望实例数</li> <li>PERCENT_CHANGE_IN_CAPACITY：按百分比调整期望实例数</li>
 * @method void setAdjustmentType(string $AdjustmentType) 设置告警触发后，期望实例数修改方式，仅适用于简单策略。取值范围：<br><li>CHANGE_IN_CAPACITY：增加或减少若干期望实例数</li><li>EXACT_CAPACITY：调整至指定期望实例数</li> <li>PERCENT_CHANGE_IN_CAPACITY：按百分比调整期望实例数</li>
 * @method integer getAdjustmentValue() 获取告警触发后，期望实例数的调整值，仅适用于简单策略。<br><li>当 AdjustmentType 为 CHANGE_IN_CAPACITY 时，AdjustmentValue 为正数表示告警触发后增加实例，为负数表示告警触发后减少实例 </li> <li> 当 AdjustmentType 为 EXACT_CAPACITY 时，AdjustmentValue 的值即为告警触发后新的期望实例数，需要大于或等于0 </li> <li> 当 AdjustmentType 为 PERCENT_CHANGE_IN_CAPACITY 时，AdjusmentValue 为正数表示告警触发后按百分比增加实例，为负数表示告警触发后按百分比减少实例，单位是：%。
 * @method void setAdjustmentValue(integer $AdjustmentValue) 设置告警触发后，期望实例数的调整值，仅适用于简单策略。<br><li>当 AdjustmentType 为 CHANGE_IN_CAPACITY 时，AdjustmentValue 为正数表示告警触发后增加实例，为负数表示告警触发后减少实例 </li> <li> 当 AdjustmentType 为 EXACT_CAPACITY 时，AdjustmentValue 的值即为告警触发后新的期望实例数，需要大于或等于0 </li> <li> 当 AdjustmentType 为 PERCENT_CHANGE_IN_CAPACITY 时，AdjusmentValue 为正数表示告警触发后按百分比增加实例，为负数表示告警触发后按百分比减少实例，单位是：%。
 * @method integer getCooldown() 获取冷却时间，单位为秒，仅适用于简单策略。默认冷却时间300秒。
 * @method void setCooldown(integer $Cooldown) 设置冷却时间，单位为秒，仅适用于简单策略。默认冷却时间300秒。
 * @method MetricAlarm getMetricAlarm() 获取告警监控指标，仅适用于简单策略。
 * @method void setMetricAlarm(MetricAlarm $MetricAlarm) 设置告警监控指标，仅适用于简单策略。
 * @method string getPredefinedMetricType() 获取预定义监控项，仅适用于目标追踪策略。取值范围：<br><li>ASG_AVG_CPU_UTILIZATION：平均CPU使用率</li><li>ASG_AVG_LAN_TRAFFIC_OUT：平均内网出带宽</li><li>ASG_AVG_LAN_TRAFFIC_IN：平均内网入带宽</li><li>ASG_AVG_WAN_TRAFFIC_OUT：平均外网出带宽</li><li>ASG_AVG_WAN_TRAFFIC_IN：平均外网出带宽</li>
 * @method void setPredefinedMetricType(string $PredefinedMetricType) 设置预定义监控项，仅适用于目标追踪策略。取值范围：<br><li>ASG_AVG_CPU_UTILIZATION：平均CPU使用率</li><li>ASG_AVG_LAN_TRAFFIC_OUT：平均内网出带宽</li><li>ASG_AVG_LAN_TRAFFIC_IN：平均内网入带宽</li><li>ASG_AVG_WAN_TRAFFIC_OUT：平均外网出带宽</li><li>ASG_AVG_WAN_TRAFFIC_IN：平均外网出带宽</li>
 * @method integer getTargetValue() 获取目标值，仅适用于目标追踪策略。<br><li>ASG_AVG_CPU_UTILIZATION：[1, 100)，单位：%</li><li>ASG_AVG_LAN_TRAFFIC_OUT：>0，单位：Mbps</li><li>ASG_AVG_LAN_TRAFFIC_IN：>0，单位：Mbps</li><li>ASG_AVG_WAN_TRAFFIC_OUT：>0，单位：Mbps</li><li>ASG_AVG_WAN_TRAFFIC_IN：>0，单位：Mbps</li>
 * @method void setTargetValue(integer $TargetValue) 设置目标值，仅适用于目标追踪策略。<br><li>ASG_AVG_CPU_UTILIZATION：[1, 100)，单位：%</li><li>ASG_AVG_LAN_TRAFFIC_OUT：>0，单位：Mbps</li><li>ASG_AVG_LAN_TRAFFIC_IN：>0，单位：Mbps</li><li>ASG_AVG_WAN_TRAFFIC_OUT：>0，单位：Mbps</li><li>ASG_AVG_WAN_TRAFFIC_IN：>0，单位：Mbps</li>
 * @method integer getEstimatedInstanceWarmup() 获取实例预热时间，单位为秒，仅适用于目标追踪策略。取值范围为0-3600，默认预热时间300秒。
 * @method void setEstimatedInstanceWarmup(integer $EstimatedInstanceWarmup) 设置实例预热时间，单位为秒，仅适用于目标追踪策略。取值范围为0-3600，默认预热时间300秒。
 * @method boolean getDisableScaleIn() 获取是否禁用缩容，仅适用于目标追踪策略，默认值为 false。取值范围：<br><li>true：目标追踪策略仅触发扩容</li><li>false：目标追踪策略触发扩容和缩容</li>
 * @method void setDisableScaleIn(boolean $DisableScaleIn) 设置是否禁用缩容，仅适用于目标追踪策略，默认值为 false。取值范围：<br><li>true：目标追踪策略仅触发扩容</li><li>false：目标追踪策略触发扩容和缩容</li>
 * @method array getNotificationUserGroupIds() 获取此参数已不再生效，请使用[创建通知](https://cloud.tencent.com/document/api/377/33185)。
通知组ID，即为用户组ID集合。
 * @method void setNotificationUserGroupIds(array $NotificationUserGroupIds) 设置此参数已不再生效，请使用[创建通知](https://cloud.tencent.com/document/api/377/33185)。
通知组ID，即为用户组ID集合。
 */
class CreateScalingPolicyRequest extends AbstractModel
{
    /**
     * @var string 伸缩组ID。
     */
    public $AutoScalingGroupId;

    /**
     * @var string 告警触发策略名称。
     */
    public $ScalingPolicyName;

    /**
     * @var string 告警触发策略类型，默认类型为SIMPLE。取值范围：<br><li>SIMPLE：简单策略</li><li>TARGET_TRACKING：目标追踪策略</li>
     */
    public $ScalingPolicyType;

    /**
     * @var string 告警触发后，期望实例数修改方式，仅适用于简单策略。取值范围：<br><li>CHANGE_IN_CAPACITY：增加或减少若干期望实例数</li><li>EXACT_CAPACITY：调整至指定期望实例数</li> <li>PERCENT_CHANGE_IN_CAPACITY：按百分比调整期望实例数</li>
     */
    public $AdjustmentType;

    /**
     * @var integer 告警触发后，期望实例数的调整值，仅适用于简单策略。<br><li>当 AdjustmentType 为 CHANGE_IN_CAPACITY 时，AdjustmentValue 为正数表示告警触发后增加实例，为负数表示告警触发后减少实例 </li> <li> 当 AdjustmentType 为 EXACT_CAPACITY 时，AdjustmentValue 的值即为告警触发后新的期望实例数，需要大于或等于0 </li> <li> 当 AdjustmentType 为 PERCENT_CHANGE_IN_CAPACITY 时，AdjusmentValue 为正数表示告警触发后按百分比增加实例，为负数表示告警触发后按百分比减少实例，单位是：%。
     */
    public $AdjustmentValue;

    /**
     * @var integer 冷却时间，单位为秒，仅适用于简单策略。默认冷却时间300秒。
     */
    public $Cooldown;

    /**
     * @var MetricAlarm 告警监控指标，仅适用于简单策略。
     */
    public $MetricAlarm;

    /**
     * @var string 预定义监控项，仅适用于目标追踪策略。取值范围：<br><li>ASG_AVG_CPU_UTILIZATION：平均CPU使用率</li><li>ASG_AVG_LAN_TRAFFIC_OUT：平均内网出带宽</li><li>ASG_AVG_LAN_TRAFFIC_IN：平均内网入带宽</li><li>ASG_AVG_WAN_TRAFFIC_OUT：平均外网出带宽</li><li>ASG_AVG_WAN_TRAFFIC_IN：平均外网出带宽</li>
     */
    public $PredefinedMetricType;

    /**
     * @var integer 目标值，仅适用于目标追踪策略。<br><li>ASG_AVG_CPU_UTILIZATION：[1, 100)，单位：%</li><li>ASG_AVG_LAN_TRAFFIC_OUT：>0，单位：Mbps</li><li>ASG_AVG_LAN_TRAFFIC_IN：>0，单位：Mbps</li><li>ASG_AVG_WAN_TRAFFIC_OUT：>0，单位：Mbps</li><li>ASG_AVG_WAN_TRAFFIC_IN：>0，单位：Mbps</li>
     */
    public $TargetValue;

    /**
     * @var integer 实例预热时间，单位为秒，仅适用于目标追踪策略。取值范围为0-3600，默认预热时间300秒。
     */
    public $EstimatedInstanceWarmup;

    /**
     * @var boolean 是否禁用缩容，仅适用于目标追踪策略，默认值为 false。取值范围：<br><li>true：目标追踪策略仅触发扩容</li><li>false：目标追踪策略触发扩容和缩容</li>
     */
    public $DisableScaleIn;

    /**
     * @var array 此参数已不再生效，请使用[创建通知](https://cloud.tencent.com/document/api/377/33185)。
通知组ID，即为用户组ID集合。
     */
    public $NotificationUserGroupIds;

    /**
     * @param string $AutoScalingGroupId 伸缩组ID。
     * @param string $ScalingPolicyName 告警触发策略名称。
     * @param string $ScalingPolicyType 告警触发策略类型，默认类型为SIMPLE。取值范围：<br><li>SIMPLE：简单策略</li><li>TARGET_TRACKING：目标追踪策略</li>
     * @param string $AdjustmentType 告警触发后，期望实例数修改方式，仅适用于简单策略。取值范围：<br><li>CHANGE_IN_CAPACITY：增加或减少若干期望实例数</li><li>EXACT_CAPACITY：调整至指定期望实例数</li> <li>PERCENT_CHANGE_IN_CAPACITY：按百分比调整期望实例数</li>
     * @param integer $AdjustmentValue 告警触发后，期望实例数的调整值，仅适用于简单策略。<br><li>当 AdjustmentType 为 CHANGE_IN_CAPACITY 时，AdjustmentValue 为正数表示告警触发后增加实例，为负数表示告警触发后减少实例 </li> <li> 当 AdjustmentType 为 EXACT_CAPACITY 时，AdjustmentValue 的值即为告警触发后新的期望实例数，需要大于或等于0 </li> <li> 当 AdjustmentType 为 PERCENT_CHANGE_IN_CAPACITY 时，AdjusmentValue 为正数表示告警触发后按百分比增加实例，为负数表示告警触发后按百分比减少实例，单位是：%。
     * @param integer $Cooldown 冷却时间，单位为秒，仅适用于简单策略。默认冷却时间300秒。
     * @param MetricAlarm $MetricAlarm 告警监控指标，仅适用于简单策略。
     * @param string $PredefinedMetricType 预定义监控项，仅适用于目标追踪策略。取值范围：<br><li>ASG_AVG_CPU_UTILIZATION：平均CPU使用率</li><li>ASG_AVG_LAN_TRAFFIC_OUT：平均内网出带宽</li><li>ASG_AVG_LAN_TRAFFIC_IN：平均内网入带宽</li><li>ASG_AVG_WAN_TRAFFIC_OUT：平均外网出带宽</li><li>ASG_AVG_WAN_TRAFFIC_IN：平均外网出带宽</li>
     * @param integer $TargetValue 目标值，仅适用于目标追踪策略。<br><li>ASG_AVG_CPU_UTILIZATION：[1, 100)，单位：%</li><li>ASG_AVG_LAN_TRAFFIC_OUT：>0，单位：Mbps</li><li>ASG_AVG_LAN_TRAFFIC_IN：>0，单位：Mbps</li><li>ASG_AVG_WAN_TRAFFIC_OUT：>0，单位：Mbps</li><li>ASG_AVG_WAN_TRAFFIC_IN：>0，单位：Mbps</li>
     * @param integer $EstimatedInstanceWarmup 实例预热时间，单位为秒，仅适用于目标追踪策略。取值范围为0-3600，默认预热时间300秒。
     * @param boolean $DisableScaleIn 是否禁用缩容，仅适用于目标追踪策略，默认值为 false。取值范围：<br><li>true：目标追踪策略仅触发扩容</li><li>false：目标追踪策略触发扩容和缩容</li>
     * @param array $NotificationUserGroupIds 此参数已不再生效，请使用[创建通知](https://cloud.tencent.com/document/api/377/33185)。
通知组ID，即为用户组ID集合。
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
        if (array_key_exists("AutoScalingGroupId",$param) and $param["AutoScalingGroupId"] !== null) {
            $this->AutoScalingGroupId = $param["AutoScalingGroupId"];
        }

        if (array_key_exists("ScalingPolicyName",$param) and $param["ScalingPolicyName"] !== null) {
            $this->ScalingPolicyName = $param["ScalingPolicyName"];
        }

        if (array_key_exists("ScalingPolicyType",$param) and $param["ScalingPolicyType"] !== null) {
            $this->ScalingPolicyType = $param["ScalingPolicyType"];
        }

        if (array_key_exists("AdjustmentType",$param) and $param["AdjustmentType"] !== null) {
            $this->AdjustmentType = $param["AdjustmentType"];
        }

        if (array_key_exists("AdjustmentValue",$param) and $param["AdjustmentValue"] !== null) {
            $this->AdjustmentValue = $param["AdjustmentValue"];
        }

        if (array_key_exists("Cooldown",$param) and $param["Cooldown"] !== null) {
            $this->Cooldown = $param["Cooldown"];
        }

        if (array_key_exists("MetricAlarm",$param) and $param["MetricAlarm"] !== null) {
            $this->MetricAlarm = new MetricAlarm();
            $this->MetricAlarm->deserialize($param["MetricAlarm"]);
        }

        if (array_key_exists("PredefinedMetricType",$param) and $param["PredefinedMetricType"] !== null) {
            $this->PredefinedMetricType = $param["PredefinedMetricType"];
        }

        if (array_key_exists("TargetValue",$param) and $param["TargetValue"] !== null) {
            $this->TargetValue = $param["TargetValue"];
        }

        if (array_key_exists("EstimatedInstanceWarmup",$param) and $param["EstimatedInstanceWarmup"] !== null) {
            $this->EstimatedInstanceWarmup = $param["EstimatedInstanceWarmup"];
        }

        if (array_key_exists("DisableScaleIn",$param) and $param["DisableScaleIn"] !== null) {
            $this->DisableScaleIn = $param["DisableScaleIn"];
        }

        if (array_key_exists("NotificationUserGroupIds",$param) and $param["NotificationUserGroupIds"] !== null) {
            $this->NotificationUserGroupIds = $param["NotificationUserGroupIds"];
        }
    }
}
