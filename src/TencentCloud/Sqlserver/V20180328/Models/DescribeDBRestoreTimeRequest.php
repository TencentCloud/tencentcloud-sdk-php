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
namespace TencentCloud\Sqlserver\V20180328\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeDBRestoreTime请求参数结构体
 *
 * @method string getInstanceId() 获取原实例ID
 * @method void setInstanceId(string $InstanceId) 设置原实例ID
 * @method string getTargetInstanceId() 获取回档的目标实例ID，不填则回档到原实例ID
 * @method void setTargetInstanceId(string $TargetInstanceId) 设置回档的目标实例ID，不填则回档到原实例ID
 * @method string getTime() 获取按时间点查询可回档数据库，时间格式 YYYY-MM-DD HH:MM:SS。BackupId，Time二选一，不能同时为空
 * @method void setTime(string $Time) 设置按时间点查询可回档数据库，时间格式 YYYY-MM-DD HH:MM:SS。BackupId，Time二选一，不能同时为空
 * @method integer getBackupId() 获取按备份集ID查询可回档数据库，可通过DescribeBackups接口获取。BackupId，Time二选一不能同时为空
 * @method void setBackupId(integer $BackupId) 设置按备份集ID查询可回档数据库，可通过DescribeBackups接口获取。BackupId，Time二选一不能同时为空
 * @method string getDBName() 获取数据库名称
 * @method void setDBName(string $DBName) 设置数据库名称
 */
class DescribeDBRestoreTimeRequest extends AbstractModel
{
    /**
     * @var string 原实例ID
     */
    public $InstanceId;

    /**
     * @var string 回档的目标实例ID，不填则回档到原实例ID
     */
    public $TargetInstanceId;

    /**
     * @var string 按时间点查询可回档数据库，时间格式 YYYY-MM-DD HH:MM:SS。BackupId，Time二选一，不能同时为空
     */
    public $Time;

    /**
     * @var integer 按备份集ID查询可回档数据库，可通过DescribeBackups接口获取。BackupId，Time二选一不能同时为空
     */
    public $BackupId;

    /**
     * @var string 数据库名称
     */
    public $DBName;

    /**
     * @param string $InstanceId 原实例ID
     * @param string $TargetInstanceId 回档的目标实例ID，不填则回档到原实例ID
     * @param string $Time 按时间点查询可回档数据库，时间格式 YYYY-MM-DD HH:MM:SS。BackupId，Time二选一，不能同时为空
     * @param integer $BackupId 按备份集ID查询可回档数据库，可通过DescribeBackups接口获取。BackupId，Time二选一不能同时为空
     * @param string $DBName 数据库名称
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

        if (array_key_exists("TargetInstanceId",$param) and $param["TargetInstanceId"] !== null) {
            $this->TargetInstanceId = $param["TargetInstanceId"];
        }

        if (array_key_exists("Time",$param) and $param["Time"] !== null) {
            $this->Time = $param["Time"];
        }

        if (array_key_exists("BackupId",$param) and $param["BackupId"] !== null) {
            $this->BackupId = $param["BackupId"];
        }

        if (array_key_exists("DBName",$param) and $param["DBName"] !== null) {
            $this->DBName = $param["DBName"];
        }
    }
}
