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
 * 凭据的基础信息
 *
 * @method string getSecretName() 获取<p>凭据名称</p>
 * @method void setSecretName(string $SecretName) 设置<p>凭据名称</p>
 * @method string getDescription() 获取<p>凭据的描述信息</p>
 * @method void setDescription(string $Description) 设置<p>凭据的描述信息</p>
 * @method string getKmsKeyId() 获取<p>用于加密凭据的KMS KeyId</p>
 * @method void setKmsKeyId(string $KmsKeyId) 设置<p>用于加密凭据的KMS KeyId</p>
 * @method integer getCreateUin() 获取<p>创建者UIN</p>
 * @method void setCreateUin(integer $CreateUin) 设置<p>创建者UIN</p>
 * @method string getStatus() 获取<p>凭据状态：Enabled、Disabled、PendingDelete、Creating、Failed</p>
 * @method void setStatus(string $Status) 设置<p>凭据状态：Enabled、Disabled、PendingDelete、Creating、Failed</p>
 * @method integer getDeleteTime() 获取<p>凭据删除日期，对于status为PendingDelete 的有效，unix时间戳</p>
 * @method void setDeleteTime(integer $DeleteTime) 设置<p>凭据删除日期，对于status为PendingDelete 的有效，unix时间戳</p>
 * @method integer getCreateTime() 获取<p>凭据创建时间，unix时间戳</p>
 * @method void setCreateTime(integer $CreateTime) 设置<p>凭据创建时间，unix时间戳</p>
 * @method string getKmsKeyType() 获取<p>用于加密凭据的KMS CMK类型，DEFAULT 表示SecretsManager 创建的默认密钥， CUSTOMER 表示用户指定的密钥</p>
 * @method void setKmsKeyType(string $KmsKeyType) 设置<p>用于加密凭据的KMS CMK类型，DEFAULT 表示SecretsManager 创建的默认密钥， CUSTOMER 表示用户指定的密钥</p>
 * @method integer getRotationStatus() 获取<p>1:--开启轮转；0--禁止轮转</p>
 * @method void setRotationStatus(integer $RotationStatus) 设置<p>1:--开启轮转；0--禁止轮转</p>
 * @method integer getNextRotationTime() 获取<p>下一次轮转开始时间，uinx 时间戳</p>
 * @method void setNextRotationTime(integer $NextRotationTime) 设置<p>下一次轮转开始时间，uinx 时间戳</p>
 * @method integer getSecretType() 获取<p>0 -- 用户自定义凭据；<br>1 -- 云产品凭据；<br>2 -- SSH密钥对凭据；<br>3 -- 云API密钥对凭据；<br>4 -- Redis类型凭据；</p>
 * @method void setSecretType(integer $SecretType) 设置<p>0 -- 用户自定义凭据；<br>1 -- 云产品凭据；<br>2 -- SSH密钥对凭据；<br>3 -- 云API密钥对凭据；<br>4 -- Redis类型凭据；</p>
 * @method string getProductName() 获取<p>云产品名称，仅在SecretType为1，即凭据类型为云产品凭据时生效</p>
 * @method void setProductName(string $ProductName) 设置<p>云产品名称，仅在SecretType为1，即凭据类型为云产品凭据时生效</p>
 * @method string getResourceName() 获取<p>当凭据类型为SSH密钥对凭据时，此字段有效，用于表示SSH密钥对凭据的名称。</p>
 * @method void setResourceName(string $ResourceName) 设置<p>当凭据类型为SSH密钥对凭据时，此字段有效，用于表示SSH密钥对凭据的名称。</p>
 * @method integer getProjectID() 获取<p>当凭据类型为SSH密钥对凭据时，此字段有效，用于表示SSH密钥对所属的项目ID。</p>
 * @method void setProjectID(integer $ProjectID) 设置<p>当凭据类型为SSH密钥对凭据时，此字段有效，用于表示SSH密钥对所属的项目ID。</p>
 * @method array getAssociatedInstanceIDs() 获取<p>当凭据类型为SSH密钥对凭据时，此字段有效，用于表示SSH密钥对所关联的CVM实例ID。</p>
 * @method void setAssociatedInstanceIDs(array $AssociatedInstanceIDs) 设置<p>当凭据类型为SSH密钥对凭据时，此字段有效，用于表示SSH密钥对所关联的CVM实例ID。</p>
 * @method integer getTargetUin() 获取<p>当凭据类型为云API密钥对凭据时，此字段有效，用于表示云API密钥对所属的用户UIN。</p>
 * @method void setTargetUin(integer $TargetUin) 设置<p>当凭据类型为云API密钥对凭据时，此字段有效，用于表示云API密钥对所属的用户UIN。</p>
 * @method integer getRotationFrequency() 获取<p>轮转的频率，以天作为单位，在轮转开启状态下生效。</p>
 * @method void setRotationFrequency(integer $RotationFrequency) 设置<p>轮转的频率，以天作为单位，在轮转开启状态下生效。</p>
 * @method string getResourceID() 获取<p>云产品凭据对应的云产品实例 ID 号。</p>
 * @method void setResourceID(string $ResourceID) 设置<p>云产品凭据对应的云产品实例 ID 号。</p>
 * @method string getRotationBeginTime() 获取<p>用户指定的轮转开始时间。</p>
 * @method void setRotationBeginTime(string $RotationBeginTime) 设置<p>用户指定的轮转开始时间。</p>
 * @method integer getEncryptType() 获取<p>凭据加密类型</p><p>枚举值：</p><ul><li>0： KMS 密钥加密</li><li>1： 软密钥加密</li></ul><p>默认值：0</p>
 * @method void setEncryptType(integer $EncryptType) 设置<p>凭据加密类型</p><p>枚举值：</p><ul><li>0： KMS 密钥加密</li><li>1： 软密钥加密</li></ul><p>默认值：0</p>
 * @method boolean getEncryptSwitching() 获取<p>凭据密钥加密切换中</p>
 * @method void setEncryptSwitching(boolean $EncryptSwitching) 设置<p>凭据密钥加密切换中</p>
 * @method string getCreateUinString() 获取<p>创建者 UIN 字符串</p>
 * @method void setCreateUinString(string $CreateUinString) 设置<p>创建者 UIN 字符串</p>
 * @method string getTargetUinString() 获取<p>所属者 UIN 字符串</p><p>用以兼容uint64,防止精度丢失</p>
 * @method void setTargetUinString(string $TargetUinString) 设置<p>所属者 UIN 字符串</p><p>用以兼容uint64,防止精度丢失</p>
 */
class SecretMetadata extends AbstractModel
{
    /**
     * @var string <p>凭据名称</p>
     */
    public $SecretName;

    /**
     * @var string <p>凭据的描述信息</p>
     */
    public $Description;

    /**
     * @var string <p>用于加密凭据的KMS KeyId</p>
     */
    public $KmsKeyId;

    /**
     * @var integer <p>创建者UIN</p>
     */
    public $CreateUin;

    /**
     * @var string <p>凭据状态：Enabled、Disabled、PendingDelete、Creating、Failed</p>
     */
    public $Status;

    /**
     * @var integer <p>凭据删除日期，对于status为PendingDelete 的有效，unix时间戳</p>
     */
    public $DeleteTime;

    /**
     * @var integer <p>凭据创建时间，unix时间戳</p>
     */
    public $CreateTime;

    /**
     * @var string <p>用于加密凭据的KMS CMK类型，DEFAULT 表示SecretsManager 创建的默认密钥， CUSTOMER 表示用户指定的密钥</p>
     */
    public $KmsKeyType;

    /**
     * @var integer <p>1:--开启轮转；0--禁止轮转</p>
     */
    public $RotationStatus;

    /**
     * @var integer <p>下一次轮转开始时间，uinx 时间戳</p>
     */
    public $NextRotationTime;

    /**
     * @var integer <p>0 -- 用户自定义凭据；<br>1 -- 云产品凭据；<br>2 -- SSH密钥对凭据；<br>3 -- 云API密钥对凭据；<br>4 -- Redis类型凭据；</p>
     */
    public $SecretType;

    /**
     * @var string <p>云产品名称，仅在SecretType为1，即凭据类型为云产品凭据时生效</p>
     */
    public $ProductName;

    /**
     * @var string <p>当凭据类型为SSH密钥对凭据时，此字段有效，用于表示SSH密钥对凭据的名称。</p>
     */
    public $ResourceName;

    /**
     * @var integer <p>当凭据类型为SSH密钥对凭据时，此字段有效，用于表示SSH密钥对所属的项目ID。</p>
     */
    public $ProjectID;

    /**
     * @var array <p>当凭据类型为SSH密钥对凭据时，此字段有效，用于表示SSH密钥对所关联的CVM实例ID。</p>
     */
    public $AssociatedInstanceIDs;

    /**
     * @var integer <p>当凭据类型为云API密钥对凭据时，此字段有效，用于表示云API密钥对所属的用户UIN。</p>
     */
    public $TargetUin;

    /**
     * @var integer <p>轮转的频率，以天作为单位，在轮转开启状态下生效。</p>
     */
    public $RotationFrequency;

    /**
     * @var string <p>云产品凭据对应的云产品实例 ID 号。</p>
     */
    public $ResourceID;

    /**
     * @var string <p>用户指定的轮转开始时间。</p>
     */
    public $RotationBeginTime;

    /**
     * @var integer <p>凭据加密类型</p><p>枚举值：</p><ul><li>0： KMS 密钥加密</li><li>1： 软密钥加密</li></ul><p>默认值：0</p>
     */
    public $EncryptType;

    /**
     * @var boolean <p>凭据密钥加密切换中</p>
     */
    public $EncryptSwitching;

    /**
     * @var string <p>创建者 UIN 字符串</p>
     */
    public $CreateUinString;

    /**
     * @var string <p>所属者 UIN 字符串</p><p>用以兼容uint64,防止精度丢失</p>
     */
    public $TargetUinString;

    /**
     * @param string $SecretName <p>凭据名称</p>
     * @param string $Description <p>凭据的描述信息</p>
     * @param string $KmsKeyId <p>用于加密凭据的KMS KeyId</p>
     * @param integer $CreateUin <p>创建者UIN</p>
     * @param string $Status <p>凭据状态：Enabled、Disabled、PendingDelete、Creating、Failed</p>
     * @param integer $DeleteTime <p>凭据删除日期，对于status为PendingDelete 的有效，unix时间戳</p>
     * @param integer $CreateTime <p>凭据创建时间，unix时间戳</p>
     * @param string $KmsKeyType <p>用于加密凭据的KMS CMK类型，DEFAULT 表示SecretsManager 创建的默认密钥， CUSTOMER 表示用户指定的密钥</p>
     * @param integer $RotationStatus <p>1:--开启轮转；0--禁止轮转</p>
     * @param integer $NextRotationTime <p>下一次轮转开始时间，uinx 时间戳</p>
     * @param integer $SecretType <p>0 -- 用户自定义凭据；<br>1 -- 云产品凭据；<br>2 -- SSH密钥对凭据；<br>3 -- 云API密钥对凭据；<br>4 -- Redis类型凭据；</p>
     * @param string $ProductName <p>云产品名称，仅在SecretType为1，即凭据类型为云产品凭据时生效</p>
     * @param string $ResourceName <p>当凭据类型为SSH密钥对凭据时，此字段有效，用于表示SSH密钥对凭据的名称。</p>
     * @param integer $ProjectID <p>当凭据类型为SSH密钥对凭据时，此字段有效，用于表示SSH密钥对所属的项目ID。</p>
     * @param array $AssociatedInstanceIDs <p>当凭据类型为SSH密钥对凭据时，此字段有效，用于表示SSH密钥对所关联的CVM实例ID。</p>
     * @param integer $TargetUin <p>当凭据类型为云API密钥对凭据时，此字段有效，用于表示云API密钥对所属的用户UIN。</p>
     * @param integer $RotationFrequency <p>轮转的频率，以天作为单位，在轮转开启状态下生效。</p>
     * @param string $ResourceID <p>云产品凭据对应的云产品实例 ID 号。</p>
     * @param string $RotationBeginTime <p>用户指定的轮转开始时间。</p>
     * @param integer $EncryptType <p>凭据加密类型</p><p>枚举值：</p><ul><li>0： KMS 密钥加密</li><li>1： 软密钥加密</li></ul><p>默认值：0</p>
     * @param boolean $EncryptSwitching <p>凭据密钥加密切换中</p>
     * @param string $CreateUinString <p>创建者 UIN 字符串</p>
     * @param string $TargetUinString <p>所属者 UIN 字符串</p><p>用以兼容uint64,防止精度丢失</p>
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

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("KmsKeyId",$param) and $param["KmsKeyId"] !== null) {
            $this->KmsKeyId = $param["KmsKeyId"];
        }

        if (array_key_exists("CreateUin",$param) and $param["CreateUin"] !== null) {
            $this->CreateUin = $param["CreateUin"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("DeleteTime",$param) and $param["DeleteTime"] !== null) {
            $this->DeleteTime = $param["DeleteTime"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("KmsKeyType",$param) and $param["KmsKeyType"] !== null) {
            $this->KmsKeyType = $param["KmsKeyType"];
        }

        if (array_key_exists("RotationStatus",$param) and $param["RotationStatus"] !== null) {
            $this->RotationStatus = $param["RotationStatus"];
        }

        if (array_key_exists("NextRotationTime",$param) and $param["NextRotationTime"] !== null) {
            $this->NextRotationTime = $param["NextRotationTime"];
        }

        if (array_key_exists("SecretType",$param) and $param["SecretType"] !== null) {
            $this->SecretType = $param["SecretType"];
        }

        if (array_key_exists("ProductName",$param) and $param["ProductName"] !== null) {
            $this->ProductName = $param["ProductName"];
        }

        if (array_key_exists("ResourceName",$param) and $param["ResourceName"] !== null) {
            $this->ResourceName = $param["ResourceName"];
        }

        if (array_key_exists("ProjectID",$param) and $param["ProjectID"] !== null) {
            $this->ProjectID = $param["ProjectID"];
        }

        if (array_key_exists("AssociatedInstanceIDs",$param) and $param["AssociatedInstanceIDs"] !== null) {
            $this->AssociatedInstanceIDs = $param["AssociatedInstanceIDs"];
        }

        if (array_key_exists("TargetUin",$param) and $param["TargetUin"] !== null) {
            $this->TargetUin = $param["TargetUin"];
        }

        if (array_key_exists("RotationFrequency",$param) and $param["RotationFrequency"] !== null) {
            $this->RotationFrequency = $param["RotationFrequency"];
        }

        if (array_key_exists("ResourceID",$param) and $param["ResourceID"] !== null) {
            $this->ResourceID = $param["ResourceID"];
        }

        if (array_key_exists("RotationBeginTime",$param) and $param["RotationBeginTime"] !== null) {
            $this->RotationBeginTime = $param["RotationBeginTime"];
        }

        if (array_key_exists("EncryptType",$param) and $param["EncryptType"] !== null) {
            $this->EncryptType = $param["EncryptType"];
        }

        if (array_key_exists("EncryptSwitching",$param) and $param["EncryptSwitching"] !== null) {
            $this->EncryptSwitching = $param["EncryptSwitching"];
        }

        if (array_key_exists("CreateUinString",$param) and $param["CreateUinString"] !== null) {
            $this->CreateUinString = $param["CreateUinString"];
        }

        if (array_key_exists("TargetUinString",$param) and $param["TargetUinString"] !== null) {
            $this->TargetUinString = $param["TargetUinString"];
        }
    }
}
