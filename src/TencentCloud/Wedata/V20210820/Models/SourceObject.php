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
namespace TencentCloud\Wedata\V20210820\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 数据质量数据对象
 *
 * @method string getSourceObjectDataTypeName() 获取源字段详细类型，int、string
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSourceObjectDataTypeName(string $SourceObjectDataTypeName) 设置源字段详细类型，int、string
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getSourceObjectValue() 获取源字段名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSourceObjectValue(string $SourceObjectValue) 设置源字段名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getObjectDataTypeName() 获取源字段详细类型，int、string
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setObjectDataTypeName(string $ObjectDataTypeName) 设置源字段详细类型，int、string
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getObjectValue() 获取源字段名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setObjectValue(string $ObjectValue) 设置源字段名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getObjectType() 获取对象类型 1.常量  2.离线表级   3.离线字段级
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setObjectType(integer $ObjectType) 设置对象类型 1.常量  2.离线表级   3.离线字段级
注意：此字段可能返回 null，表示取不到有效值。
 */
class SourceObject extends AbstractModel
{
    /**
     * @var string 源字段详细类型，int、string
注意：此字段可能返回 null，表示取不到有效值。
     * @deprecated
     */
    public $SourceObjectDataTypeName;

    /**
     * @var string 源字段名称
注意：此字段可能返回 null，表示取不到有效值。
     * @deprecated
     */
    public $SourceObjectValue;

    /**
     * @var string 源字段详细类型，int、string
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ObjectDataTypeName;

    /**
     * @var string 源字段名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ObjectValue;

    /**
     * @var integer 对象类型 1.常量  2.离线表级   3.离线字段级
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ObjectType;

    /**
     * @param string $SourceObjectDataTypeName 源字段详细类型，int、string
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $SourceObjectValue 源字段名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ObjectDataTypeName 源字段详细类型，int、string
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ObjectValue 源字段名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $ObjectType 对象类型 1.常量  2.离线表级   3.离线字段级
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
        if (array_key_exists("SourceObjectDataTypeName",$param) and $param["SourceObjectDataTypeName"] !== null) {
            $this->SourceObjectDataTypeName = $param["SourceObjectDataTypeName"];
        }

        if (array_key_exists("SourceObjectValue",$param) and $param["SourceObjectValue"] !== null) {
            $this->SourceObjectValue = $param["SourceObjectValue"];
        }

        if (array_key_exists("ObjectDataTypeName",$param) and $param["ObjectDataTypeName"] !== null) {
            $this->ObjectDataTypeName = $param["ObjectDataTypeName"];
        }

        if (array_key_exists("ObjectValue",$param) and $param["ObjectValue"] !== null) {
            $this->ObjectValue = $param["ObjectValue"];
        }

        if (array_key_exists("ObjectType",$param) and $param["ObjectType"] !== null) {
            $this->ObjectType = $param["ObjectType"];
        }
    }
}
