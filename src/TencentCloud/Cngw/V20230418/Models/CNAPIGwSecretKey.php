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
namespace TencentCloud\Cngw\V20230418\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 密钥信息
 *
 * @method string getSecretKeyId() 获取<p>密钥id</p>
 * @method void setSecretKeyId(string $SecretKeyId) 设置<p>密钥id</p>
 * @method string getName() 获取<p>密钥名字</p>
 * @method void setName(string $Name) 设置<p>密钥名字</p>
 * @method string getSecretType() 获取<p>密钥协议类型。</p>
 * @method void setSecretType(string $SecretType) 设置<p>密钥协议类型。</p>
 * @method string getStatus() 获取<p>状态。</p><p>枚举值：</p><ul><li>Enable： 启用</li><li>Disable： 禁用</li></ul>
 * @method void setStatus(string $Status) 设置<p>状态。</p><p>枚举值：</p><ul><li>Enable： 启用</li><li>Disable： 禁用</li></ul>
 * @method string getGenerateType() 获取<p>密钥生成方式。</p><p>枚举值：</p><ul><li>System： 系统自动生成</li><li>Custom： 用户自定义</li><li>KMS： 使用 KMS 密钥</li></ul>
 * @method void setGenerateType(string $GenerateType) 设置<p>密钥生成方式。</p><p>枚举值：</p><ul><li>System： 系统自动生成</li><li>Custom： 用户自定义</li><li>KMS： 使用 KMS 密钥</li></ul>
 * @method string getSecretValue() 获取<p>密钥明文</p>
 * @method void setSecretValue(string $SecretValue) 设置<p>密钥明文</p>
 * @method string getKmsKeyName() 获取<p>KMS凭证名字</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setKmsKeyName(string $KmsKeyName) 设置<p>KMS凭证名字</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getKmsKeyVersion() 获取<p>KMS凭证版本</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setKmsKeyVersion(string $KmsKeyVersion) 设置<p>KMS凭证版本</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDescription() 获取<p>描述</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDescription(string $Description) 设置<p>描述</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getCanBind() 获取<p>是否可以绑定</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCanBind(boolean $CanBind) 设置<p>是否可以绑定</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCreateTime() 获取<p>创建时间</p>
 * @method void setCreateTime(string $CreateTime) 设置<p>创建时间</p>
 * @method string getModifyTime() 获取<p>修改时间</p>
 * @method void setModifyTime(string $ModifyTime) 设置<p>修改时间</p>
 * @method integer getBindCount() 获取<p>绑定数</p>
 * @method void setBindCount(integer $BindCount) 设置<p>绑定数</p>
 * @method string getResourceType() 获取<p>密钥归属资源类型。</p><p>枚举值：</p><ul><li>Consumer： 消费者</li><li>ModelService： 模型服务</li></ul>
 * @method void setResourceType(string $ResourceType) 设置<p>密钥归属资源类型。</p><p>枚举值：</p><ul><li>Consumer： 消费者</li><li>ModelService： 模型服务</li></ul>
 */
class CNAPIGwSecretKey extends AbstractModel
{
    /**
     * @var string <p>密钥id</p>
     */
    public $SecretKeyId;

    /**
     * @var string <p>密钥名字</p>
     */
    public $Name;

    /**
     * @var string <p>密钥协议类型。</p>
     */
    public $SecretType;

    /**
     * @var string <p>状态。</p><p>枚举值：</p><ul><li>Enable： 启用</li><li>Disable： 禁用</li></ul>
     */
    public $Status;

    /**
     * @var string <p>密钥生成方式。</p><p>枚举值：</p><ul><li>System： 系统自动生成</li><li>Custom： 用户自定义</li><li>KMS： 使用 KMS 密钥</li></ul>
     */
    public $GenerateType;

    /**
     * @var string <p>密钥明文</p>
     */
    public $SecretValue;

    /**
     * @var string <p>KMS凭证名字</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $KmsKeyName;

    /**
     * @var string <p>KMS凭证版本</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $KmsKeyVersion;

    /**
     * @var string <p>描述</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Description;

    /**
     * @var boolean <p>是否可以绑定</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CanBind;

    /**
     * @var string <p>创建时间</p>
     */
    public $CreateTime;

    /**
     * @var string <p>修改时间</p>
     */
    public $ModifyTime;

    /**
     * @var integer <p>绑定数</p>
     */
    public $BindCount;

    /**
     * @var string <p>密钥归属资源类型。</p><p>枚举值：</p><ul><li>Consumer： 消费者</li><li>ModelService： 模型服务</li></ul>
     */
    public $ResourceType;

    /**
     * @param string $SecretKeyId <p>密钥id</p>
     * @param string $Name <p>密钥名字</p>
     * @param string $SecretType <p>密钥协议类型。</p>
     * @param string $Status <p>状态。</p><p>枚举值：</p><ul><li>Enable： 启用</li><li>Disable： 禁用</li></ul>
     * @param string $GenerateType <p>密钥生成方式。</p><p>枚举值：</p><ul><li>System： 系统自动生成</li><li>Custom： 用户自定义</li><li>KMS： 使用 KMS 密钥</li></ul>
     * @param string $SecretValue <p>密钥明文</p>
     * @param string $KmsKeyName <p>KMS凭证名字</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $KmsKeyVersion <p>KMS凭证版本</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Description <p>描述</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $CanBind <p>是否可以绑定</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CreateTime <p>创建时间</p>
     * @param string $ModifyTime <p>修改时间</p>
     * @param integer $BindCount <p>绑定数</p>
     * @param string $ResourceType <p>密钥归属资源类型。</p><p>枚举值：</p><ul><li>Consumer： 消费者</li><li>ModelService： 模型服务</li></ul>
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
