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
namespace TencentCloud\Cwp\V20180228\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 主机快照备份列表
 *
 * @method string getBackupTime() 获取备份时间
 * @method void setBackupTime(string $BackupTime) 设置备份时间
 * @method integer getEventStatus() 获取勒索状态：0无告警, 1有告警
 * @method void setEventStatus(integer $EventStatus) 设置勒索状态：0无告警, 1有告警
 * @method integer getBackupStatus() 获取备份状态：0备份中，1正常，2、3失败，4快照已过期，5快照数量超出限制，9快照已删除
 * @method void setBackupStatus(integer $BackupStatus) 设置备份状态：0备份中，1正常，2、3失败，4快照已过期，5快照数量超出限制，9快照已删除
 * @method integer getDiskCount() 获取备份磁盘数量
 * @method void setDiskCount(integer $DiskCount) 设置备份磁盘数量
 * @method string getDisks() 获取硬盘信息，；分隔
 * @method void setDisks(string $Disks) 设置硬盘信息，；分隔
 * @method string getSnapshotIds() 获取快照列表，；分隔
 * @method void setSnapshotIds(string $SnapshotIds) 设置快照列表，；分隔
 * @method integer getStrategyId() 获取策略id
 * @method void setStrategyId(integer $StrategyId) 设置策略id
 * @method integer getStrategyStatus() 获取策略状态:0关闭，1开启，9已删除
 * @method void setStrategyStatus(integer $StrategyStatus) 设置策略状态:0关闭，1开启，9已删除
 * @method string getStrategyName() 获取策略名称
 * @method void setStrategyName(string $StrategyName) 设置策略名称
 */
class RansomDefenseBackup extends AbstractModel
{
    /**
     * @var string 备份时间
     */
    public $BackupTime;

    /**
     * @var integer 勒索状态：0无告警, 1有告警
     */
    public $EventStatus;

    /**
     * @var integer 备份状态：0备份中，1正常，2、3失败，4快照已过期，5快照数量超出限制，9快照已删除
     */
    public $BackupStatus;

    /**
     * @var integer 备份磁盘数量
     */
    public $DiskCount;

    /**
     * @var string 硬盘信息，；分隔
     */
    public $Disks;

    /**
     * @var string 快照列表，；分隔
     */
    public $SnapshotIds;

    /**
     * @var integer 策略id
     */
    public $StrategyId;

    /**
     * @var integer 策略状态:0关闭，1开启，9已删除
     */
    public $StrategyStatus;

    /**
     * @var string 策略名称
     */
    public $StrategyName;

    /**
     * @param string $BackupTime 备份时间
     * @param integer $EventStatus 勒索状态：0无告警, 1有告警
     * @param integer $BackupStatus 备份状态：0备份中，1正常，2、3失败，4快照已过期，5快照数量超出限制，9快照已删除
     * @param integer $DiskCount 备份磁盘数量
     * @param string $Disks 硬盘信息，；分隔
     * @param string $SnapshotIds 快照列表，；分隔
     * @param integer $StrategyId 策略id
     * @param integer $StrategyStatus 策略状态:0关闭，1开启，9已删除
     * @param string $StrategyName 策略名称
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
        if (array_key_exists("BackupTime",$param) and $param["BackupTime"] !== null) {
            $this->BackupTime = $param["BackupTime"];
        }

        if (array_key_exists("EventStatus",$param) and $param["EventStatus"] !== null) {
            $this->EventStatus = $param["EventStatus"];
        }

        if (array_key_exists("BackupStatus",$param) and $param["BackupStatus"] !== null) {
            $this->BackupStatus = $param["BackupStatus"];
        }

        if (array_key_exists("DiskCount",$param) and $param["DiskCount"] !== null) {
            $this->DiskCount = $param["DiskCount"];
        }

        if (array_key_exists("Disks",$param) and $param["Disks"] !== null) {
            $this->Disks = $param["Disks"];
        }

        if (array_key_exists("SnapshotIds",$param) and $param["SnapshotIds"] !== null) {
            $this->SnapshotIds = $param["SnapshotIds"];
        }

        if (array_key_exists("StrategyId",$param) and $param["StrategyId"] !== null) {
            $this->StrategyId = $param["StrategyId"];
        }

        if (array_key_exists("StrategyStatus",$param) and $param["StrategyStatus"] !== null) {
            $this->StrategyStatus = $param["StrategyStatus"];
        }

        if (array_key_exists("StrategyName",$param) and $param["StrategyName"] !== null) {
            $this->StrategyName = $param["StrategyName"];
        }
    }
}
