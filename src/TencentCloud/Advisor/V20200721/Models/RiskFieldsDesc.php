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
namespace TencentCloud\Advisor\V20200721\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 风险实例字段描述
 *
 * @method string getField() 获取字段ID
 * @method void setField(string $Field) 设置字段ID
 * @method string getFieldName() 获取字段名称
 * @method void setFieldName(string $FieldName) 设置字段名称
 * @method string getFieldType() 获取字段类型, 
string: 字符串类型，例如"aa"
int: 整形，例如 111
stringSlice : 字符串数组类型，例如["a", "b"]
tags: 标签类型, 例如: [{"Key":"kkk","Value":"vvv"},{"Key":"kkk2","Value":"vvv2"}]
 * @method void setFieldType(string $FieldType) 设置字段类型, 
string: 字符串类型，例如"aa"
int: 整形，例如 111
stringSlice : 字符串数组类型，例如["a", "b"]
tags: 标签类型, 例如: [{"Key":"kkk","Value":"vvv"},{"Key":"kkk2","Value":"vvv2"}]
 * @method array getFieldDict() 获取字段值对应字典
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setFieldDict(array $FieldDict) 设置字段值对应字典
注意：此字段可能返回 null，表示取不到有效值。
 */
class RiskFieldsDesc extends AbstractModel
{
    /**
     * @var string 字段ID
     */
    public $Field;

    /**
     * @var string 字段名称
     */
    public $FieldName;

    /**
     * @var string 字段类型, 
string: 字符串类型，例如"aa"
int: 整形，例如 111
stringSlice : 字符串数组类型，例如["a", "b"]
tags: 标签类型, 例如: [{"Key":"kkk","Value":"vvv"},{"Key":"kkk2","Value":"vvv2"}]
     */
    public $FieldType;

    /**
     * @var array 字段值对应字典
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $FieldDict;

    /**
     * @param string $Field 字段ID
     * @param string $FieldName 字段名称
     * @param string $FieldType 字段类型, 
string: 字符串类型，例如"aa"
int: 整形，例如 111
stringSlice : 字符串数组类型，例如["a", "b"]
tags: 标签类型, 例如: [{"Key":"kkk","Value":"vvv"},{"Key":"kkk2","Value":"vvv2"}]
     * @param array $FieldDict 字段值对应字典
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
        if (array_key_exists("Field",$param) and $param["Field"] !== null) {
            $this->Field = $param["Field"];
        }

        if (array_key_exists("FieldName",$param) and $param["FieldName"] !== null) {
            $this->FieldName = $param["FieldName"];
        }

        if (array_key_exists("FieldType",$param) and $param["FieldType"] !== null) {
            $this->FieldType = $param["FieldType"];
        }

        if (array_key_exists("FieldDict",$param) and $param["FieldDict"] !== null) {
            $this->FieldDict = [];
            foreach ($param["FieldDict"] as $key => $value){
                $obj = new KeyValue();
                $obj->deserialize($value);
                array_push($this->FieldDict, $obj);
            }
        }
    }
}
