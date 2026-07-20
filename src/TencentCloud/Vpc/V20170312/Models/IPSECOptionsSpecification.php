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
namespace TencentCloud\Vpc\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * IPSec配置，腾讯云提供IPSec安全会话设置
 *
 * @method string getEncryptAlgorithm() 获取<p>加密算法，可选值：&#39;3DES-CBC&#39;, &#39;AES-CBC-128&#39;, &#39;AES-CBC-192&#39;, &#39;AES-CBC-256&#39;, &#39;DES-CBC&#39;, &#39;SM4&#39;, &#39;NULL&#39;， 默认为AES-CBC-128</p>
 * @method void setEncryptAlgorithm(string $EncryptAlgorithm) 设置<p>加密算法，可选值：&#39;3DES-CBC&#39;, &#39;AES-CBC-128&#39;, &#39;AES-CBC-192&#39;, &#39;AES-CBC-256&#39;, &#39;DES-CBC&#39;, &#39;SM4&#39;, &#39;NULL&#39;， 默认为AES-CBC-128</p>
 * @method string getIntegrityAlgorith() 获取<p>认证算法：可选值：&#39;MD5&#39;, &#39;SHA1&#39;，&#39;SHA-256&#39; 默认为</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIntegrityAlgorith(string $IntegrityAlgorith) 设置<p>认证算法：可选值：&#39;MD5&#39;, &#39;SHA1&#39;，&#39;SHA-256&#39; 默认为</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getIPSECSaLifetimeSeconds() 获取<p>IPsec SA lifetime(s)</p><p>取值范围：[180, 604800]</p><p>单位：秒</p><p>默认值：14400</p>
 * @method void setIPSECSaLifetimeSeconds(integer $IPSECSaLifetimeSeconds) 设置<p>IPsec SA lifetime(s)</p><p>取值范围：[180, 604800]</p><p>单位：秒</p><p>默认值：14400</p>
 * @method string getPfsDhGroup() 获取<p>PFS：可选值：&#39;NULL&#39;, &#39;DH-GROUP1&#39;, &#39;DH-GROUP2&#39;, &#39;DH-GROUP5&#39;, &#39;DH-GROUP14&#39;, &#39;DH-GROUP15&#39;,&#39;DH-GROUP16&#39;,&#39;DH-GROUP19&#39;,&#39;DH-GROUP20&#39;,&#39;DH-GROUP21&#39;,&#39;DH-GROUP24&#39;，默认为NULL</p>
 * @method void setPfsDhGroup(string $PfsDhGroup) 设置<p>PFS：可选值：&#39;NULL&#39;, &#39;DH-GROUP1&#39;, &#39;DH-GROUP2&#39;, &#39;DH-GROUP5&#39;, &#39;DH-GROUP14&#39;, &#39;DH-GROUP15&#39;,&#39;DH-GROUP16&#39;,&#39;DH-GROUP19&#39;,&#39;DH-GROUP20&#39;,&#39;DH-GROUP21&#39;,&#39;DH-GROUP24&#39;，默认为NULL</p>
 * @method integer getIPSECSaLifetimeTraffic() 获取<p>IPsec SA lifetime(KB)</p><p>取值范围：[2560, 4294967295]</p><p>单位：KB</p><p>默认值：4096000000</p>
 * @method void setIPSECSaLifetimeTraffic(integer $IPSECSaLifetimeTraffic) 设置<p>IPsec SA lifetime(KB)</p><p>取值范围：[2560, 4294967295]</p><p>单位：KB</p><p>默认值：4096000000</p>
 * @method string getIntegrityAlgorithm() 获取<p>认证算法：可选值：&#39;MD5&#39;, &#39;SHA1&#39;，&#39;SHA-256&#39; 默认为</p>
 * @method void setIntegrityAlgorithm(string $IntegrityAlgorithm) 设置<p>认证算法：可选值：&#39;MD5&#39;, &#39;SHA1&#39;，&#39;SHA-256&#39; 默认为</p>
 */
class IPSECOptionsSpecification extends AbstractModel
{
    /**
     * @var string <p>加密算法，可选值：&#39;3DES-CBC&#39;, &#39;AES-CBC-128&#39;, &#39;AES-CBC-192&#39;, &#39;AES-CBC-256&#39;, &#39;DES-CBC&#39;, &#39;SM4&#39;, &#39;NULL&#39;， 默认为AES-CBC-128</p>
     */
    public $EncryptAlgorithm;

    /**
     * @var string <p>认证算法：可选值：&#39;MD5&#39;, &#39;SHA1&#39;，&#39;SHA-256&#39; 默认为</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @deprecated
     */
    public $IntegrityAlgorith;

    /**
     * @var integer <p>IPsec SA lifetime(s)</p><p>取值范围：[180, 604800]</p><p>单位：秒</p><p>默认值：14400</p>
     */
    public $IPSECSaLifetimeSeconds;

    /**
     * @var string <p>PFS：可选值：&#39;NULL&#39;, &#39;DH-GROUP1&#39;, &#39;DH-GROUP2&#39;, &#39;DH-GROUP5&#39;, &#39;DH-GROUP14&#39;, &#39;DH-GROUP15&#39;,&#39;DH-GROUP16&#39;,&#39;DH-GROUP19&#39;,&#39;DH-GROUP20&#39;,&#39;DH-GROUP21&#39;,&#39;DH-GROUP24&#39;，默认为NULL</p>
     */
    public $PfsDhGroup;

    /**
     * @var integer <p>IPsec SA lifetime(KB)</p><p>取值范围：[2560, 4294967295]</p><p>单位：KB</p><p>默认值：4096000000</p>
     */
    public $IPSECSaLifetimeTraffic;

    /**
     * @var string <p>认证算法：可选值：&#39;MD5&#39;, &#39;SHA1&#39;，&#39;SHA-256&#39; 默认为</p>
     */
    public $IntegrityAlgorithm;

    /**
     * @param string $EncryptAlgorithm <p>加密算法，可选值：&#39;3DES-CBC&#39;, &#39;AES-CBC-128&#39;, &#39;AES-CBC-192&#39;, &#39;AES-CBC-256&#39;, &#39;DES-CBC&#39;, &#39;SM4&#39;, &#39;NULL&#39;， 默认为AES-CBC-128</p>
     * @param string $IntegrityAlgorith <p>认证算法：可选值：&#39;MD5&#39;, &#39;SHA1&#39;，&#39;SHA-256&#39; 默认为</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $IPSECSaLifetimeSeconds <p>IPsec SA lifetime(s)</p><p>取值范围：[180, 604800]</p><p>单位：秒</p><p>默认值：14400</p>
     * @param string $PfsDhGroup <p>PFS：可选值：&#39;NULL&#39;, &#39;DH-GROUP1&#39;, &#39;DH-GROUP2&#39;, &#39;DH-GROUP5&#39;, &#39;DH-GROUP14&#39;, &#39;DH-GROUP15&#39;,&#39;DH-GROUP16&#39;,&#39;DH-GROUP19&#39;,&#39;DH-GROUP20&#39;,&#39;DH-GROUP21&#39;,&#39;DH-GROUP24&#39;，默认为NULL</p>
     * @param integer $IPSECSaLifetimeTraffic <p>IPsec SA lifetime(KB)</p><p>取值范围：[2560, 4294967295]</p><p>单位：KB</p><p>默认值：4096000000</p>
     * @param string $IntegrityAlgorithm <p>认证算法：可选值：&#39;MD5&#39;, &#39;SHA1&#39;，&#39;SHA-256&#39; 默认为</p>
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
        if (array_key_exists("EncryptAlgorithm",$param) and $param["EncryptAlgorithm"] !== null) {
            $this->EncryptAlgorithm = $param["EncryptAlgorithm"];
        }

        if (array_key_exists("IntegrityAlgorith",$param) and $param["IntegrityAlgorith"] !== null) {
            $this->IntegrityAlgorith = $param["IntegrityAlgorith"];
        }

        if (array_key_exists("IPSECSaLifetimeSeconds",$param) and $param["IPSECSaLifetimeSeconds"] !== null) {
            $this->IPSECSaLifetimeSeconds = $param["IPSECSaLifetimeSeconds"];
        }

        if (array_key_exists("PfsDhGroup",$param) and $param["PfsDhGroup"] !== null) {
            $this->PfsDhGroup = $param["PfsDhGroup"];
        }

        if (array_key_exists("IPSECSaLifetimeTraffic",$param) and $param["IPSECSaLifetimeTraffic"] !== null) {
            $this->IPSECSaLifetimeTraffic = $param["IPSECSaLifetimeTraffic"];
        }

        if (array_key_exists("IntegrityAlgorithm",$param) and $param["IntegrityAlgorithm"] !== null) {
            $this->IntegrityAlgorithm = $param["IntegrityAlgorithm"];
        }
    }
}
