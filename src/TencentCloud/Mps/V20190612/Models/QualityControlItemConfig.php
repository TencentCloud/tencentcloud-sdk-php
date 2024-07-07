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
namespace TencentCloud\Mps\V20190612\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 质检项配置
 *
 * @method string getType() 获取质检项名称。
 * @method void setType(string $Type) 设置质检项名称。
 * @method string getSwitch() 获取能力配置开关，可选值：
<li>ON：开启；</li>
<li>OFF：关闭。</li>
默认值：ON。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSwitch(string $Switch) 设置能力配置开关，可选值：
<li>ON：开启；</li>
<li>OFF：关闭。</li>
默认值：ON。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getSampling() 获取采样方式，取值范围：
- Time：根据时间间隔采样。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSampling(string $Sampling) 设置采样方式，取值范围：
- Time：根据时间间隔采样。
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getIntervalTime() 获取采样间隔时间，取值范围：[0, 60000]，单位：ms。
默认值 0。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIntervalTime(integer $IntervalTime) 设置采样间隔时间，取值范围：[0, 60000]，单位：ms。
默认值 0。
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getDuration() 获取异常持续时间，取值范围：[0, 60000]，单位：ms。
默认值 0。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDuration(integer $Duration) 设置异常持续时间，取值范围：[0, 60000]，单位：ms。
默认值 0。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getThreshold() 获取检测分值的阈值，使用数学区间格式，当检测值超出区间范围会触发回调。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setThreshold(string $Threshold) 设置检测分值的阈值，使用数学区间格式，当检测值超出区间范围会触发回调。
注意：此字段可能返回 null，表示取不到有效值。
 */
class QualityControlItemConfig extends AbstractModel
{
    /**
     * @var string 质检项名称。
     */
    public $Type;

    /**
     * @var string 能力配置开关，可选值：
<li>ON：开启；</li>
<li>OFF：关闭。</li>
默认值：ON。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Switch;

    /**
     * @var string 采样方式，取值范围：
- Time：根据时间间隔采样。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Sampling;

    /**
     * @var integer 采样间隔时间，取值范围：[0, 60000]，单位：ms。
默认值 0。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $IntervalTime;

    /**
     * @var integer 异常持续时间，取值范围：[0, 60000]，单位：ms。
默认值 0。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Duration;

    /**
     * @var string 检测分值的阈值，使用数学区间格式，当检测值超出区间范围会触发回调。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Threshold;

    /**
     * @param string $Type 质检项名称。
     * @param string $Switch 能力配置开关，可选值：
<li>ON：开启；</li>
<li>OFF：关闭。</li>
默认值：ON。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Sampling 采样方式，取值范围：
- Time：根据时间间隔采样。
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $IntervalTime 采样间隔时间，取值范围：[0, 60000]，单位：ms。
默认值 0。
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Duration 异常持续时间，取值范围：[0, 60000]，单位：ms。
默认值 0。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Threshold 检测分值的阈值，使用数学区间格式，当检测值超出区间范围会触发回调。
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

        if (array_key_exists("Switch",$param) and $param["Switch"] !== null) {
            $this->Switch = $param["Switch"];
        }

        if (array_key_exists("Sampling",$param) and $param["Sampling"] !== null) {
            $this->Sampling = $param["Sampling"];
        }

        if (array_key_exists("IntervalTime",$param) and $param["IntervalTime"] !== null) {
            $this->IntervalTime = $param["IntervalTime"];
        }

        if (array_key_exists("Duration",$param) and $param["Duration"] !== null) {
            $this->Duration = $param["Duration"];
        }

        if (array_key_exists("Threshold",$param) and $param["Threshold"] !== null) {
            $this->Threshold = $param["Threshold"];
        }
    }
}
