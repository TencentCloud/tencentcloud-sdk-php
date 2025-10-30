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
 * @method string getBackupId() 获取备份 ID。
 * @method void setBackupId(string $BackupId) 设置备份 ID。
 * @method string getStartTime() 获取备份开始时间。
 * @method void setStartTime(string $StartTime) 设置备份开始时间。
 * @method string getEndTime() 获取备份结束时间。
 * @method void setEndTime(string $EndTime) 设置备份结束时间。
 * @method string getBackupType() 获取备份方式。 

- 1：手动备份。
-  0：自动备份。
 * @method void setBackupType(string $BackupType) 设置备份方式。 

- 1：手动备份。
-  0：自动备份。
 * @method integer getStatus() 获取备份状态。 

- 1：备份被其它流程锁定。
- 2：备份正常，没有被任何流程锁定。
- -1：备份已过期。
- 3：备份正在被导出。
- 4：备份导出成功。
 * @method void setStatus(integer $Status) 设置备份状态。 

- 1：备份被其它流程锁定。
- 2：备份正常，没有被任何流程锁定。
- -1：备份已过期。
- 3：备份正在被导出。
- 4：备份导出成功。
 * @method string getRemark() 获取备份的备注信息。
 * @method void setRemark(string $Remark) 设置备份的备注信息。
 * @method integer getLocked() 获取备份是否被锁定。

- 0：未被锁定。
- 1：已被锁定。
 * @method void setLocked(integer $Locked) 设置备份是否被锁定。

- 0：未被锁定。
- 1：已被锁定。
 * @method integer getBackupSize() 获取备份文件大小。单位：Byte。
 * @method void setBackupSize(integer $BackupSize) 设置备份文件大小。单位：Byte。
 * @method integer getInstanceType() 获取实例类型。
 * @method void setInstanceType(integer $InstanceType) 设置实例类型。
 * @method integer getMemSize() 获取单分片内存规格大小，单位：MB。
 * @method void setMemSize(integer $MemSize) 设置单分片内存规格大小，单位：MB。
 * @method integer getShardNum() 获取分片数量。
 * @method void setShardNum(integer $ShardNum) 设置分片数量。
 * @method integer getReplicasNum() 获取副本数量。
 * @method void setReplicasNum(integer $ReplicasNum) 设置副本数量。
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeBackupDetailResponse extends AbstractModel
{
    /**
     * @var string 备份 ID。
     */
    public $BackupId;

    /**
     * @var string 备份开始时间。
     */
    public $StartTime;

    /**
     * @var string 备份结束时间。
     */
    public $EndTime;

    /**
     * @var string 备份方式。 

- 1：手动备份。
-  0：自动备份。
     */
    public $BackupType;

    /**
     * @var integer 备份状态。 

- 1：备份被其它流程锁定。
- 2：备份正常，没有被任何流程锁定。
- -1：备份已过期。
- 3：备份正在被导出。
- 4：备份导出成功。
     */
    public $Status;

    /**
     * @var string 备份的备注信息。
     */
    public $Remark;

    /**
     * @var integer 备份是否被锁定。

- 0：未被锁定。
- 1：已被锁定。
     */
    public $Locked;

    /**
     * @var integer 备份文件大小。单位：Byte。
     */
    public $BackupSize;

    /**
     * @var integer 实例类型。
     */
    public $InstanceType;

    /**
     * @var integer 单分片内存规格大小，单位：MB。
     */
    public $MemSize;

    /**
     * @var integer 分片数量。
     */
    public $ShardNum;

    /**
     * @var integer 副本数量。
     */
    public $ReplicasNum;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param string $BackupId 备份 ID。
     * @param string $StartTime 备份开始时间。
     * @param string $EndTime 备份结束时间。
     * @param string $BackupType 备份方式。 

- 1：手动备份。
-  0：自动备份。
     * @param integer $Status 备份状态。 

- 1：备份被其它流程锁定。
- 2：备份正常，没有被任何流程锁定。
- -1：备份已过期。
- 3：备份正在被导出。
- 4：备份导出成功。
     * @param string $Remark 备份的备注信息。
     * @param integer $Locked 备份是否被锁定。

- 0：未被锁定。
- 1：已被锁定。
     * @param integer $BackupSize 备份文件大小。单位：Byte。
     * @param integer $InstanceType 实例类型。
     * @param integer $MemSize 单分片内存规格大小，单位：MB。
     * @param integer $ShardNum 分片数量。
     * @param integer $ReplicasNum 副本数量。
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

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
