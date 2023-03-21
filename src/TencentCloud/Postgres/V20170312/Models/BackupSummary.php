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
namespace TencentCloud\Postgres\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 实例备份统计项
 *
 * @method string getDBInstanceId() 获取实例ID。
 * @method void setDBInstanceId(string $DBInstanceId) 设置实例ID。
 * @method integer getLogBackupCount() 获取实例日志备份数量。
 * @method void setLogBackupCount(integer $LogBackupCount) 设置实例日志备份数量。
 * @method integer getLogBackupSize() 获取实例日志备份大小。
 * @method void setLogBackupSize(integer $LogBackupSize) 设置实例日志备份大小。
 * @method integer getManualBaseBackupCount() 获取手动创建的实例基础备份数量。
 * @method void setManualBaseBackupCount(integer $ManualBaseBackupCount) 设置手动创建的实例基础备份数量。
 * @method integer getManualBaseBackupSize() 获取手动创建的实例基础备份大小。
 * @method void setManualBaseBackupSize(integer $ManualBaseBackupSize) 设置手动创建的实例基础备份大小。
 * @method integer getAutoBaseBackupCount() 获取自动创建的实例基础备份数量。
 * @method void setAutoBaseBackupCount(integer $AutoBaseBackupCount) 设置自动创建的实例基础备份数量。
 * @method integer getAutoBaseBackupSize() 获取自动创建的实例基础备份大小。
 * @method void setAutoBaseBackupSize(integer $AutoBaseBackupSize) 设置自动创建的实例基础备份大小。
 * @method integer getTotalBackupCount() 获取总备份数量
 * @method void setTotalBackupCount(integer $TotalBackupCount) 设置总备份数量
 * @method integer getTotalBackupSize() 获取总备份大小
 * @method void setTotalBackupSize(integer $TotalBackupSize) 设置总备份大小
 */
class BackupSummary extends AbstractModel
{
    /**
     * @var string 实例ID。
     */
    public $DBInstanceId;

    /**
     * @var integer 实例日志备份数量。
     */
    public $LogBackupCount;

    /**
     * @var integer 实例日志备份大小。
     */
    public $LogBackupSize;

    /**
     * @var integer 手动创建的实例基础备份数量。
     */
    public $ManualBaseBackupCount;

    /**
     * @var integer 手动创建的实例基础备份大小。
     */
    public $ManualBaseBackupSize;

    /**
     * @var integer 自动创建的实例基础备份数量。
     */
    public $AutoBaseBackupCount;

    /**
     * @var integer 自动创建的实例基础备份大小。
     */
    public $AutoBaseBackupSize;

    /**
     * @var integer 总备份数量
     */
    public $TotalBackupCount;

    /**
     * @var integer 总备份大小
     */
    public $TotalBackupSize;

    /**
     * @param string $DBInstanceId 实例ID。
     * @param integer $LogBackupCount 实例日志备份数量。
     * @param integer $LogBackupSize 实例日志备份大小。
     * @param integer $ManualBaseBackupCount 手动创建的实例基础备份数量。
     * @param integer $ManualBaseBackupSize 手动创建的实例基础备份大小。
     * @param integer $AutoBaseBackupCount 自动创建的实例基础备份数量。
     * @param integer $AutoBaseBackupSize 自动创建的实例基础备份大小。
     * @param integer $TotalBackupCount 总备份数量
     * @param integer $TotalBackupSize 总备份大小
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
        if (array_key_exists("DBInstanceId",$param) and $param["DBInstanceId"] !== null) {
            $this->DBInstanceId = $param["DBInstanceId"];
        }

        if (array_key_exists("LogBackupCount",$param) and $param["LogBackupCount"] !== null) {
            $this->LogBackupCount = $param["LogBackupCount"];
        }

        if (array_key_exists("LogBackupSize",$param) and $param["LogBackupSize"] !== null) {
            $this->LogBackupSize = $param["LogBackupSize"];
        }

        if (array_key_exists("ManualBaseBackupCount",$param) and $param["ManualBaseBackupCount"] !== null) {
            $this->ManualBaseBackupCount = $param["ManualBaseBackupCount"];
        }

        if (array_key_exists("ManualBaseBackupSize",$param) and $param["ManualBaseBackupSize"] !== null) {
            $this->ManualBaseBackupSize = $param["ManualBaseBackupSize"];
        }

        if (array_key_exists("AutoBaseBackupCount",$param) and $param["AutoBaseBackupCount"] !== null) {
            $this->AutoBaseBackupCount = $param["AutoBaseBackupCount"];
        }

        if (array_key_exists("AutoBaseBackupSize",$param) and $param["AutoBaseBackupSize"] !== null) {
            $this->AutoBaseBackupSize = $param["AutoBaseBackupSize"];
        }

        if (array_key_exists("TotalBackupCount",$param) and $param["TotalBackupCount"] !== null) {
            $this->TotalBackupCount = $param["TotalBackupCount"];
        }

        if (array_key_exists("TotalBackupSize",$param) and $param["TotalBackupSize"] !== null) {
            $this->TotalBackupSize = $param["TotalBackupSize"];
        }
    }
}
