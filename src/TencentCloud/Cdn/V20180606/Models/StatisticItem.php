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
namespace TencentCloud\Cdn\V20180606\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 累计用量封顶的配置
 *
 * @method string getType() 获取封顶类型，累计用量total，瞬时用量moment
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setType(string $Type) 设置封顶类型，累计用量total，瞬时用量moment
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getUnBlockTime() 获取自动解封时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUnBlockTime(integer $UnBlockTime) 设置自动解封时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getBpsThreshold() 获取带宽、流量阈值
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setBpsThreshold(integer $BpsThreshold) 设置带宽、流量阈值
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCounterMeasure() 获取关闭方式 返回404:RETURN_404, dns回源：RESOLVE_DNS_TO_ORIGIN
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCounterMeasure(string $CounterMeasure) 设置关闭方式 返回404:RETURN_404, dns回源：RESOLVE_DNS_TO_ORIGIN
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getAlertPercentage() 获取触发提醒阈值百分比
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAlertPercentage(integer $AlertPercentage) 设置触发提醒阈值百分比
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getAlertSwitch() 获取提醒开关 on/off
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAlertSwitch(string $AlertSwitch) 设置提醒开关 on/off
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getMetric() 获取指标类型，流量flux或带宽bandwidth
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMetric(string $Metric) 设置指标类型，流量flux或带宽bandwidth
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getCycle() 获取检测周期，单位分钟，60或1440
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCycle(integer $Cycle) 设置检测周期，单位分钟，60或1440
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getSwitch() 获取是否开启该选项，on/off
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSwitch(string $Switch) 设置是否开启该选项，on/off
注意：此字段可能返回 null，表示取不到有效值。
 */
class StatisticItem extends AbstractModel
{
    /**
     * @var string 封顶类型，累计用量total，瞬时用量moment
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Type;

    /**
     * @var integer 自动解封时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $UnBlockTime;

    /**
     * @var integer 带宽、流量阈值
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $BpsThreshold;

    /**
     * @var string 关闭方式 返回404:RETURN_404, dns回源：RESOLVE_DNS_TO_ORIGIN
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CounterMeasure;

    /**
     * @var integer 触发提醒阈值百分比
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AlertPercentage;

    /**
     * @var string 提醒开关 on/off
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AlertSwitch;

    /**
     * @var string 指标类型，流量flux或带宽bandwidth
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Metric;

    /**
     * @var integer 检测周期，单位分钟，60或1440
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Cycle;

    /**
     * @var string 是否开启该选项，on/off
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Switch;

    /**
     * @param string $Type 封顶类型，累计用量total，瞬时用量moment
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $UnBlockTime 自动解封时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $BpsThreshold 带宽、流量阈值
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CounterMeasure 关闭方式 返回404:RETURN_404, dns回源：RESOLVE_DNS_TO_ORIGIN
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $AlertPercentage 触发提醒阈值百分比
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $AlertSwitch 提醒开关 on/off
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Metric 指标类型，流量flux或带宽bandwidth
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Cycle 检测周期，单位分钟，60或1440
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Switch 是否开启该选项，on/off
注意：此字段可能返回 null，表示取不到有效值。
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
        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("UnBlockTime",$param) and $param["UnBlockTime"] !== null) {
            $this->UnBlockTime = $param["UnBlockTime"];
        }

        if (array_key_exists("BpsThreshold",$param) and $param["BpsThreshold"] !== null) {
            $this->BpsThreshold = $param["BpsThreshold"];
        }

        if (array_key_exists("CounterMeasure",$param) and $param["CounterMeasure"] !== null) {
            $this->CounterMeasure = $param["CounterMeasure"];
        }

        if (array_key_exists("AlertPercentage",$param) and $param["AlertPercentage"] !== null) {
            $this->AlertPercentage = $param["AlertPercentage"];
        }

        if (array_key_exists("AlertSwitch",$param) and $param["AlertSwitch"] !== null) {
            $this->AlertSwitch = $param["AlertSwitch"];
        }

        if (array_key_exists("Metric",$param) and $param["Metric"] !== null) {
            $this->Metric = $param["Metric"];
        }

        if (array_key_exists("Cycle",$param) and $param["Cycle"] !== null) {
            $this->Cycle = $param["Cycle"];
        }

        if (array_key_exists("Switch",$param) and $param["Switch"] !== null) {
            $this->Switch = $param["Switch"];
        }
    }
}
