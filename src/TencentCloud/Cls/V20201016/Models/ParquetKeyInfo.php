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
namespace TencentCloud\Cls\V20201016\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Parquet内容描述
 *
 * @method string getKeyName() 获取键值名称
 * @method void setKeyName(string $KeyName) 设置键值名称
 * @method string getKeyType() 获取数据类型，目前支持6种类型：string、boolean、int32、int64、float、double
 * @method void setKeyType(string $KeyType) 设置数据类型，目前支持6种类型：string、boolean、int32、int64、float、double
 * @method string getKeyNonExistingField() 获取解析失败赋值信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setKeyNonExistingField(string $KeyNonExistingField) 设置解析失败赋值信息
注意：此字段可能返回 null，表示取不到有效值。
 */
class ParquetKeyInfo extends AbstractModel
{
    /**
     * @var string 键值名称
     */
    public $KeyName;

    /**
     * @var string 数据类型，目前支持6种类型：string、boolean、int32、int64、float、double
     */
    public $KeyType;

    /**
     * @var string 解析失败赋值信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $KeyNonExistingField;

    /**
     * @param string $KeyName 键值名称
     * @param string $KeyType 数据类型，目前支持6种类型：string、boolean、int32、int64、float、double
     * @param string $KeyNonExistingField 解析失败赋值信息
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
        if (array_key_exists("KeyName",$param) and $param["KeyName"] !== null) {
            $this->KeyName = $param["KeyName"];
        }

        if (array_key_exists("KeyType",$param) and $param["KeyType"] !== null) {
            $this->KeyType = $param["KeyType"];
        }

        if (array_key_exists("KeyNonExistingField",$param) and $param["KeyNonExistingField"] !== null) {
            $this->KeyNonExistingField = $param["KeyNonExistingField"];
        }
    }
}
