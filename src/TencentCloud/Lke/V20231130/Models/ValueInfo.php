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
 * 任务流程参数信息
 *
 * @method string getId() 获取值ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setId(string $Id) 设置值ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getName() 获取名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setName(string $Name) 设置名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getValueType() 获取值类型：0:未知或者空, 1:string, 2:int, 3:float, 4:bool, 5:array(字符串数组), 6: object_array(结构体数组), 7: object(结构体)
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setValueType(integer $ValueType) 设置值类型：0:未知或者空, 1:string, 2:int, 3:float, 4:bool, 5:array(字符串数组), 6: object_array(结构体数组), 7: object(结构体)
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getValueStr() 获取string
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setValueStr(string $ValueStr) 设置string
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getValueInt() 获取int（避免精度丢失使用字符串返回）
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setValueInt(string $ValueInt) 设置int（避免精度丢失使用字符串返回）
注意：此字段可能返回 null，表示取不到有效值。
 * @method float getValueFloat() 获取float
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setValueFloat(float $ValueFloat) 设置float
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getValueBool() 获取bool
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setValueBool(boolean $ValueBool) 设置bool
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getValueStrArray() 获取array
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setValueStrArray(array $ValueStrArray) 设置array
注意：此字段可能返回 null，表示取不到有效值。
 */
class ValueInfo extends AbstractModel
{
    /**
     * @var string 值ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Id;

    /**
     * @var string 名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Name;

    /**
     * @var integer 值类型：0:未知或者空, 1:string, 2:int, 3:float, 4:bool, 5:array(字符串数组), 6: object_array(结构体数组), 7: object(结构体)
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ValueType;

    /**
     * @var string string
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ValueStr;

    /**
     * @var string int（避免精度丢失使用字符串返回）
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ValueInt;

    /**
     * @var float float
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ValueFloat;

    /**
     * @var boolean bool
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ValueBool;

    /**
     * @var array array
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ValueStrArray;

    /**
     * @param string $Id 值ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Name 名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $ValueType 值类型：0:未知或者空, 1:string, 2:int, 3:float, 4:bool, 5:array(字符串数组), 6: object_array(结构体数组), 7: object(结构体)
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ValueStr string
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ValueInt int（避免精度丢失使用字符串返回）
注意：此字段可能返回 null，表示取不到有效值。
     * @param float $ValueFloat float
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $ValueBool bool
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $ValueStrArray array
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
        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("ValueType",$param) and $param["ValueType"] !== null) {
            $this->ValueType = $param["ValueType"];
        }

        if (array_key_exists("ValueStr",$param) and $param["ValueStr"] !== null) {
            $this->ValueStr = $param["ValueStr"];
        }

        if (array_key_exists("ValueInt",$param) and $param["ValueInt"] !== null) {
            $this->ValueInt = $param["ValueInt"];
        }

        if (array_key_exists("ValueFloat",$param) and $param["ValueFloat"] !== null) {
            $this->ValueFloat = $param["ValueFloat"];
        }

        if (array_key_exists("ValueBool",$param) and $param["ValueBool"] !== null) {
            $this->ValueBool = $param["ValueBool"];
        }

        if (array_key_exists("ValueStrArray",$param) and $param["ValueStrArray"] !== null) {
            $this->ValueStrArray = $param["ValueStrArray"];
        }
    }
}
