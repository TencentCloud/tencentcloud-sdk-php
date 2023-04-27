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
 * 凭据的基础信息
 *
 * @method string getSecretName() 获取凭据名称
 * @method void setSecretName(string $SecretName) 设置凭据名称
 * @method string getDescription() 获取凭据的描述信息
 * @method void setDescription(string $Description) 设置凭据的描述信息
 * @method string getKmsKeyId() 获取用于加密凭据的KMS KeyId
 * @method void setKmsKeyId(string $KmsKeyId) 设置用于加密凭据的KMS KeyId
 * @method integer getCreateUin() 获取创建者UIN
 * @method void setCreateUin(integer $CreateUin) 设置创建者UIN
 * @method string getStatus() 获取凭据状态：Enabled、Disabled、PendingDelete、Creating、Failed
 * @method void setStatus(string $Status) 设置凭据状态：Enabled、Disabled、PendingDelete、Creating、Failed
 * @method integer getDeleteTime() 获取凭据删除日期，对于status为PendingDelete 的有效，unix时间戳
 * @method void setDeleteTime(integer $DeleteTime) 设置凭据删除日期，对于status为PendingDelete 的有效，unix时间戳
 * @method integer getCreateTime() 获取凭据创建时间，unix时间戳
 * @method void setCreateTime(integer $CreateTime) 设置凭据创建时间，unix时间戳
 * @method string getKmsKeyType() 获取用于加密凭据的KMS CMK类型，DEFAULT 表示SecretsManager 创建的默认密钥， CUSTOMER 表示用户指定的密钥
 * @method void setKmsKeyType(string $KmsKeyType) 设置用于加密凭据的KMS CMK类型，DEFAULT 表示SecretsManager 创建的默认密钥， CUSTOMER 表示用户指定的密钥
 * @method integer getRotationStatus() 获取1:--开启轮转；0--禁止轮转
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRotationStatus(integer $RotationStatus) 设置1:--开启轮转；0--禁止轮转
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getNextRotationTime() 获取下一次轮转开始时间，uinx 时间戳
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setNextRotationTime(integer $NextRotationTime) 设置下一次轮转开始时间，uinx 时间戳
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getSecretType() 获取0 -- 用户自定义凭据；
1 -- 云产品凭据；
2 -- SSH密钥对凭据；
3 -- 云API密钥对凭据；
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSecretType(integer $SecretType) 设置0 -- 用户自定义凭据；
1 -- 云产品凭据；
2 -- SSH密钥对凭据；
3 -- 云API密钥对凭据；
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getProductName() 获取云产品名称，仅在SecretType为1，即凭据类型为云产品凭据时生效
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setProductName(string $ProductName) 设置云产品名称，仅在SecretType为1，即凭据类型为云产品凭据时生效
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getResourceName() 获取当凭据类型为SSH密钥对凭据时，此字段有效，用于表示SSH密钥对凭据的名称。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setResourceName(string $ResourceName) 设置当凭据类型为SSH密钥对凭据时，此字段有效，用于表示SSH密钥对凭据的名称。
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getProjectID() 获取当凭据类型为SSH密钥对凭据时，此字段有效，用于表示SSH密钥对所属的项目ID。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setProjectID(integer $ProjectID) 设置当凭据类型为SSH密钥对凭据时，此字段有效，用于表示SSH密钥对所属的项目ID。
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getAssociatedInstanceIDs() 获取当凭据类型为SSH密钥对凭据时，此字段有效，用于表示SSH密钥对所关联的CVM实例ID。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAssociatedInstanceIDs(array $AssociatedInstanceIDs) 设置当凭据类型为SSH密钥对凭据时，此字段有效，用于表示SSH密钥对所关联的CVM实例ID。
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getTargetUin() 获取当凭据类型为云API密钥对凭据时，此字段有效，用于表示云API密钥对所属的用户UIN。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTargetUin(integer $TargetUin) 设置当凭据类型为云API密钥对凭据时，此字段有效，用于表示云API密钥对所属的用户UIN。
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getRotationFrequency() 获取轮转的频率，以天作为单位，在轮转开启状态下生效。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRotationFrequency(integer $RotationFrequency) 设置轮转的频率，以天作为单位，在轮转开启状态下生效。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getResourceID() 获取云产品凭据对应的云产品实例 ID 号。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setResourceID(string $ResourceID) 设置云产品凭据对应的云产品实例 ID 号。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRotationBeginTime() 获取用户指定的轮转开始时间。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRotationBeginTime(string $RotationBeginTime) 设置用户指定的轮转开始时间。
注意：此字段可能返回 null，表示取不到有效值。
 */
class SecretMetadata extends AbstractModel
{
    /**
     * @var string 凭据名称
     */
    public $SecretName;

    /**
     * @var string 凭据的描述信息
     */
    public $Description;

    /**
     * @var string 用于加密凭据的KMS KeyId
     */
    public $KmsKeyId;

    /**
     * @var integer 创建者UIN
     */
    public $CreateUin;

    /**
     * @var string 凭据状态：Enabled、Disabled、PendingDelete、Creating、Failed
     */
    public $Status;

    /**
     * @var integer 凭据删除日期，对于status为PendingDelete 的有效，unix时间戳
     */
    public $DeleteTime;

    /**
     * @var integer 凭据创建时间，unix时间戳
     */
    public $CreateTime;

    /**
     * @var string 用于加密凭据的KMS CMK类型，DEFAULT 表示SecretsManager 创建的默认密钥， CUSTOMER 表示用户指定的密钥
     */
    public $KmsKeyType;

    /**
     * @var integer 1:--开启轮转；0--禁止轮转
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RotationStatus;

    /**
     * @var integer 下一次轮转开始时间，uinx 时间戳
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $NextRotationTime;

    /**
     * @var integer 0 -- 用户自定义凭据；
1 -- 云产品凭据；
2 -- SSH密钥对凭据；
3 -- 云API密钥对凭据；
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SecretType;

    /**
     * @var string 云产品名称，仅在SecretType为1，即凭据类型为云产品凭据时生效
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ProductName;

    /**
     * @var string 当凭据类型为SSH密钥对凭据时，此字段有效，用于表示SSH密钥对凭据的名称。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ResourceName;

    /**
     * @var integer 当凭据类型为SSH密钥对凭据时，此字段有效，用于表示SSH密钥对所属的项目ID。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ProjectID;

    /**
     * @var array 当凭据类型为SSH密钥对凭据时，此字段有效，用于表示SSH密钥对所关联的CVM实例ID。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AssociatedInstanceIDs;

    /**
     * @var integer 当凭据类型为云API密钥对凭据时，此字段有效，用于表示云API密钥对所属的用户UIN。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TargetUin;

    /**
     * @var integer 轮转的频率，以天作为单位，在轮转开启状态下生效。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RotationFrequency;

    /**
     * @var string 云产品凭据对应的云产品实例 ID 号。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ResourceID;

    /**
     * @var string 用户指定的轮转开始时间。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RotationBeginTime;

    /**
     * @param string $SecretName 凭据名称
     * @param string $Description 凭据的描述信息
     * @param string $KmsKeyId 用于加密凭据的KMS KeyId
     * @param integer $CreateUin 创建者UIN
     * @param string $Status 凭据状态：Enabled、Disabled、PendingDelete、Creating、Failed
     * @param integer $DeleteTime 凭据删除日期，对于status为PendingDelete 的有效，unix时间戳
     * @param integer $CreateTime 凭据创建时间，unix时间戳
     * @param string $KmsKeyType 用于加密凭据的KMS CMK类型，DEFAULT 表示SecretsManager 创建的默认密钥， CUSTOMER 表示用户指定的密钥
     * @param integer $RotationStatus 1:--开启轮转；0--禁止轮转
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $NextRotationTime 下一次轮转开始时间，uinx 时间戳
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $SecretType 0 -- 用户自定义凭据；
1 -- 云产品凭据；
2 -- SSH密钥对凭据；
3 -- 云API密钥对凭据；
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ProductName 云产品名称，仅在SecretType为1，即凭据类型为云产品凭据时生效
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ResourceName 当凭据类型为SSH密钥对凭据时，此字段有效，用于表示SSH密钥对凭据的名称。
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $ProjectID 当凭据类型为SSH密钥对凭据时，此字段有效，用于表示SSH密钥对所属的项目ID。
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $AssociatedInstanceIDs 当凭据类型为SSH密钥对凭据时，此字段有效，用于表示SSH密钥对所关联的CVM实例ID。
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $TargetUin 当凭据类型为云API密钥对凭据时，此字段有效，用于表示云API密钥对所属的用户UIN。
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $RotationFrequency 轮转的频率，以天作为单位，在轮转开启状态下生效。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ResourceID 云产品凭据对应的云产品实例 ID 号。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $RotationBeginTime 用户指定的轮转开始时间。
注意：此字段可能返回 null，表示取不到有效值。
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
    }
}
