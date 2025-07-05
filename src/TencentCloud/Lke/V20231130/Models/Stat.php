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
namespace TencentCloud\Lke\V20231130\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 计费统计信息
 *
 * @method string getX() 获取X轴: 时间区域；根据查询条件的粒度返回“分/小时/日”三种区间范围
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setX(string $X) 设置X轴: 时间区域；根据查询条件的粒度返回“分/小时/日”三种区间范围
注意：此字段可能返回 null，表示取不到有效值。
 * @method float getY() 获取Y轴: 该时间区域内的统计值，如token消耗量，调用次数或使用量等信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setY(float $Y) 设置Y轴: 该时间区域内的统计值，如token消耗量，调用次数或使用量等信息
注意：此字段可能返回 null，表示取不到有效值。
 */
class Stat extends AbstractModel
{
    /**
     * @var string X轴: 时间区域；根据查询条件的粒度返回“分/小时/日”三种区间范围
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $X;

    /**
     * @var float Y轴: 该时间区域内的统计值，如token消耗量，调用次数或使用量等信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Y;

    /**
     * @param string $X X轴: 时间区域；根据查询条件的粒度返回“分/小时/日”三种区间范围
注意：此字段可能返回 null，表示取不到有效值。
     * @param float $Y Y轴: 该时间区域内的统计值，如token消耗量，调用次数或使用量等信息
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
        if (array_key_exists("X",$param) and $param["X"] !== null) {
            $this->X = $param["X"];
        }

        if (array_key_exists("Y",$param) and $param["Y"] !== null) {
            $this->Y = $param["Y"];
        }
    }
}
