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
namespace TencentCloud\Thpc\V20230321\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 伸缩策略配置，定义队列的容量语义。
 *
 * @method integer getDesiredCapacity() 获取<p>期望节点数。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDesiredCapacity(integer $DesiredCapacity) 设置<p>期望节点数。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getScalingUnit() 获取<p>伸缩单位。可选值：NODE（按节点）、GPU_CARD（按 GPU 卡）。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setScalingUnit(string $ScalingUnit) 设置<p>伸缩单位。可选值：NODE（按节点）、GPU_CARD（按 GPU 卡）。</p>
注意：此字段可能返回 null，表示取不到有效值。
 */
class ScalingPolicy extends AbstractModel
{
    /**
     * @var integer <p>期望节点数。</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DesiredCapacity;

    /**
     * @var string <p>伸缩单位。可选值：NODE（按节点）、GPU_CARD（按 GPU 卡）。</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ScalingUnit;

    /**
     * @param integer $DesiredCapacity <p>期望节点数。</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ScalingUnit <p>伸缩单位。可选值：NODE（按节点）、GPU_CARD（按 GPU 卡）。</p>
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
        if (array_key_exists("DesiredCapacity",$param) and $param["DesiredCapacity"] !== null) {
            $this->DesiredCapacity = $param["DesiredCapacity"];
        }

        if (array_key_exists("ScalingUnit",$param) and $param["ScalingUnit"] !== null) {
            $this->ScalingUnit = $param["ScalingUnit"];
        }
    }
}
