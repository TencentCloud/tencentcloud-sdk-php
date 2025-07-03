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
 * DescribeSecret返回参数结构体
 *
 * @method string getSecretName() 获取凭据名称。
 * @method void setSecretName(string $SecretName) 设置凭据名称。
 * @method string getDescription() 获取凭据描述信息。
 * @method void setDescription(string $Description) 设置凭据描述信息。
 * @method string getKmsKeyId() 获取用于加密的KMS CMK ID。
 * @method void setKmsKeyId(string $KmsKeyId) 设置用于加密的KMS CMK ID。
 * @method integer getCreateUin() 获取创建者UIN。
 * @method void setCreateUin(integer $CreateUin) 设置创建者UIN。
 * @method string getStatus() 获取凭据状态：Enabled、Disabled、PendingDelete, Creating, Failed。
 * @method void setStatus(string $Status) 设置凭据状态：Enabled、Disabled、PendingDelete, Creating, Failed。
 * @method integer getDeleteTime() 获取删除日期，uinx 时间戳，非计划删除状态的凭据为0。
 * @method void setDeleteTime(integer $DeleteTime) 设置删除日期，uinx 时间戳，非计划删除状态的凭据为0。
 * @method integer getCreateTime() 获取创建日期。
 * @method void setCreateTime(integer $CreateTime) 设置创建日期。
 * @method integer getSecretType() 获取0 --  用户自定义凭据类型；1 -- 数据库凭据类型；2 -- SSH密钥对凭据类型；3 -- 云API密钥（AKSK）凭据类型（使用此功能需要联系云助手单独开启白名单）；4 -- Redis类型凭据。
 * @method void setSecretType(integer $SecretType) 设置0 --  用户自定义凭据类型；1 -- 数据库凭据类型；2 -- SSH密钥对凭据类型；3 -- 云API密钥（AKSK）凭据类型（使用此功能需要联系云助手单独开启白名单）；4 -- Redis类型凭据。
 * @method string getProductName() 获取云产品名称。
 * @method void setProductName(string $ProductName) 设置云产品名称。
 * @method string getResourceID() 获取云产品实例ID。
 * @method void setResourceID(string $ResourceID) 设置云产品实例ID。
 * @method boolean getRotationStatus() 获取是否开启轮转：True -- 开启轮转；False -- 关闭轮转。
 * @method void setRotationStatus(boolean $RotationStatus) 设置是否开启轮转：True -- 开启轮转；False -- 关闭轮转。
 * @method integer getRotationFrequency() 获取轮转周期，默认以天为单位。
 * @method void setRotationFrequency(integer $RotationFrequency) 设置轮转周期，默认以天为单位。
 * @method string getResourceName() 获取当凭据类型为SSH密钥对凭据时，此字段有效，用于表示SSH密钥对凭据的名称。
 * @method void setResourceName(string $ResourceName) 设置当凭据类型为SSH密钥对凭据时，此字段有效，用于表示SSH密钥对凭据的名称。
 * @method integer getProjectID() 获取当凭据类型为SSH密钥对凭据时，此字段有效，用于表示SSH密钥对所属的项目ID。
 * @method void setProjectID(integer $ProjectID) 设置当凭据类型为SSH密钥对凭据时，此字段有效，用于表示SSH密钥对所属的项目ID。
 * @method array getAssociatedInstanceIDs() 获取当凭据类型为SSH密钥对凭据时，此字段有效，用于表示SSH密钥对所关联的CVM实例ID。
 * @method void setAssociatedInstanceIDs(array $AssociatedInstanceIDs) 设置当凭据类型为SSH密钥对凭据时，此字段有效，用于表示SSH密钥对所关联的CVM实例ID。
 * @method integer getTargetUin() 获取当凭据类型为云API密钥对凭据时，此字段有效，用于表示此云API密钥对所属的用户UIN。
 * @method void setTargetUin(integer $TargetUin) 设置当凭据类型为云API密钥对凭据时，此字段有效，用于表示此云API密钥对所属的用户UIN。
 * @method string getAdditionalConfig() 获取凭据额外配置
 * @method void setAdditionalConfig(string $AdditionalConfig) 设置凭据额外配置
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeSecretResponse extends AbstractModel
{
    /**
     * @var string 凭据名称。
     */
    public $SecretName;

    /**
     * @var string 凭据描述信息。
     */
    public $Description;

    /**
     * @var string 用于加密的KMS CMK ID。
     */
    public $KmsKeyId;

    /**
     * @var integer 创建者UIN。
     */
    public $CreateUin;

    /**
     * @var string 凭据状态：Enabled、Disabled、PendingDelete, Creating, Failed。
     */
    public $Status;

    /**
     * @var integer 删除日期，uinx 时间戳，非计划删除状态的凭据为0。
     */
    public $DeleteTime;

    /**
     * @var integer 创建日期。
     */
    public $CreateTime;

    /**
     * @var integer 0 --  用户自定义凭据类型；1 -- 数据库凭据类型；2 -- SSH密钥对凭据类型；3 -- 云API密钥（AKSK）凭据类型（使用此功能需要联系云助手单独开启白名单）；4 -- Redis类型凭据。
     */
    public $SecretType;

    /**
     * @var string 云产品名称。
     */
    public $ProductName;

    /**
     * @var string 云产品实例ID。
     */
    public $ResourceID;

    /**
     * @var boolean 是否开启轮转：True -- 开启轮转；False -- 关闭轮转。
     */
    public $RotationStatus;

    /**
     * @var integer 轮转周期，默认以天为单位。
     */
    public $RotationFrequency;

    /**
     * @var string 当凭据类型为SSH密钥对凭据时，此字段有效，用于表示SSH密钥对凭据的名称。
     */
    public $ResourceName;

    /**
     * @var integer 当凭据类型为SSH密钥对凭据时，此字段有效，用于表示SSH密钥对所属的项目ID。
     */
    public $ProjectID;

    /**
     * @var array 当凭据类型为SSH密钥对凭据时，此字段有效，用于表示SSH密钥对所关联的CVM实例ID。
     */
    public $AssociatedInstanceIDs;

    /**
     * @var integer 当凭据类型为云API密钥对凭据时，此字段有效，用于表示此云API密钥对所属的用户UIN。
     */
    public $TargetUin;

    /**
     * @var string 凭据额外配置
     */
    public $AdditionalConfig;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param string $SecretName 凭据名称。
     * @param string $Description 凭据描述信息。
     * @param string $KmsKeyId 用于加密的KMS CMK ID。
     * @param integer $CreateUin 创建者UIN。
     * @param string $Status 凭据状态：Enabled、Disabled、PendingDelete, Creating, Failed。
     * @param integer $DeleteTime 删除日期，uinx 时间戳，非计划删除状态的凭据为0。
     * @param integer $CreateTime 创建日期。
     * @param integer $SecretType 0 --  用户自定义凭据类型；1 -- 数据库凭据类型；2 -- SSH密钥对凭据类型；3 -- 云API密钥（AKSK）凭据类型（使用此功能需要联系云助手单独开启白名单）；4 -- Redis类型凭据。
     * @param string $ProductName 云产品名称。
     * @param string $ResourceID 云产品实例ID。
     * @param boolean $RotationStatus 是否开启轮转：True -- 开启轮转；False -- 关闭轮转。
     * @param integer $RotationFrequency 轮转周期，默认以天为单位。
     * @param string $ResourceName 当凭据类型为SSH密钥对凭据时，此字段有效，用于表示SSH密钥对凭据的名称。
     * @param integer $ProjectID 当凭据类型为SSH密钥对凭据时，此字段有效，用于表示SSH密钥对所属的项目ID。
     * @param array $AssociatedInstanceIDs 当凭据类型为SSH密钥对凭据时，此字段有效，用于表示SSH密钥对所关联的CVM实例ID。
     * @param integer $TargetUin 当凭据类型为云API密钥对凭据时，此字段有效，用于表示此云API密钥对所属的用户UIN。
     * @param string $AdditionalConfig 凭据额外配置
     * @param string $RequestId 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
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

        if (array_key_exists("SecretType",$param) and $param["SecretType"] !== null) {
            $this->SecretType = $param["SecretType"];
        }

        if (array_key_exists("ProductName",$param) and $param["ProductName"] !== null) {
            $this->ProductName = $param["ProductName"];
        }

        if (array_key_exists("ResourceID",$param) and $param["ResourceID"] !== null) {
            $this->ResourceID = $param["ResourceID"];
        }

        if (array_key_exists("RotationStatus",$param) and $param["RotationStatus"] !== null) {
            $this->RotationStatus = $param["RotationStatus"];
        }

        if (array_key_exists("RotationFrequency",$param) and $param["RotationFrequency"] !== null) {
            $this->RotationFrequency = $param["RotationFrequency"];
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

        if (array_key_exists("AdditionalConfig",$param) and $param["AdditionalConfig"] !== null) {
            $this->AdditionalConfig = $param["AdditionalConfig"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
