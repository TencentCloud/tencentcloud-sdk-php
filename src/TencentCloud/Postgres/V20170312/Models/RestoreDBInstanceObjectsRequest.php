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
 * RestoreDBInstanceObjects请求参数结构体
 *
 * @method string getDBInstanceId() 获取实例ID。可通过[DescribeDBInstances](https://cloud.tencent.com/document/api/409/16773)接口获取
 * @method void setDBInstanceId(string $DBInstanceId) 设置实例ID。可通过[DescribeDBInstances](https://cloud.tencent.com/document/api/409/16773)接口获取
 * @method array getRestoreObjects() 获取需要恢复的对象列表。假设需要恢复的对象名为user，则恢复后的名称为user_bak_${LinuxTime}。${LinuxTime}无法指定，由系统根据任务发起的linux时间设定。
 * @method void setRestoreObjects(array $RestoreObjects) 设置需要恢复的对象列表。假设需要恢复的对象名为user，则恢复后的名称为user_bak_${LinuxTime}。${LinuxTime}无法指定，由系统根据任务发起的linux时间设定。
 * @method string getBackupSetId() 获取恢复所用备份集。BackupSetId与RestoreTargetTime有且只能传一个。可通过[DescribeBaseBackups](https://cloud.tencent.com/document/api/409/89022)接口获取
 * @method void setBackupSetId(string $BackupSetId) 设置恢复所用备份集。BackupSetId与RestoreTargetTime有且只能传一个。可通过[DescribeBaseBackups](https://cloud.tencent.com/document/api/409/89022)接口获取
 * @method string getRestoreTargetTime() 获取恢复目标时间，北京时间。BackupSetId与RestoreTargetTime有且只能传一个。
 * @method void setRestoreTargetTime(string $RestoreTargetTime) 设置恢复目标时间，北京时间。BackupSetId与RestoreTargetTime有且只能传一个。
 */
class RestoreDBInstanceObjectsRequest extends AbstractModel
{
    /**
     * @var string 实例ID。可通过[DescribeDBInstances](https://cloud.tencent.com/document/api/409/16773)接口获取
     */
    public $DBInstanceId;

    /**
     * @var array 需要恢复的对象列表。假设需要恢复的对象名为user，则恢复后的名称为user_bak_${LinuxTime}。${LinuxTime}无法指定，由系统根据任务发起的linux时间设定。
     */
    public $RestoreObjects;

    /**
     * @var string 恢复所用备份集。BackupSetId与RestoreTargetTime有且只能传一个。可通过[DescribeBaseBackups](https://cloud.tencent.com/document/api/409/89022)接口获取
     */
    public $BackupSetId;

    /**
     * @var string 恢复目标时间，北京时间。BackupSetId与RestoreTargetTime有且只能传一个。
     */
    public $RestoreTargetTime;

    /**
     * @param string $DBInstanceId 实例ID。可通过[DescribeDBInstances](https://cloud.tencent.com/document/api/409/16773)接口获取
     * @param array $RestoreObjects 需要恢复的对象列表。假设需要恢复的对象名为user，则恢复后的名称为user_bak_${LinuxTime}。${LinuxTime}无法指定，由系统根据任务发起的linux时间设定。
     * @param string $BackupSetId 恢复所用备份集。BackupSetId与RestoreTargetTime有且只能传一个。可通过[DescribeBaseBackups](https://cloud.tencent.com/document/api/409/89022)接口获取
     * @param string $RestoreTargetTime 恢复目标时间，北京时间。BackupSetId与RestoreTargetTime有且只能传一个。
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

        if (array_key_exists("RestoreObjects",$param) and $param["RestoreObjects"] !== null) {
            $this->RestoreObjects = $param["RestoreObjects"];
        }

        if (array_key_exists("BackupSetId",$param) and $param["BackupSetId"] !== null) {
            $this->BackupSetId = $param["BackupSetId"];
        }

        if (array_key_exists("RestoreTargetTime",$param) and $param["RestoreTargetTime"] !== null) {
            $this->RestoreTargetTime = $param["RestoreTargetTime"];
        }
    }
}
