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
namespace TencentCloud\Es\V20180416\Models;
use TencentCloud\Common\AbstractModel;

/**
 * cvm 自动扩盘参数
 *
 * @method string getNodeType() 获取节点类型 hotData,warmData
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setNodeType(string $NodeType) 设置节点类型 hotData,warmData
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getScaleType() 获取0:百分比扩容;1:绝对值扩容
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setScaleType(integer $ScaleType) 设置0:百分比扩容;1:绝对值扩容
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getThreshold() 获取触发阈值,单位%,例如80%
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setThreshold(integer $Threshold) 设置触发阈值,单位%,例如80%
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getDuration() 获取触发持续时间,单位分钟,例如60
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDuration(integer $Duration) 设置触发持续时间,单位分钟,例如60
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getPercentSize() 获取每次扩容比例,单位%,例如20%
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPercentSize(integer $PercentSize) 设置每次扩容比例,单位%,例如20%
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getFixSize() 获取绝对值扩容,单位GB,例如100GB
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setFixSize(integer $FixSize) 设置绝对值扩容,单位GB,例如100GB
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getMaxSize() 获取扩容上限,单位GB,例如500GB
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMaxSize(integer $MaxSize) 设置扩容上限,单位GB,例如500GB
注意：此字段可能返回 null，表示取不到有效值。
 */
class AutoScaleDiskInfo extends AbstractModel
{
    /**
     * @var string 节点类型 hotData,warmData
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $NodeType;

    /**
     * @var integer 0:百分比扩容;1:绝对值扩容
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ScaleType;

    /**
     * @var integer 触发阈值,单位%,例如80%
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Threshold;

    /**
     * @var integer 触发持续时间,单位分钟,例如60
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Duration;

    /**
     * @var integer 每次扩容比例,单位%,例如20%
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PercentSize;

    /**
     * @var integer 绝对值扩容,单位GB,例如100GB
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $FixSize;

    /**
     * @var integer 扩容上限,单位GB,例如500GB
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $MaxSize;

    /**
     * @param string $NodeType 节点类型 hotData,warmData
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $ScaleType 0:百分比扩容;1:绝对值扩容
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Threshold 触发阈值,单位%,例如80%
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Duration 触发持续时间,单位分钟,例如60
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $PercentSize 每次扩容比例,单位%,例如20%
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $FixSize 绝对值扩容,单位GB,例如100GB
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $MaxSize 扩容上限,单位GB,例如500GB
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
        if (array_key_exists("NodeType",$param) and $param["NodeType"] !== null) {
            $this->NodeType = $param["NodeType"];
        }

        if (array_key_exists("ScaleType",$param) and $param["ScaleType"] !== null) {
            $this->ScaleType = $param["ScaleType"];
        }

        if (array_key_exists("Threshold",$param) and $param["Threshold"] !== null) {
            $this->Threshold = $param["Threshold"];
        }

        if (array_key_exists("Duration",$param) and $param["Duration"] !== null) {
            $this->Duration = $param["Duration"];
        }

        if (array_key_exists("PercentSize",$param) and $param["PercentSize"] !== null) {
            $this->PercentSize = $param["PercentSize"];
        }

        if (array_key_exists("FixSize",$param) and $param["FixSize"] !== null) {
            $this->FixSize = $param["FixSize"];
        }

        if (array_key_exists("MaxSize",$param) and $param["MaxSize"] !== null) {
            $this->MaxSize = $param["MaxSize"];
        }
    }
}
