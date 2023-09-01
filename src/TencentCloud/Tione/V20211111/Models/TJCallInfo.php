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
namespace TencentCloud\Tione\V20211111\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 太极服务的调用信息
 *
 * @method string getHttpAddr() 获取调用地址
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setHttpAddr(string $HttpAddr) 设置调用地址
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getToken() 获取token
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setToken(string $Token) 设置token
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCallExample() 获取调用示例
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCallExample(string $CallExample) 设置调用示例
注意：此字段可能返回 null，表示取不到有效值。
 */
class TJCallInfo extends AbstractModel
{
    /**
     * @var string 调用地址
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $HttpAddr;

    /**
     * @var string token
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Token;

    /**
     * @var string 调用示例
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CallExample;

    /**
     * @param string $HttpAddr 调用地址
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Token token
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CallExample 调用示例
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
        if (array_key_exists("HttpAddr",$param) and $param["HttpAddr"] !== null) {
            $this->HttpAddr = $param["HttpAddr"];
        }

        if (array_key_exists("Token",$param) and $param["Token"] !== null) {
            $this->Token = $param["Token"];
        }

        if (array_key_exists("CallExample",$param) and $param["CallExample"] !== null) {
            $this->CallExample = $param["CallExample"];
        }
    }
}
