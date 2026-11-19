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
namespace TencentCloud\Ssm\V20190923\Models;
use TencentCloud\Common\AbstractModel;

/**
 * GetSecretValue请求参数结构体
 *
 * @method string getSecretName() 获取<p>指定凭据的名称。</p>
 * @method void setSecretName(string $SecretName) 设置<p>指定凭据的名称。</p>
 * @method string getVersionId() 获取<p>指定要读取的凭据版本号。仅传 VersionId 时按该版本号精确读取；云产品及 Redis/MongoDB 凭据可通过 SSM_Current 读取当前版本。</p><p>入参限制：同时指定 VersionStage 时，两者必须指向同一版本，否则返回 ResourceNotFound。</p><p>自定义、云产品及 Redis/MongoDB 凭据在 VersionId 和 VersionStage 均未指定时，默认读取 Stage_Current 标签指向的版本；未设置该标签返回 InvalidParameterValue，不回退到 SSM_Current。</p>
 * @method void setVersionId(string $VersionId) 设置<p>指定要读取的凭据版本号。仅传 VersionId 时按该版本号精确读取；云产品及 Redis/MongoDB 凭据可通过 SSM_Current 读取当前版本。</p><p>入参限制：同时指定 VersionStage 时，两者必须指向同一版本，否则返回 ResourceNotFound。</p><p>自定义、云产品及 Redis/MongoDB 凭据在 VersionId 和 VersionStage 均未指定时，默认读取 Stage_Current 标签指向的版本；未设置该标签返回 InvalidParameterValue，不回退到 SSM_Current。</p>
 * @method string getEncryptionPublicKey() 获取<p>用于加密返回凭据值的 PEM 格式公钥，支持 RSA 2048 和 SM2。未指定时，凭据值按原有方式返回。</p>
 * @method void setEncryptionPublicKey(string $EncryptionPublicKey) 设置<p>用于加密返回凭据值的 PEM 格式公钥，支持 RSA 2048 和 SM2。未指定时，凭据值按原有方式返回。</p>
 * @method string getEncryptionAlgorithm() 获取<p>非对称加密算法，仅在指定 EncryptionPublicKey 时生效。支持 SM2、SM2_C1C3C2_ASN1、RSAES_PKCS1_V1_5、RSAES_OAEP_SHA_1、RSAES_OAEP_SHA_256，默认值为 SM2。</p>
 * @method void setEncryptionAlgorithm(string $EncryptionAlgorithm) 设置<p>非对称加密算法，仅在指定 EncryptionPublicKey 时生效。支持 SM2、SM2_C1C3C2_ASN1、RSAES_PKCS1_V1_5、RSAES_OAEP_SHA_1、RSAES_OAEP_SHA_256，默认值为 SM2。</p>
 * @method string getVersionStage() 获取<p>用于选择凭据版本的标签。支持自定义、云产品及 Redis/MongoDB 凭据。</p><p>枚举值：</p><ul><li>Stage_Current： 读取用户设置的当前版本标签所绑定的版本。标签不会自动设置，也不会跟随账号迁移。</li></ul><p>仅支持 Stage_Current，大小写敏感。仅传标签时按绑定关系取值；与 VersionId 同时传入时必须指向同一版本。两者均不传时默认解析 Stage_Current，未设置该标签返回 InvalidParameterValue。</p>
 * @method void setVersionStage(string $VersionStage) 设置<p>用于选择凭据版本的标签。支持自定义、云产品及 Redis/MongoDB 凭据。</p><p>枚举值：</p><ul><li>Stage_Current： 读取用户设置的当前版本标签所绑定的版本。标签不会自动设置，也不会跟随账号迁移。</li></ul><p>仅支持 Stage_Current，大小写敏感。仅传标签时按绑定关系取值；与 VersionId 同时传入时必须指向同一版本。两者均不传时默认解析 Stage_Current，未设置该标签返回 InvalidParameterValue。</p>
 */
class GetSecretValueRequest extends AbstractModel
{
    /**
     * @var string <p>指定凭据的名称。</p>
     */
    public $SecretName;

    /**
     * @var string <p>指定要读取的凭据版本号。仅传 VersionId 时按该版本号精确读取；云产品及 Redis/MongoDB 凭据可通过 SSM_Current 读取当前版本。</p><p>入参限制：同时指定 VersionStage 时，两者必须指向同一版本，否则返回 ResourceNotFound。</p><p>自定义、云产品及 Redis/MongoDB 凭据在 VersionId 和 VersionStage 均未指定时，默认读取 Stage_Current 标签指向的版本；未设置该标签返回 InvalidParameterValue，不回退到 SSM_Current。</p>
     */
    public $VersionId;

    /**
     * @var string <p>用于加密返回凭据值的 PEM 格式公钥，支持 RSA 2048 和 SM2。未指定时，凭据值按原有方式返回。</p>
     */
    public $EncryptionPublicKey;

    /**
     * @var string <p>非对称加密算法，仅在指定 EncryptionPublicKey 时生效。支持 SM2、SM2_C1C3C2_ASN1、RSAES_PKCS1_V1_5、RSAES_OAEP_SHA_1、RSAES_OAEP_SHA_256，默认值为 SM2。</p>
     */
    public $EncryptionAlgorithm;

    /**
     * @var string <p>用于选择凭据版本的标签。支持自定义、云产品及 Redis/MongoDB 凭据。</p><p>枚举值：</p><ul><li>Stage_Current： 读取用户设置的当前版本标签所绑定的版本。标签不会自动设置，也不会跟随账号迁移。</li></ul><p>仅支持 Stage_Current，大小写敏感。仅传标签时按绑定关系取值；与 VersionId 同时传入时必须指向同一版本。两者均不传时默认解析 Stage_Current，未设置该标签返回 InvalidParameterValue。</p>
     */
    public $VersionStage;

    /**
     * @param string $SecretName <p>指定凭据的名称。</p>
     * @param string $VersionId <p>指定要读取的凭据版本号。仅传 VersionId 时按该版本号精确读取；云产品及 Redis/MongoDB 凭据可通过 SSM_Current 读取当前版本。</p><p>入参限制：同时指定 VersionStage 时，两者必须指向同一版本，否则返回 ResourceNotFound。</p><p>自定义、云产品及 Redis/MongoDB 凭据在 VersionId 和 VersionStage 均未指定时，默认读取 Stage_Current 标签指向的版本；未设置该标签返回 InvalidParameterValue，不回退到 SSM_Current。</p>
     * @param string $EncryptionPublicKey <p>用于加密返回凭据值的 PEM 格式公钥，支持 RSA 2048 和 SM2。未指定时，凭据值按原有方式返回。</p>
     * @param string $EncryptionAlgorithm <p>非对称加密算法，仅在指定 EncryptionPublicKey 时生效。支持 SM2、SM2_C1C3C2_ASN1、RSAES_PKCS1_V1_5、RSAES_OAEP_SHA_1、RSAES_OAEP_SHA_256，默认值为 SM2。</p>
     * @param string $VersionStage <p>用于选择凭据版本的标签。支持自定义、云产品及 Redis/MongoDB 凭据。</p><p>枚举值：</p><ul><li>Stage_Current： 读取用户设置的当前版本标签所绑定的版本。标签不会自动设置，也不会跟随账号迁移。</li></ul><p>仅支持 Stage_Current，大小写敏感。仅传标签时按绑定关系取值；与 VersionId 同时传入时必须指向同一版本。两者均不传时默认解析 Stage_Current，未设置该标签返回 InvalidParameterValue。</p>
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
        if (array_key_exists("SecretName",$param) and $param["SecretName"] !== null) {
            $this->SecretName = $param["SecretName"];
        }

        if (array_key_exists("VersionId",$param) and $param["VersionId"] !== null) {
            $this->VersionId = $param["VersionId"];
        }

        if (array_key_exists("EncryptionPublicKey",$param) and $param["EncryptionPublicKey"] !== null) {
            $this->EncryptionPublicKey = $param["EncryptionPublicKey"];
        }

        if (array_key_exists("EncryptionAlgorithm",$param) and $param["EncryptionAlgorithm"] !== null) {
            $this->EncryptionAlgorithm = $param["EncryptionAlgorithm"];
        }

        if (array_key_exists("VersionStage",$param) and $param["VersionStage"] !== null) {
            $this->VersionStage = $param["VersionStage"];
        }
    }
}
