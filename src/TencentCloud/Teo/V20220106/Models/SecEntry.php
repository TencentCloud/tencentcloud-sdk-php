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
namespace TencentCloud\Teo\V20220106\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 安全数据Entry返回值
 *
 * @method string getKey() 获取查询维度值。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setKey(string $Key) 设置查询维度值。
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getValue() 获取查询维度下详细数据。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setValue(array $Value) 设置查询维度下详细数据。
注意：此字段可能返回 null，表示取不到有效值。
 */
class SecEntry extends AbstractModel
{
    /**
     * @var string 查询维度值。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Key;

    /**
     * @var array 查询维度下详细数据。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Value;

    /**
     * @param string $Key 查询维度值。
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $Value 查询维度下详细数据。
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
        if (array_key_exists("Key",$param) and $param["Key"] !== null) {
            $this->Key = $param["Key"];
        }

        if (array_key_exists("Value",$param) and $param["Value"] !== null) {
            $this->Value = [];
            foreach ($param["Value"] as $key => $value){
                $obj = new SecEntryValue();
                $obj->deserialize($value);
                array_push($this->Value, $obj);
            }
        }
    }
}
