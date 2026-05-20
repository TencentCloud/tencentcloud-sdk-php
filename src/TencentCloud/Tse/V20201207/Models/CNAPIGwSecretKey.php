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
 * 密钥信息
 *
 * @method string getSecretKeyId() 获取密钥id
 * @method void setSecretKeyId(string $SecretKeyId) 设置密钥id
 * @method string getName() 获取密钥名字
 * @method void setName(string $Name) 设置密钥名字
 * @method string getSecretType() 获取密钥类型：ApiKey/JWT
 * @method void setSecretType(string $SecretType) 设置密钥类型：ApiKey/JWT
 * @method string getStatus() 获取状态:
- Enable: 启用
- Disable: 禁用
 * @method void setStatus(string $Status) 设置状态:
- Enable: 启用
- Disable: 禁用
 * @method string getGenerateType() 获取生成方式:KMS/System/Custom
 * @method void setGenerateType(string $GenerateType) 设置生成方式:KMS/System/Custom
 * @method string getSecretValue() 获取密钥值
 * @method void setSecretValue(string $SecretValue) 设置密钥值
 * @method string getKmsKeyName() 获取KMS凭证名字
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setKmsKeyName(string $KmsKeyName) 设置KMS凭证名字
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getKmsKeyVersion() 获取KMS凭证版本
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setKmsKeyVersion(string $KmsKeyVersion) 设置KMS凭证版本
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDescription() 获取描述
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDescription(string $Description) 设置描述
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getCanBind() 获取是否可以绑定
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCanBind(boolean $CanBind) 设置是否可以绑定
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCreateTime() 获取创建时间
 * @method void setCreateTime(string $CreateTime) 设置创建时间
 * @method string getModifyTime() 获取修改时间
 * @method void setModifyTime(string $ModifyTime) 设置修改时间
 * @method integer getBindCount() 获取绑定数
 * @method void setBindCount(integer $BindCount) 设置绑定数
 * @method string getResourceType() 获取资源类型：
- Consumer 消费者
- LLM 模型服务
 * @method void setResourceType(string $ResourceType) 设置资源类型：
- Consumer 消费者
- LLM 模型服务
 */
class CNAPIGwSecretKey extends AbstractModel
{
    /**
     * @var string 密钥id
     */
    public $SecretKeyId;

    /**
     * @var string 密钥名字
     */
    public $Name;

    /**
     * @var string 密钥类型：ApiKey/JWT
     */
    public $SecretType;

    /**
     * @var string 状态:
- Enable: 启用
- Disable: 禁用
     */
    public $Status;

    /**
     * @var string 生成方式:KMS/System/Custom
     */
    public $GenerateType;

    /**
     * @var string 密钥值
     */
    public $SecretValue;

    /**
     * @var string KMS凭证名字
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $KmsKeyName;

    /**
     * @var string KMS凭证版本
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $KmsKeyVersion;

    /**
     * @var string 描述
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Description;

    /**
     * @var boolean 是否可以绑定
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CanBind;

    /**
     * @var string 创建时间
     */
    public $CreateTime;

    /**
     * @var string 修改时间
     */
    public $ModifyTime;

    /**
     * @var integer 绑定数
     */
    public $BindCount;

    /**
     * @var string 资源类型：
- Consumer 消费者
- LLM 模型服务
     */
    public $ResourceType;

    /**
     * @param string $SecretKeyId 密钥id
     * @param string $Name 密钥名字
     * @param string $SecretType 密钥类型：ApiKey/JWT
     * @param string $Status 状态:
- Enable: 启用
- Disable: 禁用
     * @param string $GenerateType 生成方式:KMS/System/Custom
     * @param string $SecretValue 密钥值
     * @param string $KmsKeyName KMS凭证名字
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $KmsKeyVersion KMS凭证版本
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Description 描述
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $CanBind 是否可以绑定
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CreateTime 创建时间
     * @param string $ModifyTime 修改时间
     * @param integer $BindCount 绑定数
     * @param string $ResourceType 资源类型：
- Consumer 消费者
- LLM 模型服务
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
        if (array_key_exists("SecretKeyId",$param) and $param["SecretKeyId"] !== null) {
            $this->SecretKeyId = $param["SecretKeyId"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("SecretType",$param) and $param["SecretType"] !== null) {
            $this->SecretType = $param["SecretType"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("GenerateType",$param) and $param["GenerateType"] !== null) {
            $this->GenerateType = $param["GenerateType"];
        }

        if (array_key_exists("SecretValue",$param) and $param["SecretValue"] !== null) {
            $this->SecretValue = $param["SecretValue"];
        }

        if (array_key_exists("KmsKeyName",$param) and $param["KmsKeyName"] !== null) {
            $this->KmsKeyName = $param["KmsKeyName"];
        }

        if (array_key_exists("KmsKeyVersion",$param) and $param["KmsKeyVersion"] !== null) {
            $this->KmsKeyVersion = $param["KmsKeyVersion"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("CanBind",$param) and $param["CanBind"] !== null) {
            $this->CanBind = $param["CanBind"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("ModifyTime",$param) and $param["ModifyTime"] !== null) {
            $this->ModifyTime = $param["ModifyTime"];
        }

        if (array_key_exists("BindCount",$param) and $param["BindCount"] !== null) {
            $this->BindCount = $param["BindCount"];
        }

        if (array_key_exists("ResourceType",$param) and $param["ResourceType"] !== null) {
            $this->ResourceType = $param["ResourceType"];
        }
    }
}
