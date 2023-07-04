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
 * Kafka访问协议
 *
 * @method string getProtocol() 获取协议类型，支持的协议类型包括 plaintext、sasl_plaintext 或 sasl_ssl。建议使用 sasl_ssl，此协议会进行连接加密同时需要用户认证
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setProtocol(string $Protocol) 设置协议类型，支持的协议类型包括 plaintext、sasl_plaintext 或 sasl_ssl。建议使用 sasl_ssl，此协议会进行连接加密同时需要用户认证
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getMechanism() 获取加密类型，支持 PLAIN、SCRAM-SHA-256 或 SCRAM-SHA-512
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMechanism(string $Mechanism) 设置加密类型，支持 PLAIN、SCRAM-SHA-256 或 SCRAM-SHA-512
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getUserName() 获取用户名
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUserName(string $UserName) 设置用户名
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getPassword() 获取用户密码
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPassword(string $Password) 设置用户密码
注意：此字段可能返回 null，表示取不到有效值。
 */
class KafkaProtocolInfo extends AbstractModel
{
    /**
     * @var string 协议类型，支持的协议类型包括 plaintext、sasl_plaintext 或 sasl_ssl。建议使用 sasl_ssl，此协议会进行连接加密同时需要用户认证
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Protocol;

    /**
     * @var string 加密类型，支持 PLAIN、SCRAM-SHA-256 或 SCRAM-SHA-512
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Mechanism;

    /**
     * @var string 用户名
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $UserName;

    /**
     * @var string 用户密码
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Password;

    /**
     * @param string $Protocol 协议类型，支持的协议类型包括 plaintext、sasl_plaintext 或 sasl_ssl。建议使用 sasl_ssl，此协议会进行连接加密同时需要用户认证
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Mechanism 加密类型，支持 PLAIN、SCRAM-SHA-256 或 SCRAM-SHA-512
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $UserName 用户名
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Password 用户密码
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
        if (array_key_exists("Protocol",$param) and $param["Protocol"] !== null) {
            $this->Protocol = $param["Protocol"];
        }

        if (array_key_exists("Mechanism",$param) and $param["Mechanism"] !== null) {
            $this->Mechanism = $param["Mechanism"];
        }

        if (array_key_exists("UserName",$param) and $param["UserName"] !== null) {
            $this->UserName = $param["UserName"];
        }

        if (array_key_exists("Password",$param) and $param["Password"] !== null) {
            $this->Password = $param["Password"];
        }
    }
}
