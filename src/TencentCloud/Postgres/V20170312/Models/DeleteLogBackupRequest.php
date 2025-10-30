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
namespace TencentCloud\Postgres\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DeleteLogBackup请求参数结构体
 *
 * @method string getDBInstanceId() 获取实例ID。可通过[DescribeDBInstances](https://cloud.tencent.com/document/api/409/16773)接口获取
 * @method void setDBInstanceId(string $DBInstanceId) 设置实例ID。可通过[DescribeDBInstances](https://cloud.tencent.com/document/api/409/16773)接口获取
 * @method string getLogBackupId() 获取日志备份ID。可通过[DescribeLogBackups](https://cloud.tencent.com/document/api/409/89021)接口获取。注：7天内自动备份集不允许删除。
 * @method void setLogBackupId(string $LogBackupId) 设置日志备份ID。可通过[DescribeLogBackups](https://cloud.tencent.com/document/api/409/89021)接口获取。注：7天内自动备份集不允许删除。
 */
class DeleteLogBackupRequest extends AbstractModel
{
    /**
     * @var string 实例ID。可通过[DescribeDBInstances](https://cloud.tencent.com/document/api/409/16773)接口获取
     */
    public $DBInstanceId;

    /**
     * @var string 日志备份ID。可通过[DescribeLogBackups](https://cloud.tencent.com/document/api/409/89021)接口获取。注：7天内自动备份集不允许删除。
     */
    public $LogBackupId;

    /**
     * @param string $DBInstanceId 实例ID。可通过[DescribeDBInstances](https://cloud.tencent.com/document/api/409/16773)接口获取
     * @param string $LogBackupId 日志备份ID。可通过[DescribeLogBackups](https://cloud.tencent.com/document/api/409/89021)接口获取。注：7天内自动备份集不允许删除。
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

        if (array_key_exists("LogBackupId",$param) and $param["LogBackupId"] !== null) {
            $this->LogBackupId = $param["LogBackupId"];
        }
    }
}
