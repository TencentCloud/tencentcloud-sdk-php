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
 * DescribeCloneDBInstanceSpec请求参数结构体
 *
 * @method string getDBInstanceId() 获取实例ID。可通过[DescribeDBInstances](https://cloud.tencent.com/document/api/409/16773)接口获取
 * @method void setDBInstanceId(string $DBInstanceId) 设置实例ID。可通过[DescribeDBInstances](https://cloud.tencent.com/document/api/409/16773)接口获取
 * @method string getBackupSetId() 获取基础备份集ID，可通过[DescribeBaseBackups](https://cloud.tencent.com/document/api/409/89022)接口获取。此入参和RecoveryTargetTime必须选择一个传入。如与RecoveryTargetTime参数同时设置，则以此参数为准。
 * @method void setBackupSetId(string $BackupSetId) 设置基础备份集ID，可通过[DescribeBaseBackups](https://cloud.tencent.com/document/api/409/89022)接口获取。此入参和RecoveryTargetTime必须选择一个传入。如与RecoveryTargetTime参数同时设置，则以此参数为准。
 * @method string getRecoveryTargetTime() 获取恢复目标时间，此入参和BackupSetId必须选择一个传入。时区以东八区（UTC+8）为准。
 * @method void setRecoveryTargetTime(string $RecoveryTargetTime) 设置恢复目标时间，此入参和BackupSetId必须选择一个传入。时区以东八区（UTC+8）为准。
 */
class DescribeCloneDBInstanceSpecRequest extends AbstractModel
{
    /**
     * @var string 实例ID。可通过[DescribeDBInstances](https://cloud.tencent.com/document/api/409/16773)接口获取
     */
    public $DBInstanceId;

    /**
     * @var string 基础备份集ID，可通过[DescribeBaseBackups](https://cloud.tencent.com/document/api/409/89022)接口获取。此入参和RecoveryTargetTime必须选择一个传入。如与RecoveryTargetTime参数同时设置，则以此参数为准。
     */
    public $BackupSetId;

    /**
     * @var string 恢复目标时间，此入参和BackupSetId必须选择一个传入。时区以东八区（UTC+8）为准。
     */
    public $RecoveryTargetTime;

    /**
     * @param string $DBInstanceId 实例ID。可通过[DescribeDBInstances](https://cloud.tencent.com/document/api/409/16773)接口获取
     * @param string $BackupSetId 基础备份集ID，可通过[DescribeBaseBackups](https://cloud.tencent.com/document/api/409/89022)接口获取。此入参和RecoveryTargetTime必须选择一个传入。如与RecoveryTargetTime参数同时设置，则以此参数为准。
     * @param string $RecoveryTargetTime 恢复目标时间，此入参和BackupSetId必须选择一个传入。时区以东八区（UTC+8）为准。
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

        if (array_key_exists("BackupSetId",$param) and $param["BackupSetId"] !== null) {
            $this->BackupSetId = $param["BackupSetId"];
        }

        if (array_key_exists("RecoveryTargetTime",$param) and $param["RecoveryTargetTime"] !== null) {
            $this->RecoveryTargetTime = $param["RecoveryTargetTime"];
        }
    }
}
