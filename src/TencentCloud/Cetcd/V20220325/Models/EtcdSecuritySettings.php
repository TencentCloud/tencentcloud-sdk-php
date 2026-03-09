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
 * etcd安全相关设置
 *
 * @method boolean getHttps() 获取是否启用https
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setHttps(boolean $Https) 设置是否启用https
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getClientCertAuth() 获取启用客户端证书认证
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setClientCertAuth(boolean $ClientCertAuth) 设置启用客户端证书认证
注意：此字段可能返回 null，表示取不到有效值。
 */
class EtcdSecuritySettings extends AbstractModel
{
    /**
     * @var boolean 是否启用https
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Https;

    /**
     * @var boolean 启用客户端证书认证
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ClientCertAuth;

    /**
     * @param boolean $Https 是否启用https
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $ClientCertAuth 启用客户端证书认证
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
        if (array_key_exists("Https",$param) and $param["Https"] !== null) {
            $this->Https = $param["Https"];
        }

        if (array_key_exists("ClientCertAuth",$param) and $param["ClientCertAuth"] !== null) {
            $this->ClientCertAuth = $param["ClientCertAuth"];
        }
    }
}
