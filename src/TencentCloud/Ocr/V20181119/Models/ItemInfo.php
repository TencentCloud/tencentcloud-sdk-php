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
namespace TencentCloud\Ocr\V20181119\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 智能结构化元素组
 *
 * @method Key getKey() 获取key信息组
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setKey(Key $Key) 设置key信息组
注意：此字段可能返回 null，表示取不到有效值。
 * @method Value getValue() 获取Value信息组
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setValue(Value $Value) 设置Value信息组
注意：此字段可能返回 null，表示取不到有效值。
 */
class ItemInfo extends AbstractModel
{
    /**
     * @var Key key信息组
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Key;

    /**
     * @var Value Value信息组
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Value;

    /**
     * @param Key $Key key信息组
注意：此字段可能返回 null，表示取不到有效值。
     * @param Value $Value Value信息组
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
            $this->Key = new Key();
            $this->Key->deserialize($param["Key"]);
        }

        if (array_key_exists("Value",$param) and $param["Value"] !== null) {
            $this->Value = new Value();
            $this->Value->deserialize($param["Value"]);
        }
    }
}
