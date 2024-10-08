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
namespace TencentCloud\Lke\V20231130\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 计费统计信息
 *
 * @method string getX() 获取x轴时间戳
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setX(string $X) 设置x轴时间戳
注意：此字段可能返回 null，表示取不到有效值。
 * @method float getY() 获取y轴统计值
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setY(float $Y) 设置y轴统计值
注意：此字段可能返回 null，表示取不到有效值。
 */
class Stat extends AbstractModel
{
    /**
     * @var string x轴时间戳
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $X;

    /**
     * @var float y轴统计值
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Y;

    /**
     * @param string $X x轴时间戳
注意：此字段可能返回 null，表示取不到有效值。
     * @param float $Y y轴统计值
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
