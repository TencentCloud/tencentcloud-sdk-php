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
namespace TencentCloud\Dbs\V20211108\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 备份进度信息
 *
 * @method string getFullBackupStatus() 获取全量备份状态。
 * @method void setFullBackupStatus(string $FullBackupStatus) 设置全量备份状态。
 * @method string getIncrementBackupStatus() 获取增量备份状态。
 * @method void setIncrementBackupStatus(string $IncrementBackupStatus) 设置增量备份状态。
 * @method string getLastBackupTime() 获取上次备份执行时间。格式为 YYYY-MM-DD HH:mm:ss，如 2024-01-01 00:00:00，尚未执行过备份时为空字符串。
 * @method void setLastBackupTime(string $LastBackupTime) 设置上次备份执行时间。格式为 YYYY-MM-DD HH:mm:ss，如 2024-01-01 00:00:00，尚未执行过备份时为空字符串。
 * @method string getNextBackupTime() 获取下次备份执行时间。格式为 YYYY-MM-DD HH:mm:ss，如 2024-01-01 00:00:00，尚未确定时为空字符串。
 * @method void setNextBackupTime(string $NextBackupTime) 设置下次备份执行时间。格式为 YYYY-MM-DD HH:mm:ss，如 2024-01-01 00:00:00，尚未确定时为空字符串。
 * @method string getLastRestoreTime() 获取上次恢复时间。格式为 YYYY-MM-DD HH:mm:ss，如 2024-01-01 00:00:00，尚未执行过恢复时为空字符串。
 * @method void setLastRestoreTime(string $LastRestoreTime) 设置上次恢复时间。格式为 YYYY-MM-DD HH:mm:ss，如 2024-01-01 00:00:00，尚未执行过恢复时为空字符串。
 * @method string getLastRestoreStatus() 获取上次恢复任务状态。
 * @method void setLastRestoreStatus(string $LastRestoreStatus) 设置上次恢复任务状态。
 * @method string getCurrentBackupJobStatus() 获取当前备份作业状态。
 * @method void setCurrentBackupJobStatus(string $CurrentBackupJobStatus) 设置当前备份作业状态。
 */
class BackupProgress extends AbstractModel
{
    /**
     * @var string 全量备份状态。
     */
    public $FullBackupStatus;

    /**
     * @var string 增量备份状态。
     */
    public $IncrementBackupStatus;

    /**
     * @var string 上次备份执行时间。格式为 YYYY-MM-DD HH:mm:ss，如 2024-01-01 00:00:00，尚未执行过备份时为空字符串。
     */
    public $LastBackupTime;

    /**
     * @var string 下次备份执行时间。格式为 YYYY-MM-DD HH:mm:ss，如 2024-01-01 00:00:00，尚未确定时为空字符串。
     */
    public $NextBackupTime;

    /**
     * @var string 上次恢复时间。格式为 YYYY-MM-DD HH:mm:ss，如 2024-01-01 00:00:00，尚未执行过恢复时为空字符串。
     */
    public $LastRestoreTime;

    /**
     * @var string 上次恢复任务状态。
     */
    public $LastRestoreStatus;

    /**
     * @var string 当前备份作业状态。
     */
    public $CurrentBackupJobStatus;

    /**
     * @param string $FullBackupStatus 全量备份状态。
     * @param string $IncrementBackupStatus 增量备份状态。
     * @param string $LastBackupTime 上次备份执行时间。格式为 YYYY-MM-DD HH:mm:ss，如 2024-01-01 00:00:00，尚未执行过备份时为空字符串。
     * @param string $NextBackupTime 下次备份执行时间。格式为 YYYY-MM-DD HH:mm:ss，如 2024-01-01 00:00:00，尚未确定时为空字符串。
     * @param string $LastRestoreTime 上次恢复时间。格式为 YYYY-MM-DD HH:mm:ss，如 2024-01-01 00:00:00，尚未执行过恢复时为空字符串。
     * @param string $LastRestoreStatus 上次恢复任务状态。
     * @param string $CurrentBackupJobStatus 当前备份作业状态。
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
        if (array_key_exists("FullBackupStatus",$param) and $param["FullBackupStatus"] !== null) {
            $this->FullBackupStatus = $param["FullBackupStatus"];
        }

        if (array_key_exists("IncrementBackupStatus",$param) and $param["IncrementBackupStatus"] !== null) {
            $this->IncrementBackupStatus = $param["IncrementBackupStatus"];
        }

        if (array_key_exists("LastBackupTime",$param) and $param["LastBackupTime"] !== null) {
            $this->LastBackupTime = $param["LastBackupTime"];
        }

        if (array_key_exists("NextBackupTime",$param) and $param["NextBackupTime"] !== null) {
            $this->NextBackupTime = $param["NextBackupTime"];
        }

        if (array_key_exists("LastRestoreTime",$param) and $param["LastRestoreTime"] !== null) {
            $this->LastRestoreTime = $param["LastRestoreTime"];
        }

        if (array_key_exists("LastRestoreStatus",$param) and $param["LastRestoreStatus"] !== null) {
            $this->LastRestoreStatus = $param["LastRestoreStatus"];
        }

        if (array_key_exists("CurrentBackupJobStatus",$param) and $param["CurrentBackupJobStatus"] !== null) {
            $this->CurrentBackupJobStatus = $param["CurrentBackupJobStatus"];
        }
    }
}
