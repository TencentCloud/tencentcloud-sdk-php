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
namespace TencentCloud\Ssm\V20190923\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateSSHKeyPairSecret请求参数结构体
 *
 * @method string getSecretName() 获取凭据名称，同一region内不可重复，最长128字节，使用字母、数字或者 - _ 的组合，第一个字符必须为字母或者数字。
 * @method void setSecretName(string $SecretName) 设置凭据名称，同一region内不可重复，最长128字节，使用字母、数字或者 - _ 的组合，第一个字符必须为字母或者数字。
 * @method integer getProjectId() 获取密钥对创建后所属的项目ID。
 * @method void setProjectId(integer $ProjectId) 设置密钥对创建后所属的项目ID。
 * @method string getDescription() 获取描述信息，用于详细描述用途等，最大支持2048字节。
 * @method void setDescription(string $Description) 设置描述信息，用于详细描述用途等，最大支持2048字节。
 * @method string getKmsKeyId() 获取指定对凭据进行加密的KMS CMK。
如果为空则表示使用Secrets Manager为您默认创建的CMK进行加密。
您也可以指定在同region 下自行创建的KMS CMK进行加密。
 * @method void setKmsKeyId(string $KmsKeyId) 设置指定对凭据进行加密的KMS CMK。
如果为空则表示使用Secrets Manager为您默认创建的CMK进行加密。
您也可以指定在同region 下自行创建的KMS CMK进行加密。
 * @method array getTags() 获取标签列表。
 * @method void setTags(array $Tags) 设置标签列表。
 * @method string getSSHKeyName() 获取用户自定义输入的SSH密钥对的名称，可由数字，字母和下划线组成，只能以数字和字母开头，长度不超过25个字符。
 * @method void setSSHKeyName(string $SSHKeyName) 设置用户自定义输入的SSH密钥对的名称，可由数字，字母和下划线组成，只能以数字和字母开头，长度不超过25个字符。
 */
class CreateSSHKeyPairSecretRequest extends AbstractModel
{
    /**
     * @var string 凭据名称，同一region内不可重复，最长128字节，使用字母、数字或者 - _ 的组合，第一个字符必须为字母或者数字。
     */
    public $SecretName;

    /**
     * @var integer 密钥对创建后所属的项目ID。
     */
    public $ProjectId;

    /**
     * @var string 描述信息，用于详细描述用途等，最大支持2048字节。
     */
    public $Description;

    /**
     * @var string 指定对凭据进行加密的KMS CMK。
如果为空则表示使用Secrets Manager为您默认创建的CMK进行加密。
您也可以指定在同region 下自行创建的KMS CMK进行加密。
     */
    public $KmsKeyId;

    /**
     * @var array 标签列表。
     */
    public $Tags;

    /**
     * @var string 用户自定义输入的SSH密钥对的名称，可由数字，字母和下划线组成，只能以数字和字母开头，长度不超过25个字符。
     */
    public $SSHKeyName;

    /**
     * @param string $SecretName 凭据名称，同一region内不可重复，最长128字节，使用字母、数字或者 - _ 的组合，第一个字符必须为字母或者数字。
     * @param integer $ProjectId 密钥对创建后所属的项目ID。
     * @param string $Description 描述信息，用于详细描述用途等，最大支持2048字节。
     * @param string $KmsKeyId 指定对凭据进行加密的KMS CMK。
如果为空则表示使用Secrets Manager为您默认创建的CMK进行加密。
您也可以指定在同region 下自行创建的KMS CMK进行加密。
     * @param array $Tags 标签列表。
     * @param string $SSHKeyName 用户自定义输入的SSH密钥对的名称，可由数字，字母和下划线组成，只能以数字和字母开头，长度不超过25个字符。
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
    }
}
