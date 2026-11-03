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
namespace TencentCloud\Cdb\V20170320\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 创建SSM账号相关信息
 *
 * @method boolean getIsOpenSSM() 获取<p>是否开启SSM托管</p><p>枚举值：</p><ul><li>true： 开启托管</li><li>false： 不开启托管</li></ul>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIsOpenSSM(boolean $IsOpenSSM) 设置<p>是否开启SSM托管</p><p>枚举值：</p><ul><li>true： 开启托管</li><li>false： 不开启托管</li></ul>
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getIsRotationAccount() 获取<p>是否创建轮转账号</p><p>枚举值：</p><ul><li>true： 创建轮转账号</li><li>false： 创建非轮转账号</li></ul>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIsRotationAccount(boolean $IsRotationAccount) 设置<p>是否创建轮转账号</p><p>枚举值：</p><ul><li>true： 创建轮转账号</li><li>false： 创建非轮转账号</li></ul>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getSecretName() 获取<p>凭据名称</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSecretName(string $SecretName) 设置<p>凭据名称</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getKmsKeyId() 获取<p>KMS CMK ID</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setKmsKeyId(string $KmsKeyId) 设置<p>KMS CMK ID</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getEncryptType() 获取<p>密钥类型</p><p>枚举值：</p><ul><li>0： KMS密码</li><li>1： 软件密钥</li></ul>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setEncryptType(integer $EncryptType) 设置<p>密钥类型</p><p>枚举值：</p><ul><li>0： KMS密码</li><li>1： 软件密钥</li></ul>
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getEnableRotation() 获取<p>是否开启轮转</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setEnableRotation(boolean $EnableRotation) 设置<p>是否开启轮转</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getRotationFrequency() 获取<p>轮转周期</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRotationFrequency(integer $RotationFrequency) 设置<p>轮转周期</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method PrivilegeGroup getPrivilegesList() 获取<p>权限列表</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPrivilegesList(PrivilegeGroup $PrivilegesList) 设置<p>权限列表</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getKmsHsmClusterId() 获取<p>独享版 KMS 集群 ID</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setKmsHsmClusterId(string $KmsHsmClusterId) 设置<p>独享版 KMS 集群 ID</p>
注意：此字段可能返回 null，表示取不到有效值。
 */
class SSMCreateAccountInfos extends AbstractModel
{
    /**
     * @var boolean <p>是否开启SSM托管</p><p>枚举值：</p><ul><li>true： 开启托管</li><li>false： 不开启托管</li></ul>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $IsOpenSSM;

    /**
     * @var boolean <p>是否创建轮转账号</p><p>枚举值：</p><ul><li>true： 创建轮转账号</li><li>false： 创建非轮转账号</li></ul>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $IsRotationAccount;

    /**
     * @var string <p>凭据名称</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SecretName;

    /**
     * @var string <p>KMS CMK ID</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $KmsKeyId;

    /**
     * @var integer <p>密钥类型</p><p>枚举值：</p><ul><li>0： KMS密码</li><li>1： 软件密钥</li></ul>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $EncryptType;

    /**
     * @var boolean <p>是否开启轮转</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $EnableRotation;

    /**
     * @var integer <p>轮转周期</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RotationFrequency;

    /**
     * @var PrivilegeGroup <p>权限列表</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PrivilegesList;

    /**
     * @var string <p>独享版 KMS 集群 ID</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $KmsHsmClusterId;

    /**
     * @param boolean $IsOpenSSM <p>是否开启SSM托管</p><p>枚举值：</p><ul><li>true： 开启托管</li><li>false： 不开启托管</li></ul>
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $IsRotationAccount <p>是否创建轮转账号</p><p>枚举值：</p><ul><li>true： 创建轮转账号</li><li>false： 创建非轮转账号</li></ul>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $SecretName <p>凭据名称</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $KmsKeyId <p>KMS CMK ID</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $EncryptType <p>密钥类型</p><p>枚举值：</p><ul><li>0： KMS密码</li><li>1： 软件密钥</li></ul>
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $EnableRotation <p>是否开启轮转</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $RotationFrequency <p>轮转周期</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param PrivilegeGroup $PrivilegesList <p>权限列表</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $KmsHsmClusterId <p>独享版 KMS 集群 ID</p>
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
        if (array_key_exists("IsOpenSSM",$param) and $param["IsOpenSSM"] !== null) {
            $this->IsOpenSSM = $param["IsOpenSSM"];
        }

        if (array_key_exists("IsRotationAccount",$param) and $param["IsRotationAccount"] !== null) {
            $this->IsRotationAccount = $param["IsRotationAccount"];
        }

        if (array_key_exists("SecretName",$param) and $param["SecretName"] !== null) {
            $this->SecretName = $param["SecretName"];
        }

        if (array_key_exists("KmsKeyId",$param) and $param["KmsKeyId"] !== null) {
            $this->KmsKeyId = $param["KmsKeyId"];
        }

        if (array_key_exists("EncryptType",$param) and $param["EncryptType"] !== null) {
            $this->EncryptType = $param["EncryptType"];
        }

        if (array_key_exists("EnableRotation",$param) and $param["EnableRotation"] !== null) {
            $this->EnableRotation = $param["EnableRotation"];
        }

        if (array_key_exists("RotationFrequency",$param) and $param["RotationFrequency"] !== null) {
            $this->RotationFrequency = $param["RotationFrequency"];
        }

        if (array_key_exists("PrivilegesList",$param) and $param["PrivilegesList"] !== null) {
            $this->PrivilegesList = new PrivilegeGroup();
            $this->PrivilegesList->deserialize($param["PrivilegesList"]);
        }

        if (array_key_exists("KmsHsmClusterId",$param) and $param["KmsHsmClusterId"] !== null) {
            $this->KmsHsmClusterId = $param["KmsHsmClusterId"];
        }
    }
}
