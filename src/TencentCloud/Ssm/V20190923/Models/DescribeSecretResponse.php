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
 * DescribeSecret返回参数结构体
 *
 * @method string getSecretName() 获取<p>凭据名称。</p>
 * @method void setSecretName(string $SecretName) 设置<p>凭据名称。</p>
 * @method string getDescription() 获取<p>凭据描述信息。</p>
 * @method void setDescription(string $Description) 设置<p>凭据描述信息。</p>
 * @method string getKmsKeyId() 获取<p>用于加密的KMS CMK ID。</p>
 * @method void setKmsKeyId(string $KmsKeyId) 设置<p>用于加密的KMS CMK ID。</p>
 * @method integer getCreateUin() 获取<p>创建者UIN。</p>
 * @method void setCreateUin(integer $CreateUin) 设置<p>创建者UIN。</p>
 * @method string getStatus() 获取<p>凭据状态：Enabled、Disabled、PendingDelete, Creating, Failed。</p>
 * @method void setStatus(string $Status) 设置<p>凭据状态：Enabled、Disabled、PendingDelete, Creating, Failed。</p>
 * @method integer getDeleteTime() 获取<p>删除日期，uinx 时间戳，非计划删除状态的凭据为0。</p>
 * @method void setDeleteTime(integer $DeleteTime) 设置<p>删除日期，uinx 时间戳，非计划删除状态的凭据为0。</p>
 * @method integer getCreateTime() 获取<p>创建日期。</p>
 * @method void setCreateTime(integer $CreateTime) 设置<p>创建日期。</p>
 * @method integer getSecretType() 获取<p>0 --  用户自定义凭据类型；1 -- 数据库凭据类型；2 -- SSH密钥对凭据类型；3 -- 云API密钥（AKSK）凭据类型（使用此功能需要联系云助手单独开启白名单）；4 -- Redis类型凭据。</p>
 * @method void setSecretType(integer $SecretType) 设置<p>0 --  用户自定义凭据类型；1 -- 数据库凭据类型；2 -- SSH密钥对凭据类型；3 -- 云API密钥（AKSK）凭据类型（使用此功能需要联系云助手单独开启白名单）；4 -- Redis类型凭据。</p>
 * @method string getProductName() 获取<p>云产品名称。</p>
 * @method void setProductName(string $ProductName) 设置<p>云产品名称。</p>
 * @method string getResourceID() 获取<p>云产品实例ID。</p>
 * @method void setResourceID(string $ResourceID) 设置<p>云产品实例ID。</p>
 * @method boolean getRotationStatus() 获取<p>是否开启轮转：True -- 开启轮转；False -- 关闭轮转。</p>
 * @method void setRotationStatus(boolean $RotationStatus) 设置<p>是否开启轮转：True -- 开启轮转；False -- 关闭轮转。</p>
 * @method integer getRotationFrequency() 获取<p>轮转周期，默认以天为单位。</p>
 * @method void setRotationFrequency(integer $RotationFrequency) 设置<p>轮转周期，默认以天为单位。</p>
 * @method string getResourceName() 获取<p>当凭据类型为SSH密钥对凭据时，此字段有效，用于表示SSH密钥对凭据的名称。</p>
 * @method void setResourceName(string $ResourceName) 设置<p>当凭据类型为SSH密钥对凭据时，此字段有效，用于表示SSH密钥对凭据的名称。</p>
 * @method integer getProjectID() 获取<p>当凭据类型为SSH密钥对凭据时，此字段有效，用于表示SSH密钥对所属的项目ID。</p>
 * @method void setProjectID(integer $ProjectID) 设置<p>当凭据类型为SSH密钥对凭据时，此字段有效，用于表示SSH密钥对所属的项目ID。</p>
 * @method array getAssociatedInstanceIDs() 获取<p>当凭据类型为SSH密钥对凭据时，此字段有效，用于表示SSH密钥对所关联的CVM实例ID。</p>
 * @method void setAssociatedInstanceIDs(array $AssociatedInstanceIDs) 设置<p>当凭据类型为SSH密钥对凭据时，此字段有效，用于表示SSH密钥对所关联的CVM实例ID。</p>
 * @method integer getTargetUin() 获取<p>当凭据类型为云API密钥对凭据时，此字段有效，用于表示此云API密钥对所属的用户UIN。</p>
 * @method void setTargetUin(integer $TargetUin) 设置<p>当凭据类型为云API密钥对凭据时，此字段有效，用于表示此云API密钥对所属的用户UIN。</p>
 * @method string getAdditionalConfig() 获取<p>凭据额外配置</p>
 * @method void setAdditionalConfig(string $AdditionalConfig) 设置<p>凭据额外配置</p>
 * @method integer getEncryptType() 获取<p>凭据加密类型</p><p>枚举值：</p><ul><li>0： KMS 密钥加密</li><li>1： 软密钥加密</li></ul><p>默认值：0</p>
 * @method void setEncryptType(integer $EncryptType) 设置<p>凭据加密类型</p><p>枚举值：</p><ul><li>0： KMS 密钥加密</li><li>1： 软密钥加密</li></ul><p>默认值：0</p>
 * @method boolean getEncryptSwitching() 获取<p>凭据更新状态</p>
 * @method void setEncryptSwitching(boolean $EncryptSwitching) 设置<p>凭据更新状态</p>
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeSecretResponse extends AbstractModel
{
    /**
     * @var string <p>凭据名称。</p>
     */
    public $SecretName;

    /**
     * @var string <p>凭据描述信息。</p>
     */
    public $Description;

    /**
     * @var string <p>用于加密的KMS CMK ID。</p>
     */
    public $KmsKeyId;

    /**
     * @var integer <p>创建者UIN。</p>
     */
    public $CreateUin;

    /**
     * @var string <p>凭据状态：Enabled、Disabled、PendingDelete, Creating, Failed。</p>
     */
    public $Status;

    /**
     * @var integer <p>删除日期，uinx 时间戳，非计划删除状态的凭据为0。</p>
     */
    public $DeleteTime;

    /**
     * @var integer <p>创建日期。</p>
     */
    public $CreateTime;

    /**
     * @var integer <p>0 --  用户自定义凭据类型；1 -- 数据库凭据类型；2 -- SSH密钥对凭据类型；3 -- 云API密钥（AKSK）凭据类型（使用此功能需要联系云助手单独开启白名单）；4 -- Redis类型凭据。</p>
     */
    public $SecretType;

    /**
     * @var string <p>云产品名称。</p>
     */
    public $ProductName;

    /**
     * @var string <p>云产品实例ID。</p>
     */
    public $ResourceID;

    /**
     * @var boolean <p>是否开启轮转：True -- 开启轮转；False -- 关闭轮转。</p>
     */
    public $RotationStatus;

    /**
     * @var integer <p>轮转周期，默认以天为单位。</p>
     */
    public $RotationFrequency;

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
     * @var integer <p>当凭据类型为云API密钥对凭据时，此字段有效，用于表示此云API密钥对所属的用户UIN。</p>
     */
    public $TargetUin;

    /**
     * @var string <p>凭据额外配置</p>
     */
    public $AdditionalConfig;

    /**
     * @var integer <p>凭据加密类型</p><p>枚举值：</p><ul><li>0： KMS 密钥加密</li><li>1： 软密钥加密</li></ul><p>默认值：0</p>
     */
    public $EncryptType;

    /**
     * @var boolean <p>凭据更新状态</p>
     */
    public $EncryptSwitching;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param string $SecretName <p>凭据名称。</p>
     * @param string $Description <p>凭据描述信息。</p>
     * @param string $KmsKeyId <p>用于加密的KMS CMK ID。</p>
     * @param integer $CreateUin <p>创建者UIN。</p>
     * @param string $Status <p>凭据状态：Enabled、Disabled、PendingDelete, Creating, Failed。</p>
     * @param integer $DeleteTime <p>删除日期，uinx 时间戳，非计划删除状态的凭据为0。</p>
     * @param integer $CreateTime <p>创建日期。</p>
     * @param integer $SecretType <p>0 --  用户自定义凭据类型；1 -- 数据库凭据类型；2 -- SSH密钥对凭据类型；3 -- 云API密钥（AKSK）凭据类型（使用此功能需要联系云助手单独开启白名单）；4 -- Redis类型凭据。</p>
     * @param string $ProductName <p>云产品名称。</p>
     * @param string $ResourceID <p>云产品实例ID。</p>
     * @param boolean $RotationStatus <p>是否开启轮转：True -- 开启轮转；False -- 关闭轮转。</p>
     * @param integer $RotationFrequency <p>轮转周期，默认以天为单位。</p>
     * @param string $ResourceName <p>当凭据类型为SSH密钥对凭据时，此字段有效，用于表示SSH密钥对凭据的名称。</p>
     * @param integer $ProjectID <p>当凭据类型为SSH密钥对凭据时，此字段有效，用于表示SSH密钥对所属的项目ID。</p>
     * @param array $AssociatedInstanceIDs <p>当凭据类型为SSH密钥对凭据时，此字段有效，用于表示SSH密钥对所关联的CVM实例ID。</p>
     * @param integer $TargetUin <p>当凭据类型为云API密钥对凭据时，此字段有效，用于表示此云API密钥对所属的用户UIN。</p>
     * @param string $AdditionalConfig <p>凭据额外配置</p>
     * @param integer $EncryptType <p>凭据加密类型</p><p>枚举值：</p><ul><li>0： KMS 密钥加密</li><li>1： 软密钥加密</li></ul><p>默认值：0</p>
     * @param boolean $EncryptSwitching <p>凭据更新状态</p>
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

        if (array_key_exists("EncryptType",$param) and $param["EncryptType"] !== null) {
            $this->EncryptType = $param["EncryptType"];
        }

        if (array_key_exists("EncryptSwitching",$param) and $param["EncryptSwitching"] !== null) {
            $this->EncryptSwitching = $param["EncryptSwitching"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
