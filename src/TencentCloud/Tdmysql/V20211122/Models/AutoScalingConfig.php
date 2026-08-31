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
 * serverless实例的资源范围
ResourceType 为 cpu 时表示 ccu
为 nodecount 时表示节点数范围
 *
 * @method float getRangeMin() 获取<p>ccu最小值</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRangeMin(float $RangeMin) 设置<p>ccu最小值</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method float getRangeMax() 获取<p>ccu最大值</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRangeMax(float $RangeMax) 设置<p>ccu最大值</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getResourceType() 获取<p>返回的 range 参数对应的资源类型</p><p>枚举值：</p><ul><li>cpu： 返回的是 cpu 调整返回限制，当不存在mem限制时代表 ccu</li><li>nodecount： 返回的是水平扩缩容的节点数限制范围</li></ul>
 * @method void setResourceType(string $ResourceType) 设置<p>返回的 range 参数对应的资源类型</p><p>枚举值：</p><ul><li>cpu： 返回的是 cpu 调整返回限制，当不存在mem限制时代表 ccu</li><li>nodecount： 返回的是水平扩缩容的节点数限制范围</li></ul>
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
     * @var string <p>返回的 range 参数对应的资源类型</p><p>枚举值：</p><ul><li>cpu： 返回的是 cpu 调整返回限制，当不存在mem限制时代表 ccu</li><li>nodecount： 返回的是水平扩缩容的节点数限制范围</li></ul>
     */
    public $ResourceType;

    /**
     * @param float $RangeMin <p>ccu最小值</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param float $RangeMax <p>ccu最大值</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ResourceType <p>返回的 range 参数对应的资源类型</p><p>枚举值：</p><ul><li>cpu： 返回的是 cpu 调整返回限制，当不存在mem限制时代表 ccu</li><li>nodecount： 返回的是水平扩缩容的节点数限制范围</li></ul>
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
    }
}
