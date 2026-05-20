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
namespace TencentCloud\Tse\V20201207\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateCloudNativeAPIGatewaySecretKey请求参数结构体
 *
 * @method string getGatewayId() 获取实例 ID
 * @method void setGatewayId(string $GatewayId) 设置实例 ID
 * @method string getSecretType() 获取密钥类型： ApiKey
 * @method void setSecretType(string $SecretType) 设置密钥类型： ApiKey
 * @method string getName() 获取密钥名字
 * @method void setName(string $Name) 设置密钥名字
 * @method string getGenerateType() 获取生成方式：  

密钥类型 Consumer 时选项：  

- KMS
- System 系统  
- Custom  自定义  

密钥类型是 LLM 时选项 

- KMS 
- Custom  自定义 
 * @method void setGenerateType(string $GenerateType) 设置生成方式：  

密钥类型 Consumer 时选项：  

- KMS
- System 系统  
- Custom  自定义  

密钥类型是 LLM 时选项 

- KMS 
- Custom  自定义 
 * @method string getResourceType() 获取资源类型：
- Consumer 消费者
- LLM 模型服务
 * @method void setResourceType(string $ResourceType) 设置资源类型：
- Consumer 消费者
- LLM 模型服务
 * @method string getKmsKeyName() 获取KMS 的凭证名字， GenerateType 时 kms 必填
 * @method void setKmsKeyName(string $KmsKeyName) 设置KMS 的凭证名字， GenerateType 时 kms 必填
 * @method string getKmsKeyVersion() 获取KMS 的凭证版本， GenerateType 时 kms 必填
 * @method void setKmsKeyVersion(string $KmsKeyVersion) 设置KMS 的凭证版本， GenerateType 时 kms 必填
 * @method string getSecretValue() 获取GenerateType 等于 Custom 是必填
 * @method void setSecretValue(string $SecretValue) 设置GenerateType 等于 Custom 是必填
 * @method string getDescription() 获取描述
 * @method void setDescription(string $Description) 设置描述
 */
class CreateCloudNativeAPIGatewaySecretKeyRequest extends AbstractModel
{
    /**
     * @var string 实例 ID
     */
    public $GatewayId;

    /**
     * @var string 密钥类型： ApiKey
     */
    public $SecretType;

    /**
     * @var string 密钥名字
     */
    public $Name;

    /**
     * @var string 生成方式：  

密钥类型 Consumer 时选项：  

- KMS
- System 系统  
- Custom  自定义  

密钥类型是 LLM 时选项 

- KMS 
- Custom  自定义 
     */
    public $GenerateType;

    /**
     * @var string 资源类型：
- Consumer 消费者
- LLM 模型服务
     */
    public $ResourceType;

    /**
     * @var string KMS 的凭证名字， GenerateType 时 kms 必填
     */
    public $KmsKeyName;

    /**
     * @var string KMS 的凭证版本， GenerateType 时 kms 必填
     */
    public $KmsKeyVersion;

    /**
     * @var string GenerateType 等于 Custom 是必填
     */
    public $SecretValue;

    /**
     * @var string 描述
     */
    public $Description;

    /**
     * @param string $GatewayId 实例 ID
     * @param string $SecretType 密钥类型： ApiKey
     * @param string $Name 密钥名字
     * @param string $GenerateType 生成方式：  

密钥类型 Consumer 时选项：  

- KMS
- System 系统  
- Custom  自定义  

密钥类型是 LLM 时选项 

- KMS 
- Custom  自定义 
     * @param string $ResourceType 资源类型：
- Consumer 消费者
- LLM 模型服务
     * @param string $KmsKeyName KMS 的凭证名字， GenerateType 时 kms 必填
     * @param string $KmsKeyVersion KMS 的凭证版本， GenerateType 时 kms 必填
     * @param string $SecretValue GenerateType 等于 Custom 是必填
     * @param string $Description 描述
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
        if (array_key_exists("GatewayId",$param) and $param["GatewayId"] !== null) {
            $this->GatewayId = $param["GatewayId"];
        }

        if (array_key_exists("SecretType",$param) and $param["SecretType"] !== null) {
            $this->SecretType = $param["SecretType"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("GenerateType",$param) and $param["GenerateType"] !== null) {
            $this->GenerateType = $param["GenerateType"];
        }

        if (array_key_exists("ResourceType",$param) and $param["ResourceType"] !== null) {
            $this->ResourceType = $param["ResourceType"];
        }

        if (array_key_exists("KmsKeyName",$param) and $param["KmsKeyName"] !== null) {
            $this->KmsKeyName = $param["KmsKeyName"];
        }

        if (array_key_exists("KmsKeyVersion",$param) and $param["KmsKeyVersion"] !== null) {
            $this->KmsKeyVersion = $param["KmsKeyVersion"];
        }

        if (array_key_exists("SecretValue",$param) and $param["SecretValue"] !== null) {
            $this->SecretValue = $param["SecretValue"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }
    }
}
