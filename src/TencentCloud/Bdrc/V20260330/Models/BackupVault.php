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
namespace TencentCloud\Bdrc\V20260330\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 备份库信息
 *
 * @method string getVaultId() 获取备份库ID
 * @method void setVaultId(string $VaultId) 设置备份库ID
 * @method string getVaultName() 获取备份库名称
 * @method void setVaultName(string $VaultName) 设置备份库名称
 * @method string getDescription() 获取备份库描述
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDescription(string $Description) 设置备份库描述
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getStatus() 获取备份库状态：READ_WRITE / READ_ONLY / UNAVAILABLE / DELETING
 * @method void setStatus(string $Status) 设置备份库状态：READ_WRITE / READ_ONLY / UNAVAILABLE / DELETING
 * @method string getEncryptType() 获取加密方式：NONE / SSE-COS / SSE-KMS
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setEncryptType(string $EncryptType) 设置加密方式：NONE / SSE-COS / SSE-KMS
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getKmsKeyId() 获取KMS密钥ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setKmsKeyId(string $KmsKeyId) 设置KMS密钥ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getVaultType() 获取备份库类型：COMMON
 * @method void setVaultType(string $VaultType) 设置备份库类型：COMMON
 * @method array getBackupPolicySet() 获取关联的备份策略按类型统计
 * @method void setBackupPolicySet(array $BackupPolicySet) 设置关联的备份策略按类型统计
 * @method array getBackupSet() 获取备份点按类型统计（不含已删除）
 * @method void setBackupSet(array $BackupSet) 设置备份点按类型统计（不含已删除）
 * @method string getRegion() 获取地域信息
 * @method void setRegion(string $Region) 设置地域信息
 * @method string getCreateTime() 获取创建时间
 * @method void setCreateTime(string $CreateTime) 设置创建时间
 * @method integer getSourceDataSize() 获取源端数据量
 * @method void setSourceDataSize(integer $SourceDataSize) 设置源端数据量
 * @method integer getVaultDataSize() 获取存储库数据量
 * @method void setVaultDataSize(integer $VaultDataSize) 设置存储库数据量
 */
class BackupVault extends AbstractModel
{
    /**
     * @var string 备份库ID
     */
    public $VaultId;

    /**
     * @var string 备份库名称
     */
    public $VaultName;

    /**
     * @var string 备份库描述
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Description;

    /**
     * @var string 备份库状态：READ_WRITE / READ_ONLY / UNAVAILABLE / DELETING
     */
    public $Status;

    /**
     * @var string 加密方式：NONE / SSE-COS / SSE-KMS
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $EncryptType;

    /**
     * @var string KMS密钥ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $KmsKeyId;

    /**
     * @var string 备份库类型：COMMON
     */
    public $VaultType;

    /**
     * @var array 关联的备份策略按类型统计
     */
    public $BackupPolicySet;

    /**
     * @var array 备份点按类型统计（不含已删除）
     */
    public $BackupSet;

    /**
     * @var string 地域信息
     */
    public $Region;

    /**
     * @var string 创建时间
     */
    public $CreateTime;

    /**
     * @var integer 源端数据量
     */
    public $SourceDataSize;

    /**
     * @var integer 存储库数据量
     */
    public $VaultDataSize;

    /**
     * @param string $VaultId 备份库ID
     * @param string $VaultName 备份库名称
     * @param string $Description 备份库描述
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Status 备份库状态：READ_WRITE / READ_ONLY / UNAVAILABLE / DELETING
     * @param string $EncryptType 加密方式：NONE / SSE-COS / SSE-KMS
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $KmsKeyId KMS密钥ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $VaultType 备份库类型：COMMON
     * @param array $BackupPolicySet 关联的备份策略按类型统计
     * @param array $BackupSet 备份点按类型统计（不含已删除）
     * @param string $Region 地域信息
     * @param string $CreateTime 创建时间
     * @param integer $SourceDataSize 源端数据量
     * @param integer $VaultDataSize 存储库数据量
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
        if (array_key_exists("VaultId",$param) and $param["VaultId"] !== null) {
            $this->VaultId = $param["VaultId"];
        }

        if (array_key_exists("VaultName",$param) and $param["VaultName"] !== null) {
            $this->VaultName = $param["VaultName"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("EncryptType",$param) and $param["EncryptType"] !== null) {
            $this->EncryptType = $param["EncryptType"];
        }

        if (array_key_exists("KmsKeyId",$param) and $param["KmsKeyId"] !== null) {
            $this->KmsKeyId = $param["KmsKeyId"];
        }

        if (array_key_exists("VaultType",$param) and $param["VaultType"] !== null) {
            $this->VaultType = $param["VaultType"];
        }

        if (array_key_exists("BackupPolicySet",$param) and $param["BackupPolicySet"] !== null) {
            $this->BackupPolicySet = [];
            foreach ($param["BackupPolicySet"] as $key => $value){
                $obj = new TypeCount();
                $obj->deserialize($value);
                array_push($this->BackupPolicySet, $obj);
            }
        }

        if (array_key_exists("BackupSet",$param) and $param["BackupSet"] !== null) {
            $this->BackupSet = [];
            foreach ($param["BackupSet"] as $key => $value){
                $obj = new TypeCount();
                $obj->deserialize($value);
                array_push($this->BackupSet, $obj);
            }
        }

        if (array_key_exists("Region",$param) and $param["Region"] !== null) {
            $this->Region = $param["Region"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("SourceDataSize",$param) and $param["SourceDataSize"] !== null) {
            $this->SourceDataSize = $param["SourceDataSize"];
        }

        if (array_key_exists("VaultDataSize",$param) and $param["VaultDataSize"] !== null) {
            $this->VaultDataSize = $param["VaultDataSize"];
        }
    }
}
