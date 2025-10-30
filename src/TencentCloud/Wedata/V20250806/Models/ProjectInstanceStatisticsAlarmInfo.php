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
namespace TencentCloud\Wedata\V20250806\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 告警规则项目波动率告警配置信息
 *
 * @method string getAlarmType() 获取告警类型 

projectFailureInstanceUpwardFluctuationAlarm: 失败实例向上波动告警

projectSuccessInstanceDownwardFluctuationAlarm： 成功实例向下波动告警
 * @method void setAlarmType(string $AlarmType) 设置告警类型 

projectFailureInstanceUpwardFluctuationAlarm: 失败实例向上波动告警

projectSuccessInstanceDownwardFluctuationAlarm： 成功实例向下波动告警
 * @method integer getInstanceThresholdCountPercent() 获取实例成功数向下波动比例告警阀值；实例失败数向上波动比例告警阀值
 * @method void setInstanceThresholdCountPercent(integer $InstanceThresholdCountPercent) 设置实例成功数向下波动比例告警阀值；实例失败数向上波动比例告警阀值
 * @method integer getInstanceThresholdCount() 获取累计实例数波动阀值
 * @method void setInstanceThresholdCount(integer $InstanceThresholdCount) 设置累计实例数波动阀值
 * @method integer getStabilizeThreshold() 获取稳定性次数阈值(防抖动配置统计周期数)
 * @method void setStabilizeThreshold(integer $StabilizeThreshold) 设置稳定性次数阈值(防抖动配置统计周期数)
 * @method integer getStabilizeStatisticsCycle() 获取稳定性统计周期(防抖动配置统计周期数)
 * @method void setStabilizeStatisticsCycle(integer $StabilizeStatisticsCycle) 设置稳定性统计周期(防抖动配置统计周期数)
 * @method boolean getIsCumulant() 获取是否累计计算,false:连续,true:累计
 * @method void setIsCumulant(boolean $IsCumulant) 设置是否累计计算,false:连续,true:累计
 * @method integer getInstanceCount() 获取当日累计实例数;
当天失败实例数向下波动量
 * @method void setInstanceCount(integer $InstanceCount) 设置当日累计实例数;
当天失败实例数向下波动量
 */
class ProjectInstanceStatisticsAlarmInfo extends AbstractModel
{
    /**
     * @var string 告警类型 

projectFailureInstanceUpwardFluctuationAlarm: 失败实例向上波动告警

projectSuccessInstanceDownwardFluctuationAlarm： 成功实例向下波动告警
     */
    public $AlarmType;

    /**
     * @var integer 实例成功数向下波动比例告警阀值；实例失败数向上波动比例告警阀值
     */
    public $InstanceThresholdCountPercent;

    /**
     * @var integer 累计实例数波动阀值
     */
    public $InstanceThresholdCount;

    /**
     * @var integer 稳定性次数阈值(防抖动配置统计周期数)
     */
    public $StabilizeThreshold;

    /**
     * @var integer 稳定性统计周期(防抖动配置统计周期数)
     */
    public $StabilizeStatisticsCycle;

    /**
     * @var boolean 是否累计计算,false:连续,true:累计
     */
    public $IsCumulant;

    /**
     * @var integer 当日累计实例数;
当天失败实例数向下波动量
     */
    public $InstanceCount;

    /**
     * @param string $AlarmType 告警类型 

projectFailureInstanceUpwardFluctuationAlarm: 失败实例向上波动告警

projectSuccessInstanceDownwardFluctuationAlarm： 成功实例向下波动告警
     * @param integer $InstanceThresholdCountPercent 实例成功数向下波动比例告警阀值；实例失败数向上波动比例告警阀值
     * @param integer $InstanceThresholdCount 累计实例数波动阀值
     * @param integer $StabilizeThreshold 稳定性次数阈值(防抖动配置统计周期数)
     * @param integer $StabilizeStatisticsCycle 稳定性统计周期(防抖动配置统计周期数)
     * @param boolean $IsCumulant 是否累计计算,false:连续,true:累计
     * @param integer $InstanceCount 当日累计实例数;
当天失败实例数向下波动量
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
        if (array_key_exists("AlarmType",$param) and $param["AlarmType"] !== null) {
            $this->AlarmType = $param["AlarmType"];
        }

        if (array_key_exists("InstanceThresholdCountPercent",$param) and $param["InstanceThresholdCountPercent"] !== null) {
            $this->InstanceThresholdCountPercent = $param["InstanceThresholdCountPercent"];
        }

        if (array_key_exists("InstanceThresholdCount",$param) and $param["InstanceThresholdCount"] !== null) {
            $this->InstanceThresholdCount = $param["InstanceThresholdCount"];
        }

        if (array_key_exists("StabilizeThreshold",$param) and $param["StabilizeThreshold"] !== null) {
            $this->StabilizeThreshold = $param["StabilizeThreshold"];
        }

        if (array_key_exists("StabilizeStatisticsCycle",$param) and $param["StabilizeStatisticsCycle"] !== null) {
            $this->StabilizeStatisticsCycle = $param["StabilizeStatisticsCycle"];
        }

        if (array_key_exists("IsCumulant",$param) and $param["IsCumulant"] !== null) {
            $this->IsCumulant = $param["IsCumulant"];
        }

        if (array_key_exists("InstanceCount",$param) and $param["InstanceCount"] !== null) {
            $this->InstanceCount = $param["InstanceCount"];
        }
    }
}
