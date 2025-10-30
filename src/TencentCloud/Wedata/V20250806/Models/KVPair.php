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
namespace TencentCloud\Wedata\V20250806\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 键值对
 *
 * @method string getK() 获取键名
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setK(string $K) 设置键名
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getV() 获取值，请勿传SQL(请求会被视为攻击接口)，如果有需要，请将SQL进行Base64转码并解码。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setV(string $V) 设置值，请勿传SQL(请求会被视为攻击接口)，如果有需要，请将SQL进行Base64转码并解码。
注意：此字段可能返回 null，表示取不到有效值。
 */
class KVPair extends AbstractModel
{
    /**
     * @var string 键名
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $K;

    /**
     * @var string 值，请勿传SQL(请求会被视为攻击接口)，如果有需要，请将SQL进行Base64转码并解码。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $V;

    /**
     * @param string $K 键名
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $V 值，请勿传SQL(请求会被视为攻击接口)，如果有需要，请将SQL进行Base64转码并解码。
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
        if (array_key_exists("K",$param) and $param["K"] !== null) {
            $this->K = $param["K"];
        }

        if (array_key_exists("V",$param) and $param["V"] !== null) {
            $this->V = $param["V"];
        }
    }
}
