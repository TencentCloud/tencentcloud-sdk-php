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
 * 带宽封顶配置，默认为关闭状态
 *
 * @method string getSwitch() 获取用量封顶配置开关
on：开启
off：关闭
 * @method void setSwitch(string $Switch) 设置用量封顶配置开关
on：开启
off：关闭
 * @method integer getBpsThreshold() 获取用量封顶阈值，带宽单位为bps，流量单位byte
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setBpsThreshold(integer $BpsThreshold) 设置用量封顶阈值，带宽单位为bps，流量单位byte
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCounterMeasure() 获取达到阈值后的操作
RETURN_404：全部请求返回 404
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCounterMeasure(string $CounterMeasure) 设置达到阈值后的操作
RETURN_404：全部请求返回 404
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getLastTriggerTime() 获取境内区域上次触发用量封顶阈值的时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLastTriggerTime(string $LastTriggerTime) 设置境内区域上次触发用量封顶阈值的时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getAlertSwitch() 获取用量封顶提醒开关
on：开启
off：关闭
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAlertSwitch(string $AlertSwitch) 设置用量封顶提醒开关
on：开启
off：关闭
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getAlertPercentage() 获取用量封顶阈值提醒百分比
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAlertPercentage(integer $AlertPercentage) 设置用量封顶阈值提醒百分比
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getLastTriggerTimeOverseas() 获取海外区域上次触发用量封顶阈值的时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLastTriggerTimeOverseas(string $LastTriggerTimeOverseas) 设置海外区域上次触发用量封顶阈值的时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getMetric() 获取用量阈值触发的维度
带宽：bandwidth
流量：flux
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMetric(string $Metric) 设置用量阈值触发的维度
带宽：bandwidth
流量：flux
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getStatisticItems() 获取累计用量配置
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setStatisticItems(array $StatisticItems) 设置累计用量配置
注意：此字段可能返回 null，表示取不到有效值。
 */
class BandwidthAlert extends AbstractModel
{
    /**
     * @var string 用量封顶配置开关
on：开启
off：关闭
     */
    public $Switch;

    /**
     * @var integer 用量封顶阈值，带宽单位为bps，流量单位byte
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $BpsThreshold;

    /**
     * @var string 达到阈值后的操作
RETURN_404：全部请求返回 404
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CounterMeasure;

    /**
     * @var string 境内区域上次触发用量封顶阈值的时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $LastTriggerTime;

    /**
     * @var string 用量封顶提醒开关
on：开启
off：关闭
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AlertSwitch;

    /**
     * @var integer 用量封顶阈值提醒百分比
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AlertPercentage;

    /**
     * @var string 海外区域上次触发用量封顶阈值的时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $LastTriggerTimeOverseas;

    /**
     * @var string 用量阈值触发的维度
带宽：bandwidth
流量：flux
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Metric;

    /**
     * @var array 累计用量配置
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $StatisticItems;

    /**
     * @param string $Switch 用量封顶配置开关
on：开启
off：关闭
     * @param integer $BpsThreshold 用量封顶阈值，带宽单位为bps，流量单位byte
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CounterMeasure 达到阈值后的操作
RETURN_404：全部请求返回 404
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $LastTriggerTime 境内区域上次触发用量封顶阈值的时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $AlertSwitch 用量封顶提醒开关
on：开启
off：关闭
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $AlertPercentage 用量封顶阈值提醒百分比
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $LastTriggerTimeOverseas 海外区域上次触发用量封顶阈值的时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Metric 用量阈值触发的维度
带宽：bandwidth
流量：flux
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $StatisticItems 累计用量配置
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
        if (array_key_exists("Switch",$param) and $param["Switch"] !== null) {
            $this->Switch = $param["Switch"];
        }

        if (array_key_exists("BpsThreshold",$param) and $param["BpsThreshold"] !== null) {
            $this->BpsThreshold = $param["BpsThreshold"];
        }

        if (array_key_exists("CounterMeasure",$param) and $param["CounterMeasure"] !== null) {
            $this->CounterMeasure = $param["CounterMeasure"];
        }

        if (array_key_exists("LastTriggerTime",$param) and $param["LastTriggerTime"] !== null) {
            $this->LastTriggerTime = $param["LastTriggerTime"];
        }

        if (array_key_exists("AlertSwitch",$param) and $param["AlertSwitch"] !== null) {
            $this->AlertSwitch = $param["AlertSwitch"];
        }

        if (array_key_exists("AlertPercentage",$param) and $param["AlertPercentage"] !== null) {
            $this->AlertPercentage = $param["AlertPercentage"];
        }

        if (array_key_exists("LastTriggerTimeOverseas",$param) and $param["LastTriggerTimeOverseas"] !== null) {
            $this->LastTriggerTimeOverseas = $param["LastTriggerTimeOverseas"];
        }

        if (array_key_exists("Metric",$param) and $param["Metric"] !== null) {
            $this->Metric = $param["Metric"];
        }

        if (array_key_exists("StatisticItems",$param) and $param["StatisticItems"] !== null) {
            $this->StatisticItems = [];
            foreach ($param["StatisticItems"] as $key => $value){
                $obj = new StatisticItem();
                $obj->deserialize($value);
                array_push($this->StatisticItems, $obj);
            }
        }
    }
}
