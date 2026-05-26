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
 * serverless实例的ccu范围
 *
 * @method float getRangeMin() 获取<p>ccu最小值</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRangeMin(float $RangeMin) 设置<p>ccu最小值</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method float getRangeMax() 获取<p>ccu最大值</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRangeMax(float $RangeMax) 设置<p>ccu最大值</p>
注意：此字段可能返回 null，表示取不到有效值。
 */
class AutoScalingConfig extends AbstractModel
{
    /**
     * @var float <p>ccu最小值</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RangeMin;

    /**
     * @var float <p>ccu最大值</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RangeMax;

    /**
     * @param float $RangeMin <p>ccu最小值</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param float $RangeMax <p>ccu最大值</p>
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
    }
}
