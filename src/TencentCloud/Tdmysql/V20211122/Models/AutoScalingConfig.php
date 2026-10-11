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
namespace TencentCloud\Tdmysql\V20211122\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 实例变配的资源范围
ResourceType 为 cpu 时表示 ccu
为 nodecount 时表示节点数范围
为 disk 表示磁盘容量范围（单位 GB）
ScaleUpEnabled 为是否打开升配
ScaleDownEnabled 为是否打开降配
ThresholdPercent 为触发阈值（%）
Step 为变配步长
 *
 * @method float getRangeMin() 获取<p>最小值</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRangeMin(float $RangeMin) 设置<p>最小值</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method float getRangeMax() 获取<p>最大值</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRangeMax(float $RangeMax) 设置<p>最大值</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getResourceType() 获取<p>返回的 range 参数对应的资源类型</p><p>枚举值：</p><ul><li>cpu： 返回的是 cpu 调整返回限制，当不存在mem限制时代表 ccu</li><li>nodecount： 返回的是水平扩缩容的节点数限制范围</li><li>datadisk： 返回的是磁盘扩容的容量限制范围</li></ul>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setResourceType(string $ResourceType) 设置<p>返回的 range 参数对应的资源类型</p><p>枚举值：</p><ul><li>cpu： 返回的是 cpu 调整返回限制，当不存在mem限制时代表 ccu</li><li>nodecount： 返回的是水平扩缩容的节点数限制范围</li><li>datadisk： 返回的是磁盘扩容的容量限制范围</li></ul>
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getScaleUpEnabled() 获取<p>是否允许升配</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setScaleUpEnabled(boolean $ScaleUpEnabled) 设置<p>是否允许升配</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getScaleDownEnabled() 获取<p>是否允许降配</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setScaleDownEnabled(boolean $ScaleDownEnabled) 设置<p>是否允许降配</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getThresholdPercent() 获取<p>触发阈值（%）</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setThresholdPercent(integer $ThresholdPercent) 设置<p>触发阈值（%）</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method float getStep() 获取<p>变配步长</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setStep(float $Step) 设置<p>变配步长</p>
注意：此字段可能返回 null，表示取不到有效值。
 */
class AutoScalingConfig extends AbstractModel
{
    /**
     * @var float <p>最小值</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RangeMin;

    /**
     * @var float <p>最大值</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RangeMax;

    /**
     * @var string <p>返回的 range 参数对应的资源类型</p><p>枚举值：</p><ul><li>cpu： 返回的是 cpu 调整返回限制，当不存在mem限制时代表 ccu</li><li>nodecount： 返回的是水平扩缩容的节点数限制范围</li><li>datadisk： 返回的是磁盘扩容的容量限制范围</li></ul>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ResourceType;

    /**
     * @var boolean <p>是否允许升配</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ScaleUpEnabled;

    /**
     * @var boolean <p>是否允许降配</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ScaleDownEnabled;

    /**
     * @var integer <p>触发阈值（%）</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ThresholdPercent;

    /**
     * @var float <p>变配步长</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Step;

    /**
     * @param float $RangeMin <p>最小值</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param float $RangeMax <p>最大值</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ResourceType <p>返回的 range 参数对应的资源类型</p><p>枚举值：</p><ul><li>cpu： 返回的是 cpu 调整返回限制，当不存在mem限制时代表 ccu</li><li>nodecount： 返回的是水平扩缩容的节点数限制范围</li><li>datadisk： 返回的是磁盘扩容的容量限制范围</li></ul>
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $ScaleUpEnabled <p>是否允许升配</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $ScaleDownEnabled <p>是否允许降配</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $ThresholdPercent <p>触发阈值（%）</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param float $Step <p>变配步长</p>
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
        if (array_key_exists("RangeMin",$param) and $param["RangeMin"] !== null) {
            $this->RangeMin = $param["RangeMin"];
        }

        if (array_key_exists("RangeMax",$param) and $param["RangeMax"] !== null) {
            $this->RangeMax = $param["RangeMax"];
        }

        if (array_key_exists("ResourceType",$param) and $param["ResourceType"] !== null) {
            $this->ResourceType = $param["ResourceType"];
        }

        if (array_key_exists("ScaleUpEnabled",$param) and $param["ScaleUpEnabled"] !== null) {
            $this->ScaleUpEnabled = $param["ScaleUpEnabled"];
        }

        if (array_key_exists("ScaleDownEnabled",$param) and $param["ScaleDownEnabled"] !== null) {
            $this->ScaleDownEnabled = $param["ScaleDownEnabled"];
        }

        if (array_key_exists("ThresholdPercent",$param) and $param["ThresholdPercent"] !== null) {
            $this->ThresholdPercent = $param["ThresholdPercent"];
        }

        if (array_key_exists("Step",$param) and $param["Step"] !== null) {
            $this->Step = $param["Step"];
        }
    }
}
