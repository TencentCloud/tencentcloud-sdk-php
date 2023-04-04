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
namespace TencentCloud\Dcdb\V20180411\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 实例备份文件信息
 *
 * @method string getInstanceId() 获取实例ID
 * @method void setInstanceId(string $InstanceId) 设置实例ID
 * @method string getInstanceName() 获取实例名称
 * @method void setInstanceName(string $InstanceName) 设置实例名称
 * @method integer getInstanceStatus() 获取实例状态
 * @method void setInstanceStatus(integer $InstanceStatus) 设置实例状态
 * @method string getShardId() 获取分片ID
 * @method void setShardId(string $ShardId) 设置分片ID
 * @method string getFilePath() 获取文件路径
 * @method void setFilePath(string $FilePath) 设置文件路径
 * @method string getFileName() 获取文件名
 * @method void setFileName(string $FileName) 设置文件名
 * @method integer getFileSize() 获取文件大小
 * @method void setFileSize(integer $FileSize) 设置文件大小
 * @method string getBackupType() 获取备份类型，Data:数据备份，Binlog:Binlog备份，Errlog:错误日志，Slowlog:慢日志
 * @method void setBackupType(string $BackupType) 设置备份类型，Data:数据备份，Binlog:Binlog备份，Errlog:错误日志，Slowlog:慢日志
 * @method integer getManualBackup() 获取手动备份，0:否，1:是
 * @method void setManualBackup(integer $ManualBackup) 设置手动备份，0:否，1:是
 * @method string getStartTime() 获取备份开始时间
 * @method void setStartTime(string $StartTime) 设置备份开始时间
 * @method string getEndTime() 获取备份结束时间
 * @method void setEndTime(string $EndTime) 设置备份结束时间
 */
class InstanceBackupFileItem extends AbstractModel
{
    /**
     * @var string 实例ID
     */
    public $InstanceId;

    /**
     * @var string 实例名称
     */
    public $InstanceName;

    /**
     * @var integer 实例状态
     */
    public $InstanceStatus;

    /**
     * @var string 分片ID
     */
    public $ShardId;

    /**
     * @var string 文件路径
     */
    public $FilePath;

    /**
     * @var string 文件名
     */
    public $FileName;

    /**
     * @var integer 文件大小
     */
    public $FileSize;

    /**
     * @var string 备份类型，Data:数据备份，Binlog:Binlog备份，Errlog:错误日志，Slowlog:慢日志
     */
    public $BackupType;

    /**
     * @var integer 手动备份，0:否，1:是
     */
    public $ManualBackup;

    /**
     * @var string 备份开始时间
     */
    public $StartTime;

    /**
     * @var string 备份结束时间
     */
    public $EndTime;

    /**
     * @param string $InstanceId 实例ID
     * @param string $InstanceName 实例名称
     * @param integer $InstanceStatus 实例状态
     * @param string $ShardId 分片ID
     * @param string $FilePath 文件路径
     * @param string $FileName 文件名
     * @param integer $FileSize 文件大小
     * @param string $BackupType 备份类型，Data:数据备份，Binlog:Binlog备份，Errlog:错误日志，Slowlog:慢日志
     * @param integer $ManualBackup 手动备份，0:否，1:是
     * @param string $StartTime 备份开始时间
     * @param string $EndTime 备份结束时间
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
        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("InstanceName",$param) and $param["InstanceName"] !== null) {
            $this->InstanceName = $param["InstanceName"];
        }

        if (array_key_exists("InstanceStatus",$param) and $param["InstanceStatus"] !== null) {
            $this->InstanceStatus = $param["InstanceStatus"];
        }

        if (array_key_exists("ShardId",$param) and $param["ShardId"] !== null) {
            $this->ShardId = $param["ShardId"];
        }

        if (array_key_exists("FilePath",$param) and $param["FilePath"] !== null) {
            $this->FilePath = $param["FilePath"];
        }

        if (array_key_exists("FileName",$param) and $param["FileName"] !== null) {
            $this->FileName = $param["FileName"];
        }

        if (array_key_exists("FileSize",$param) and $param["FileSize"] !== null) {
            $this->FileSize = $param["FileSize"];
        }

        if (array_key_exists("BackupType",$param) and $param["BackupType"] !== null) {
            $this->BackupType = $param["BackupType"];
        }

        if (array_key_exists("ManualBackup",$param) and $param["ManualBackup"] !== null) {
            $this->ManualBackup = $param["ManualBackup"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }
    }
}
