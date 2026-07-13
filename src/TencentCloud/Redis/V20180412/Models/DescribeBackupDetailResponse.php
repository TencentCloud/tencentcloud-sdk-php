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
namespace TencentCloud\Redis\V20180412\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeBackupDetail返回参数结构体
 *
 * @method string getBackupId() 获取<p>备份 ID。</p>
 * @method void setBackupId(string $BackupId) 设置<p>备份 ID。</p>
 * @method string getStartTime() 获取<p>备份开始时间。</p>
 * @method void setStartTime(string $StartTime) 设置<p>备份开始时间。</p>
 * @method string getEndTime() 获取<p>备份结束时间。</p>
 * @method void setEndTime(string $EndTime) 设置<p>备份结束时间。</p>
 * @method string getBackupType() 获取<p>备份方式。 </p><ul><li>1：手动备份。</li><li>0：自动备份。</li></ul>
 * @method void setBackupType(string $BackupType) 设置<p>备份方式。 </p><ul><li>1：手动备份。</li><li>0：自动备份。</li></ul>
 * @method integer getStatus() 获取<p>备份状态。 </p><ul><li>1：备份被其它流程锁定。</li><li>2：备份正常，没有被任何流程锁定。</li><li>-1：备份已过期。</li><li>3：备份正在被导出。</li><li>4：备份导出成功。</li></ul>
 * @method void setStatus(integer $Status) 设置<p>备份状态。 </p><ul><li>1：备份被其它流程锁定。</li><li>2：备份正常，没有被任何流程锁定。</li><li>-1：备份已过期。</li><li>3：备份正在被导出。</li><li>4：备份导出成功。</li></ul>
 * @method string getRemark() 获取<p>备份的备注信息。</p>
 * @method void setRemark(string $Remark) 设置<p>备份的备注信息。</p>
 * @method integer getLocked() 获取<p>备份是否被锁定。</p><ul><li>0：未被锁定。</li><li>1：已被锁定。</li></ul>
 * @method void setLocked(integer $Locked) 设置<p>备份是否被锁定。</p><ul><li>0：未被锁定。</li><li>1：已被锁定。</li></ul>
 * @method integer getBackupSize() 获取<p>备份文件大小。单位：Byte。</p>
 * @method void setBackupSize(integer $BackupSize) 设置<p>备份文件大小。单位：Byte。</p>
 * @method integer getInstanceType() 获取<p>实例类型。</p>
 * @method void setInstanceType(integer $InstanceType) 设置<p>实例类型。</p>
 * @method integer getMemSize() 获取<p>单分片内存规格大小，单位：MB。</p>
 * @method void setMemSize(integer $MemSize) 设置<p>单分片内存规格大小，单位：MB。</p>
 * @method integer getShardNum() 获取<p>分片数量。</p>
 * @method void setShardNum(integer $ShardNum) 设置<p>分片数量。</p>
 * @method integer getReplicasNum() 获取<p>副本数量。</p>
 * @method void setReplicasNum(integer $ReplicasNum) 设置<p>副本数量。</p>
 * @method boolean getEncrypted() 获取<p>是否已加密。</p><p>枚举值：</p><ul><li>true： 已加密</li><li>false： 未加密</li></ul>
 * @method void setEncrypted(boolean $Encrypted) 设置<p>是否已加密。</p><p>枚举值：</p><ul><li>true： 已加密</li><li>false： 未加密</li></ul>
 * @method string getDecryptKey() 获取<p>解密密钥。</p>
 * @method void setDecryptKey(string $DecryptKey) 设置<p>解密密钥。</p>
 * @method string getKmsKeyId() 获取<p>KMS的密钥ID。</p>
 * @method void setKmsKeyId(string $KmsKeyId) 设置<p>KMS的密钥ID。</p>
 * @method string getKeyAlgorithm() 获取<p>加密该备份文件的加密算法。</p><p>枚举值：</p><ul><li>AES-256-CBC： 当前仅支持AES-256-CBC</li></ul>
 * @method void setKeyAlgorithm(string $KeyAlgorithm) 设置<p>加密该备份文件的加密算法。</p><p>枚举值：</p><ul><li>AES-256-CBC： 当前仅支持AES-256-CBC</li></ul>
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeBackupDetailResponse extends AbstractModel
{
    /**
     * @var string <p>备份 ID。</p>
     */
    public $BackupId;

    /**
     * @var string <p>备份开始时间。</p>
     */
    public $StartTime;

    /**
     * @var string <p>备份结束时间。</p>
     */
    public $EndTime;

    /**
     * @var string <p>备份方式。 </p><ul><li>1：手动备份。</li><li>0：自动备份。</li></ul>
     */
    public $BackupType;

    /**
     * @var integer <p>备份状态。 </p><ul><li>1：备份被其它流程锁定。</li><li>2：备份正常，没有被任何流程锁定。</li><li>-1：备份已过期。</li><li>3：备份正在被导出。</li><li>4：备份导出成功。</li></ul>
     */
    public $Status;

    /**
     * @var string <p>备份的备注信息。</p>
     */
    public $Remark;

    /**
     * @var integer <p>备份是否被锁定。</p><ul><li>0：未被锁定。</li><li>1：已被锁定。</li></ul>
     */
    public $Locked;

    /**
     * @var integer <p>备份文件大小。单位：Byte。</p>
     */
    public $BackupSize;

    /**
     * @var integer <p>实例类型。</p>
     */
    public $InstanceType;

    /**
     * @var integer <p>单分片内存规格大小，单位：MB。</p>
     */
    public $MemSize;

    /**
     * @var integer <p>分片数量。</p>
     */
    public $ShardNum;

    /**
     * @var integer <p>副本数量。</p>
     */
    public $ReplicasNum;

    /**
     * @var boolean <p>是否已加密。</p><p>枚举值：</p><ul><li>true： 已加密</li><li>false： 未加密</li></ul>
     */
    public $Encrypted;

    /**
     * @var string <p>解密密钥。</p>
     */
    public $DecryptKey;

    /**
     * @var string <p>KMS的密钥ID。</p>
     */
    public $KmsKeyId;

    /**
     * @var string <p>加密该备份文件的加密算法。</p><p>枚举值：</p><ul><li>AES-256-CBC： 当前仅支持AES-256-CBC</li></ul>
     */
    public $KeyAlgorithm;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param string $BackupId <p>备份 ID。</p>
     * @param string $StartTime <p>备份开始时间。</p>
     * @param string $EndTime <p>备份结束时间。</p>
     * @param string $BackupType <p>备份方式。 </p><ul><li>1：手动备份。</li><li>0：自动备份。</li></ul>
     * @param integer $Status <p>备份状态。 </p><ul><li>1：备份被其它流程锁定。</li><li>2：备份正常，没有被任何流程锁定。</li><li>-1：备份已过期。</li><li>3：备份正在被导出。</li><li>4：备份导出成功。</li></ul>
     * @param string $Remark <p>备份的备注信息。</p>
     * @param integer $Locked <p>备份是否被锁定。</p><ul><li>0：未被锁定。</li><li>1：已被锁定。</li></ul>
     * @param integer $BackupSize <p>备份文件大小。单位：Byte。</p>
     * @param integer $InstanceType <p>实例类型。</p>
     * @param integer $MemSize <p>单分片内存规格大小，单位：MB。</p>
     * @param integer $ShardNum <p>分片数量。</p>
     * @param integer $ReplicasNum <p>副本数量。</p>
     * @param boolean $Encrypted <p>是否已加密。</p><p>枚举值：</p><ul><li>true： 已加密</li><li>false： 未加密</li></ul>
     * @param string $DecryptKey <p>解密密钥。</p>
     * @param string $KmsKeyId <p>KMS的密钥ID。</p>
     * @param string $KeyAlgorithm <p>加密该备份文件的加密算法。</p><p>枚举值：</p><ul><li>AES-256-CBC： 当前仅支持AES-256-CBC</li></ul>
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
        if (array_key_exists("BackupId",$param) and $param["BackupId"] !== null) {
            $this->BackupId = $param["BackupId"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("BackupType",$param) and $param["BackupType"] !== null) {
            $this->BackupType = $param["BackupType"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("Remark",$param) and $param["Remark"] !== null) {
            $this->Remark = $param["Remark"];
        }

        if (array_key_exists("Locked",$param) and $param["Locked"] !== null) {
            $this->Locked = $param["Locked"];
        }

        if (array_key_exists("BackupSize",$param) and $param["BackupSize"] !== null) {
            $this->BackupSize = $param["BackupSize"];
        }

        if (array_key_exists("InstanceType",$param) and $param["InstanceType"] !== null) {
            $this->InstanceType = $param["InstanceType"];
        }

        if (array_key_exists("MemSize",$param) and $param["MemSize"] !== null) {
            $this->MemSize = $param["MemSize"];
        }

        if (array_key_exists("ShardNum",$param) and $param["ShardNum"] !== null) {
            $this->ShardNum = $param["ShardNum"];
        }

        if (array_key_exists("ReplicasNum",$param) and $param["ReplicasNum"] !== null) {
            $this->ReplicasNum = $param["ReplicasNum"];
        }

        if (array_key_exists("Encrypted",$param) and $param["Encrypted"] !== null) {
            $this->Encrypted = $param["Encrypted"];
        }

        if (array_key_exists("DecryptKey",$param) and $param["DecryptKey"] !== null) {
            $this->DecryptKey = $param["DecryptKey"];
        }

        if (array_key_exists("KmsKeyId",$param) and $param["KmsKeyId"] !== null) {
            $this->KmsKeyId = $param["KmsKeyId"];
        }

        if (array_key_exists("KeyAlgorithm",$param) and $param["KeyAlgorithm"] !== null) {
            $this->KeyAlgorithm = $param["KeyAlgorithm"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
