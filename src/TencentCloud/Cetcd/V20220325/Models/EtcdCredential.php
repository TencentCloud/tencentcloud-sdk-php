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
namespace TencentCloud\Cetcd\V20220325\Models;
use TencentCloud\Common\AbstractModel;

/**
 * etcd访问凭证
 *
 * @method string getCACert() 获取CA证书
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCACert(string $CACert) 设置CA证书
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCert() 获取证书
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCert(string $Cert) 设置证书
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getKey() 获取私钥
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setKey(string $Key) 设置私钥
注意：此字段可能返回 null，表示取不到有效值。
 */
class EtcdCredential extends AbstractModel
{
    /**
     * @var string CA证书
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CACert;

    /**
     * @var string 证书
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Cert;

    /**
     * @var string 私钥
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Key;

    /**
     * @param string $CACert CA证书
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Cert 证书
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Key 私钥
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
        if (array_key_exists("CACert",$param) and $param["CACert"] !== null) {
            $this->CACert = $param["CACert"];
        }

        if (array_key_exists("Cert",$param) and $param["Cert"] !== null) {
            $this->Cert = $param["Cert"];
        }

        if (array_key_exists("Key",$param) and $param["Key"] !== null) {
            $this->Key = $param["Key"];
        }
    }
}
