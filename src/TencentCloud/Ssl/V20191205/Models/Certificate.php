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
namespace TencentCloud\Ssl\V20191205\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CLB证书详情
 *
 * @method string getCertId() 获取证书ID
 * @method void setCertId(string $CertId) 设置证书ID
 * @method array getDnsNames() 获取证书绑定的域名
 * @method void setDnsNames(array $DnsNames) 设置证书绑定的域名
 * @method string getCertCaId() 获取根证书ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCertCaId(string $CertCaId) 设置根证书ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getSSLMode() 获取证书认证模式：UNIDIRECTIONAL单向认证，MUTUAL双向认证
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSSLMode(string $SSLMode) 设置证书认证模式：UNIDIRECTIONAL单向认证，MUTUAL双向认证
注意：此字段可能返回 null，表示取不到有效值。
 */
class Certificate extends AbstractModel
{
    /**
     * @var string 证书ID
     */
    public $CertId;

    /**
     * @var array 证书绑定的域名
     */
    public $DnsNames;

    /**
     * @var string 根证书ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CertCaId;

    /**
     * @var string 证书认证模式：UNIDIRECTIONAL单向认证，MUTUAL双向认证
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SSLMode;

    /**
     * @param string $CertId 证书ID
     * @param array $DnsNames 证书绑定的域名
     * @param string $CertCaId 根证书ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $SSLMode 证书认证模式：UNIDIRECTIONAL单向认证，MUTUAL双向认证
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
        if (array_key_exists("CertId",$param) and $param["CertId"] !== null) {
            $this->CertId = $param["CertId"];
        }

        if (array_key_exists("DnsNames",$param) and $param["DnsNames"] !== null) {
            $this->DnsNames = $param["DnsNames"];
        }

        if (array_key_exists("CertCaId",$param) and $param["CertCaId"] !== null) {
            $this->CertCaId = $param["CertCaId"];
        }

        if (array_key_exists("SSLMode",$param) and $param["SSLMode"] !== null) {
            $this->SSLMode = $param["SSLMode"];
        }
    }
}
