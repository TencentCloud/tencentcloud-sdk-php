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
namespace TencentCloud\Kms\V20190118\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateKey请求参数结构体
 *
 * @method string getAlias() 获取<p>作为密钥更容易辨识，更容易被人看懂的别名， 不可为空，1-60个字母数字 - _ 的组合，首字符必须为字母或者数字。以 kms- 作为前缀的用于云产品使用，Alias 不可重复。</p>
 * @method void setAlias(string $Alias) 设置<p>作为密钥更容易辨识，更容易被人看懂的别名， 不可为空，1-60个字母数字 - _ 的组合，首字符必须为字母或者数字。以 kms- 作为前缀的用于云产品使用，Alias 不可重复。</p>
 * @method string getDescription() 获取<p>CMK 的描述，最大1024字节</p>
 * @method void setDescription(string $Description) 设置<p>CMK 的描述，最大1024字节</p>
 * @method string getKeyUsage() 获取<p>指定key的用途，默认为  &quot;ENCRYPT_DECRYPT&quot; 表示创建对称加解密密钥，其它支持用途 “ASYMMETRIC_DECRYPT_RSA_2048” 表示创建用于加解密的RSA2048非对称密钥，“ASYMMETRIC_DECRYPT_RSA_3072”表示创建用于加解密的RSA3072非对称密钥，“ASYMMETRIC_DECRYPT_RSA_4096”表示创建用于加解密的RSA4096非对称密钥，“ASYMMETRIC_DECRYPT_SM2” 表示创建用于加解密的SM2非对称密钥，“ASYMMETRIC_SIGN_VERIFY_SM2” 表示创建用于签名验签的SM2非对称密钥，“ASYMMETRIC_SIGN_VERIFY_ECC” 表示创建用于签名验签的ECC非对称密钥，“ASYMMETRIC_SIGN_VERIFY_RSA_2048” 表示创建用于签名验签的RSA_2048非对称密钥，“ASYMMETRIC_SIGN_VERIFY_RSA_3072” 表示创建用于签名验签的RSA_3072非对称密钥，<br>“ASYMMETRIC_SIGN_VERIFY_RSA_4096” 表示创建用于签名验签的RSA_4096非对称密钥，“ASYMMETRIC_SIGN_VERIFY_ECDSA384”表示创建用于签名验签的 ECDSA384 非对称密钥。完整的密钥用途与算法支持列表可通过 ListAlgorithms 接口获取。</p>
 * @method void setKeyUsage(string $KeyUsage) 设置<p>指定key的用途，默认为  &quot;ENCRYPT_DECRYPT&quot; 表示创建对称加解密密钥，其它支持用途 “ASYMMETRIC_DECRYPT_RSA_2048” 表示创建用于加解密的RSA2048非对称密钥，“ASYMMETRIC_DECRYPT_RSA_3072”表示创建用于加解密的RSA3072非对称密钥，“ASYMMETRIC_DECRYPT_RSA_4096”表示创建用于加解密的RSA4096非对称密钥，“ASYMMETRIC_DECRYPT_SM2” 表示创建用于加解密的SM2非对称密钥，“ASYMMETRIC_SIGN_VERIFY_SM2” 表示创建用于签名验签的SM2非对称密钥，“ASYMMETRIC_SIGN_VERIFY_ECC” 表示创建用于签名验签的ECC非对称密钥，“ASYMMETRIC_SIGN_VERIFY_RSA_2048” 表示创建用于签名验签的RSA_2048非对称密钥，“ASYMMETRIC_SIGN_VERIFY_RSA_3072” 表示创建用于签名验签的RSA_3072非对称密钥，<br>“ASYMMETRIC_SIGN_VERIFY_RSA_4096” 表示创建用于签名验签的RSA_4096非对称密钥，“ASYMMETRIC_SIGN_VERIFY_ECDSA384”表示创建用于签名验签的 ECDSA384 非对称密钥。完整的密钥用途与算法支持列表可通过 ListAlgorithms 接口获取。</p>
 * @method integer getType() 获取<p>指定key类型，默认为1，1表示默认类型，由KMS创建CMK密钥，2 表示EXTERNAL 类型，该类型需要用户导入密钥材料，参考 GetParametersForImport 和 ImportKeyMaterial 接口</p>
 * @method void setType(integer $Type) 设置<p>指定key类型，默认为1，1表示默认类型，由KMS创建CMK密钥，2 表示EXTERNAL 类型，该类型需要用户导入密钥材料，参考 GetParametersForImport 和 ImportKeyMaterial 接口</p>
 * @method array getTags() 获取<p>标签列表</p>
 * @method void setTags(array $Tags) 设置<p>标签列表</p>
 * @method string getHsmClusterId() 获取<p>KMS 高级版对应的 HSM 集群 ID（仅对 KMS 独占版/托管版服务实例有效）。</p>
 * @method void setHsmClusterId(string $HsmClusterId) 设置<p>KMS 高级版对应的 HSM 集群 ID（仅对 KMS 独占版/托管版服务实例有效）。</p>
 */
class CreateKeyRequest extends AbstractModel
{
    /**
     * @var string <p>作为密钥更容易辨识，更容易被人看懂的别名， 不可为空，1-60个字母数字 - _ 的组合，首字符必须为字母或者数字。以 kms- 作为前缀的用于云产品使用，Alias 不可重复。</p>
     */
    public $Alias;

    /**
     * @var string <p>CMK 的描述，最大1024字节</p>
     */
    public $Description;

    /**
     * @var string <p>指定key的用途，默认为  &quot;ENCRYPT_DECRYPT&quot; 表示创建对称加解密密钥，其它支持用途 “ASYMMETRIC_DECRYPT_RSA_2048” 表示创建用于加解密的RSA2048非对称密钥，“ASYMMETRIC_DECRYPT_RSA_3072”表示创建用于加解密的RSA3072非对称密钥，“ASYMMETRIC_DECRYPT_RSA_4096”表示创建用于加解密的RSA4096非对称密钥，“ASYMMETRIC_DECRYPT_SM2” 表示创建用于加解密的SM2非对称密钥，“ASYMMETRIC_SIGN_VERIFY_SM2” 表示创建用于签名验签的SM2非对称密钥，“ASYMMETRIC_SIGN_VERIFY_ECC” 表示创建用于签名验签的ECC非对称密钥，“ASYMMETRIC_SIGN_VERIFY_RSA_2048” 表示创建用于签名验签的RSA_2048非对称密钥，“ASYMMETRIC_SIGN_VERIFY_RSA_3072” 表示创建用于签名验签的RSA_3072非对称密钥，<br>“ASYMMETRIC_SIGN_VERIFY_RSA_4096” 表示创建用于签名验签的RSA_4096非对称密钥，“ASYMMETRIC_SIGN_VERIFY_ECDSA384”表示创建用于签名验签的 ECDSA384 非对称密钥。完整的密钥用途与算法支持列表可通过 ListAlgorithms 接口获取。</p>
     */
    public $KeyUsage;

    /**
     * @var integer <p>指定key类型，默认为1，1表示默认类型，由KMS创建CMK密钥，2 表示EXTERNAL 类型，该类型需要用户导入密钥材料，参考 GetParametersForImport 和 ImportKeyMaterial 接口</p>
     */
    public $Type;

    /**
     * @var array <p>标签列表</p>
     */
    public $Tags;

    /**
     * @var string <p>KMS 高级版对应的 HSM 集群 ID（仅对 KMS 独占版/托管版服务实例有效）。</p>
     */
    public $HsmClusterId;

    /**
     * @param string $Alias <p>作为密钥更容易辨识，更容易被人看懂的别名， 不可为空，1-60个字母数字 - _ 的组合，首字符必须为字母或者数字。以 kms- 作为前缀的用于云产品使用，Alias 不可重复。</p>
     * @param string $Description <p>CMK 的描述，最大1024字节</p>
     * @param string $KeyUsage <p>指定key的用途，默认为  &quot;ENCRYPT_DECRYPT&quot; 表示创建对称加解密密钥，其它支持用途 “ASYMMETRIC_DECRYPT_RSA_2048” 表示创建用于加解密的RSA2048非对称密钥，“ASYMMETRIC_DECRYPT_RSA_3072”表示创建用于加解密的RSA3072非对称密钥，“ASYMMETRIC_DECRYPT_RSA_4096”表示创建用于加解密的RSA4096非对称密钥，“ASYMMETRIC_DECRYPT_SM2” 表示创建用于加解密的SM2非对称密钥，“ASYMMETRIC_SIGN_VERIFY_SM2” 表示创建用于签名验签的SM2非对称密钥，“ASYMMETRIC_SIGN_VERIFY_ECC” 表示创建用于签名验签的ECC非对称密钥，“ASYMMETRIC_SIGN_VERIFY_RSA_2048” 表示创建用于签名验签的RSA_2048非对称密钥，“ASYMMETRIC_SIGN_VERIFY_RSA_3072” 表示创建用于签名验签的RSA_3072非对称密钥，<br>“ASYMMETRIC_SIGN_VERIFY_RSA_4096” 表示创建用于签名验签的RSA_4096非对称密钥，“ASYMMETRIC_SIGN_VERIFY_ECDSA384”表示创建用于签名验签的 ECDSA384 非对称密钥。完整的密钥用途与算法支持列表可通过 ListAlgorithms 接口获取。</p>
     * @param integer $Type <p>指定key类型，默认为1，1表示默认类型，由KMS创建CMK密钥，2 表示EXTERNAL 类型，该类型需要用户导入密钥材料，参考 GetParametersForImport 和 ImportKeyMaterial 接口</p>
     * @param array $Tags <p>标签列表</p>
     * @param string $HsmClusterId <p>KMS 高级版对应的 HSM 集群 ID（仅对 KMS 独占版/托管版服务实例有效）。</p>
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
        if (array_key_exists("Alias",$param) and $param["Alias"] !== null) {
            $this->Alias = $param["Alias"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("KeyUsage",$param) and $param["KeyUsage"] !== null) {
            $this->KeyUsage = $param["KeyUsage"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("Tags",$param) and $param["Tags"] !== null) {
            $this->Tags = [];
            foreach ($param["Tags"] as $key => $value){
                $obj = new Tag();
                $obj->deserialize($value);
                array_push($this->Tags, $obj);
            }
        }

        if (array_key_exists("HsmClusterId",$param) and $param["HsmClusterId"] !== null) {
            $this->HsmClusterId = $param["HsmClusterId"];
        }
    }
}
