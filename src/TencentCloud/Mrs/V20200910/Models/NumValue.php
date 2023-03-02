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
namespace TencentCloud\Mrs\V20200910\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 数值结构体
 *
 * @method string getNum() 获取数值
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setNum(string $Num) 设置数值
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getUnit() 获取单位
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUnit(string $Unit) 设置单位
注意：此字段可能返回 null，表示取不到有效值。
 */
class NumValue extends AbstractModel
{
    /**
     * @var string 数值
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Num;

    /**
     * @var string 单位
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Unit;

    /**
     * @param string $Num 数值
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Unit 单位
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
        if (array_key_exists("Num",$param) and $param["Num"] !== null) {
            $this->Num = $param["Num"];
        }

        if (array_key_exists("Unit",$param) and $param["Unit"] !== null) {
            $this->Unit = $param["Unit"];
        }
    }
}
