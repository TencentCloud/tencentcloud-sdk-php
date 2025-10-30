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
namespace TencentCloud\Mps\V20190612\Models;
use TencentCloud\Common\AbstractModel;

/**
 * SimpleAes 加密信息。
 *
 * @method string getUri() 获取请求解密秘钥uri地址。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUri(string $Uri) 设置请求解密秘钥uri地址。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getKey() 获取加密key(十六进制32字节字符串)。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setKey(string $Key) 设置加密key(十六进制32字节字符串)。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getVector() 获取加密初始化向量(十六进制32字节字符串)。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setVector(string $Vector) 设置加密初始化向量(十六进制32字节字符串)。
注意：此字段可能返回 null，表示取不到有效值。
 */
class SimpleAesDrm extends AbstractModel
{
    /**
     * @var string 请求解密秘钥uri地址。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Uri;

    /**
     * @var string 加密key(十六进制32字节字符串)。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Key;

    /**
     * @var string 加密初始化向量(十六进制32字节字符串)。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Vector;

    /**
     * @param string $Uri 请求解密秘钥uri地址。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Key 加密key(十六进制32字节字符串)。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Vector 加密初始化向量(十六进制32字节字符串)。
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
        if (array_key_exists("Uri",$param) and $param["Uri"] !== null) {
            $this->Uri = $param["Uri"];
        }

        if (array_key_exists("Key",$param) and $param["Key"] !== null) {
            $this->Key = $param["Key"];
        }

        if (array_key_exists("Vector",$param) and $param["Vector"] !== null) {
            $this->Vector = $param["Vector"];
        }
    }
}
