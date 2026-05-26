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
 * CreateSecret请求参数结构体
 *
 * @method string getSecretName() 获取<p>凭据名称，同一region内不可重复，最长128字节，使用字母、数字或者 - _ 的组合，第一个字符必须为字母或者数字。一旦创建不可修改。</p>
 * @method void setSecretName(string $SecretName) 设置<p>凭据名称，同一region内不可重复，最长128字节，使用字母、数字或者 - _ 的组合，第一个字符必须为字母或者数字。一旦创建不可修改。</p>
 * @method string getVersionId() 获取<p>凭据版本，查询凭据信息时需要根据SecretName 和 VersionId进行查询，最长64 字节，使用字母、数字或者 - _ . 的组合并且以字母或数字开头。若为空，则使用默认的初始凭据版本号。可选，若为空或该凭据为云产品类凭据，则该版本号默认为 SSM_Current。</p>
 * @method void setVersionId(string $VersionId) 设置<p>凭据版本，查询凭据信息时需要根据SecretName 和 VersionId进行查询，最长64 字节，使用字母、数字或者 - _ . 的组合并且以字母或数字开头。若为空，则使用默认的初始凭据版本号。可选，若为空或该凭据为云产品类凭据，则该版本号默认为 SSM_Current。</p>
 * @method string getDescription() 获取<p>描述信息，用于详细描述用途等，最大支持2048字节。</p>
 * @method void setDescription(string $Description) 设置<p>描述信息，用于详细描述用途等，最大支持2048字节。</p>
 * @method string getKmsKeyId() 获取<p>指定对凭据进行加密的KMS CMK。如果为空则表示使用Secrets Manager为您默认创建的CMK进行加密。您也可以指定在同region 下自行创建的KMS CMK进行加密。</p>
 * @method void setKmsKeyId(string $KmsKeyId) 设置<p>指定对凭据进行加密的KMS CMK。如果为空则表示使用Secrets Manager为您默认创建的CMK进行加密。您也可以指定在同region 下自行创建的KMS CMK进行加密。</p>
 * @method integer getSecretType() 获取<p>凭据类型，默认为0自定义凭据。</p>
 * @method void setSecretType(integer $SecretType) 设置<p>凭据类型，默认为0自定义凭据。</p>
 * @method string getSecretBinary() 获取<p>二进制凭据信息base64编码后的明文。SecretBinary 和 SecretString 必须且只能设置一个，最大支持32KB字节。</p>
 * @method void setSecretBinary(string $SecretBinary) 设置<p>二进制凭据信息base64编码后的明文。SecretBinary 和 SecretString 必须且只能设置一个，最大支持32KB字节。</p>
 * @method string getSecretString() 获取<p>文本类型凭据信息明文（不需要进行base64编码）。SecretBinary 和 SecretString 必须且只能设置一个，最大支持32KB字节。</p>
 * @method void setSecretString(string $SecretString) 设置<p>文本类型凭据信息明文（不需要进行base64编码）。SecretBinary 和 SecretString 必须且只能设置一个，最大支持32KB字节。</p>
 * @method string getAdditionalConfig() 获取<p>JSON 格式字符串，用于指定特定凭据类型的额外配置。</p>
 * @method void setAdditionalConfig(string $AdditionalConfig) 设置<p>JSON 格式字符串，用于指定特定凭据类型的额外配置。</p>
 * @method array getTags() 获取<p>标签列表</p>
 * @method void setTags(array $Tags) 设置<p>标签列表</p>
 * @method string getKmsHsmClusterId() 获取<p>KMS的独享集群的ID。当KmsKeyId为空,并且用户的KMS存在有效的HsmClusterId时有效。</p>
 * @method void setKmsHsmClusterId(string $KmsHsmClusterId) 设置<p>KMS的独享集群的ID。当KmsKeyId为空,并且用户的KMS存在有效的HsmClusterId时有效。</p>
 * @method integer getEncryptType() 获取<p>凭据加密类型</p><p>枚举值：</p><ul><li>0： KMS 密钥加密</li><li>1： 软密钥加密</li></ul>
 * @method void setEncryptType(integer $EncryptType) 设置<p>凭据加密类型</p><p>枚举值：</p><ul><li>0： KMS 密钥加密</li><li>1： 软密钥加密</li></ul>
 */
class CreateSecretRequest extends AbstractModel
{
    /**
     * @var string <p>凭据名称，同一region内不可重复，最长128字节，使用字母、数字或者 - _ 的组合，第一个字符必须为字母或者数字。一旦创建不可修改。</p>
     */
    public $SecretName;

    /**
     * @var string <p>凭据版本，查询凭据信息时需要根据SecretName 和 VersionId进行查询，最长64 字节，使用字母、数字或者 - _ . 的组合并且以字母或数字开头。若为空，则使用默认的初始凭据版本号。可选，若为空或该凭据为云产品类凭据，则该版本号默认为 SSM_Current。</p>
     */
    public $VersionId;

    /**
     * @var string <p>描述信息，用于详细描述用途等，最大支持2048字节。</p>
     */
    public $Description;

    /**
     * @var string <p>指定对凭据进行加密的KMS CMK。如果为空则表示使用Secrets Manager为您默认创建的CMK进行加密。您也可以指定在同region 下自行创建的KMS CMK进行加密。</p>
     */
    public $KmsKeyId;

    /**
     * @var integer <p>凭据类型，默认为0自定义凭据。</p>
     */
    public $SecretType;

    /**
     * @var string <p>二进制凭据信息base64编码后的明文。SecretBinary 和 SecretString 必须且只能设置一个，最大支持32KB字节。</p>
     */
    public $SecretBinary;

    /**
     * @var string <p>文本类型凭据信息明文（不需要进行base64编码）。SecretBinary 和 SecretString 必须且只能设置一个，最大支持32KB字节。</p>
     */
    public $SecretString;

    /**
     * @var string <p>JSON 格式字符串，用于指定特定凭据类型的额外配置。</p>
     */
    public $AdditionalConfig;

    /**
     * @var array <p>标签列表</p>
     */
    public $Tags;

    /**
     * @var string <p>KMS的独享集群的ID。当KmsKeyId为空,并且用户的KMS存在有效的HsmClusterId时有效。</p>
     */
    public $KmsHsmClusterId;

    /**
     * @var integer <p>凭据加密类型</p><p>枚举值：</p><ul><li>0： KMS 密钥加密</li><li>1： 软密钥加密</li></ul>
     */
    public $EncryptType;

    /**
     * @param string $SecretName <p>凭据名称，同一region内不可重复，最长128字节，使用字母、数字或者 - _ 的组合，第一个字符必须为字母或者数字。一旦创建不可修改。</p>
     * @param string $VersionId <p>凭据版本，查询凭据信息时需要根据SecretName 和 VersionId进行查询，最长64 字节，使用字母、数字或者 - _ . 的组合并且以字母或数字开头。若为空，则使用默认的初始凭据版本号。可选，若为空或该凭据为云产品类凭据，则该版本号默认为 SSM_Current。</p>
     * @param string $Description <p>描述信息，用于详细描述用途等，最大支持2048字节。</p>
     * @param string $KmsKeyId <p>指定对凭据进行加密的KMS CMK。如果为空则表示使用Secrets Manager为您默认创建的CMK进行加密。您也可以指定在同region 下自行创建的KMS CMK进行加密。</p>
     * @param integer $SecretType <p>凭据类型，默认为0自定义凭据。</p>
     * @param string $SecretBinary <p>二进制凭据信息base64编码后的明文。SecretBinary 和 SecretString 必须且只能设置一个，最大支持32KB字节。</p>
     * @param string $SecretString <p>文本类型凭据信息明文（不需要进行base64编码）。SecretBinary 和 SecretString 必须且只能设置一个，最大支持32KB字节。</p>
     * @param string $AdditionalConfig <p>JSON 格式字符串，用于指定特定凭据类型的额外配置。</p>
     * @param array $Tags <p>标签列表</p>
     * @param string $KmsHsmClusterId <p>KMS的独享集群的ID。当KmsKeyId为空,并且用户的KMS存在有效的HsmClusterId时有效。</p>
     * @param integer $EncryptType <p>凭据加密类型</p><p>枚举值：</p><ul><li>0： KMS 密钥加密</li><li>1： 软密钥加密</li></ul>
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

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("KmsKeyId",$param) and $param["KmsKeyId"] !== null) {
            $this->KmsKeyId = $param["KmsKeyId"];
        }

        if (array_key_exists("SecretType",$param) and $param["SecretType"] !== null) {
            $this->SecretType = $param["SecretType"];
        }

        if (array_key_exists("SecretBinary",$param) and $param["SecretBinary"] !== null) {
            $this->SecretBinary = $param["SecretBinary"];
        }

        if (array_key_exists("SecretString",$param) and $param["SecretString"] !== null) {
            $this->SecretString = $param["SecretString"];
        }

        if (array_key_exists("AdditionalConfig",$param) and $param["AdditionalConfig"] !== null) {
            $this->AdditionalConfig = $param["AdditionalConfig"];
        }

        if (array_key_exists("Tags",$param) and $param["Tags"] !== null) {
            $this->Tags = [];
            foreach ($param["Tags"] as $key => $value){
                $obj = new Tag();
                $obj->deserialize($value);
                array_push($this->Tags, $obj);
            }
        }

        if (array_key_exists("KmsHsmClusterId",$param) and $param["KmsHsmClusterId"] !== null) {
            $this->KmsHsmClusterId = $param["KmsHsmClusterId"];
        }

        if (array_key_exists("EncryptType",$param) and $param["EncryptType"] !== null) {
            $this->EncryptType = $param["EncryptType"];
        }
    }
}
