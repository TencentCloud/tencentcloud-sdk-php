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
 * CreateSSHKeyPairSecret请求参数结构体
 *
 * @method string getSecretName() 获取<p>凭据名称，同一region内不可重复，最长128字节，使用字母、数字或者 - _ 的组合，第一个字符必须为字母或者数字。</p>
 * @method void setSecretName(string $SecretName) 设置<p>凭据名称，同一region内不可重复，最长128字节，使用字母、数字或者 - _ 的组合，第一个字符必须为字母或者数字。</p>
 * @method integer getProjectId() 获取<p>密钥对创建后所属的项目ID。</p>
 * @method void setProjectId(integer $ProjectId) 设置<p>密钥对创建后所属的项目ID。</p>
 * @method string getDescription() 获取<p>描述信息，用于详细描述用途等，最大支持2048字节。</p>
 * @method void setDescription(string $Description) 设置<p>描述信息，用于详细描述用途等，最大支持2048字节。</p>
 * @method string getKmsKeyId() 获取<p>指定对凭据进行加密的KMS CMK。<br>如果为空则表示使用Secrets Manager为您默认创建的CMK进行加密。<br>您也可以指定在同region 下自行创建的KMS CMK进行加密。</p>
 * @method void setKmsKeyId(string $KmsKeyId) 设置<p>指定对凭据进行加密的KMS CMK。<br>如果为空则表示使用Secrets Manager为您默认创建的CMK进行加密。<br>您也可以指定在同region 下自行创建的KMS CMK进行加密。</p>
 * @method array getTags() 获取<p>标签列表。</p>
 * @method void setTags(array $Tags) 设置<p>标签列表。</p>
 * @method string getSSHKeyName() 获取<p>用户自定义输入的SSH密钥对的名称，可由数字，字母和下划线组成，只能以数字和字母开头，长度不超过25个字符。</p>
 * @method void setSSHKeyName(string $SSHKeyName) 设置<p>用户自定义输入的SSH密钥对的名称，可由数字，字母和下划线组成，只能以数字和字母开头，长度不超过25个字符。</p>
 * @method string getKmsHsmClusterId() 获取<p>KMS的独享集群的ID。当KmsKeyId为空,并且用户的KMS存在有效的HsmClusterId时有效。</p>
 * @method void setKmsHsmClusterId(string $KmsHsmClusterId) 设置<p>KMS的独享集群的ID。当KmsKeyId为空,并且用户的KMS存在有效的HsmClusterId时有效。</p>
 * @method integer getEncryptType() 获取<p>凭据加密类型</p><p>枚举值：</p><ul><li>0： KMS 密钥</li><li>1： 软件密钥</li></ul><p>默认值：0</p>
 * @method void setEncryptType(integer $EncryptType) 设置<p>凭据加密类型</p><p>枚举值：</p><ul><li>0： KMS 密钥</li><li>1： 软件密钥</li></ul><p>默认值：0</p>
 */
class CreateSSHKeyPairSecretRequest extends AbstractModel
{
    /**
     * @var string <p>凭据名称，同一region内不可重复，最长128字节，使用字母、数字或者 - _ 的组合，第一个字符必须为字母或者数字。</p>
     */
    public $SecretName;

    /**
     * @var integer <p>密钥对创建后所属的项目ID。</p>
     */
    public $ProjectId;

    /**
     * @var string <p>描述信息，用于详细描述用途等，最大支持2048字节。</p>
     */
    public $Description;

    /**
     * @var string <p>指定对凭据进行加密的KMS CMK。<br>如果为空则表示使用Secrets Manager为您默认创建的CMK进行加密。<br>您也可以指定在同region 下自行创建的KMS CMK进行加密。</p>
     */
    public $KmsKeyId;

    /**
     * @var array <p>标签列表。</p>
     */
    public $Tags;

    /**
     * @var string <p>用户自定义输入的SSH密钥对的名称，可由数字，字母和下划线组成，只能以数字和字母开头，长度不超过25个字符。</p>
     */
    public $SSHKeyName;

    /**
     * @var string <p>KMS的独享集群的ID。当KmsKeyId为空,并且用户的KMS存在有效的HsmClusterId时有效。</p>
     */
    public $KmsHsmClusterId;

    /**
     * @var integer <p>凭据加密类型</p><p>枚举值：</p><ul><li>0： KMS 密钥</li><li>1： 软件密钥</li></ul><p>默认值：0</p>
     */
    public $EncryptType;

    /**
     * @param string $SecretName <p>凭据名称，同一region内不可重复，最长128字节，使用字母、数字或者 - _ 的组合，第一个字符必须为字母或者数字。</p>
     * @param integer $ProjectId <p>密钥对创建后所属的项目ID。</p>
     * @param string $Description <p>描述信息，用于详细描述用途等，最大支持2048字节。</p>
     * @param string $KmsKeyId <p>指定对凭据进行加密的KMS CMK。<br>如果为空则表示使用Secrets Manager为您默认创建的CMK进行加密。<br>您也可以指定在同region 下自行创建的KMS CMK进行加密。</p>
     * @param array $Tags <p>标签列表。</p>
     * @param string $SSHKeyName <p>用户自定义输入的SSH密钥对的名称，可由数字，字母和下划线组成，只能以数字和字母开头，长度不超过25个字符。</p>
     * @param string $KmsHsmClusterId <p>KMS的独享集群的ID。当KmsKeyId为空,并且用户的KMS存在有效的HsmClusterId时有效。</p>
     * @param integer $EncryptType <p>凭据加密类型</p><p>枚举值：</p><ul><li>0： KMS 密钥</li><li>1： 软件密钥</li></ul><p>默认值：0</p>
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

        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("KmsKeyId",$param) and $param["KmsKeyId"] !== null) {
            $this->KmsKeyId = $param["KmsKeyId"];
        }

        if (array_key_exists("Tags",$param) and $param["Tags"] !== null) {
            $this->Tags = [];
            foreach ($param["Tags"] as $key => $value){
                $obj = new Tag();
                $obj->deserialize($value);
                array_push($this->Tags, $obj);
            }
        }

        if (array_key_exists("SSHKeyName",$param) and $param["SSHKeyName"] !== null) {
            $this->SSHKeyName = $param["SSHKeyName"];
        }

        if (array_key_exists("KmsHsmClusterId",$param) and $param["KmsHsmClusterId"] !== null) {
            $this->KmsHsmClusterId = $param["KmsHsmClusterId"];
        }

        if (array_key_exists("EncryptType",$param) and $param["EncryptType"] !== null) {
            $this->EncryptType = $param["EncryptType"];
        }
    }
}
