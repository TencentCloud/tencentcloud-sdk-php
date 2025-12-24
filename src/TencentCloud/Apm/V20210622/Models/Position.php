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
namespace TencentCloud\Apm\V20210622\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 节点位置信息
 *
 * @method float getX() 获取节点位置横坐标
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setX(float $X) 设置节点位置横坐标
注意：此字段可能返回 null，表示取不到有效值。
 * @method float getY() 获取节点位置纵坐标
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setY(float $Y) 设置节点位置纵坐标
注意：此字段可能返回 null，表示取不到有效值。
 */
class Position extends AbstractModel
{
    /**
     * @var float 节点位置横坐标
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $X;

    /**
     * @var float 节点位置纵坐标
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Y;

    /**
     * @param float $X 节点位置横坐标
注意：此字段可能返回 null，表示取不到有效值。
     * @param float $Y 节点位置纵坐标
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
