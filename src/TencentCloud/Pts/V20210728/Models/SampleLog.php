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
namespace TencentCloud\Pts\V20210728\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 采样日志
 *
 * @method string getTimestamp() 获取日志毫秒时间戳
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTimestamp(string $Timestamp) 设置日志毫秒时间戳
注意：此字段可能返回 null，表示取不到有效值。
 * @method Attributes getAttributes() 获取采样日志属性
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAttributes(Attributes $Attributes) 设置采样日志属性
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getBody() 获取har格式的采样请求
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setBody(string $Body) 设置har格式的采样请求
注意：此字段可能返回 null，表示取不到有效值。
 */
class SampleLog extends AbstractModel
{
    /**
     * @var string 日志毫秒时间戳
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Timestamp;

    /**
     * @var Attributes 采样日志属性
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Attributes;

    /**
     * @var string har格式的采样请求
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Body;

    /**
     * @param string $Timestamp 日志毫秒时间戳
注意：此字段可能返回 null，表示取不到有效值。
     * @param Attributes $Attributes 采样日志属性
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Body har格式的采样请求
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
        if (array_key_exists("Timestamp",$param) and $param["Timestamp"] !== null) {
            $this->Timestamp = $param["Timestamp"];
        }

        if (array_key_exists("Attributes",$param) and $param["Attributes"] !== null) {
            $this->Attributes = new Attributes();
            $this->Attributes->deserialize($param["Attributes"]);
        }

        if (array_key_exists("Body",$param) and $param["Body"] !== null) {
            $this->Body = $param["Body"];
        }
    }
}
