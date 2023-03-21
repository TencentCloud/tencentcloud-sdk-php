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
 * 数据库日志备份信息
 *
 * @method string getDBInstanceId() 获取实例ID。
 * @method void setDBInstanceId(string $DBInstanceId) 设置实例ID。
 * @method string getId() 获取备份文件唯一标识。
 * @method void setId(string $Id) 设置备份文件唯一标识。
 * @method string getName() 获取备份文件名称。
 * @method void setName(string $Name) 设置备份文件名称。
 * @method string getBackupMethod() 获取备份方式：物理备份、逻辑备份。
 * @method void setBackupMethod(string $BackupMethod) 设置备份方式：物理备份、逻辑备份。
 * @method string getBackupMode() 获取备份模式：自动备份、手动备份。
 * @method void setBackupMode(string $BackupMode) 设置备份模式：自动备份、手动备份。
 * @method string getState() 获取备份任务状态。
 * @method void setState(string $State) 设置备份任务状态。
 * @method integer getSize() 获取备份集大小，单位bytes。
 * @method void setSize(integer $Size) 设置备份集大小，单位bytes。
 * @method string getStartTime() 获取备份的开始时间。
 * @method void setStartTime(string $StartTime) 设置备份的开始时间。
 * @method string getFinishTime() 获取备份的结束时间。
 * @method void setFinishTime(string $FinishTime) 设置备份的结束时间。
 * @method string getExpireTime() 获取备份的过期时间。
 * @method void setExpireTime(string $ExpireTime) 设置备份的过期时间。
 */
class LogBackup extends AbstractModel
{
    /**
     * @var string 实例ID。
     */
    public $DBInstanceId;

    /**
     * @var string 备份文件唯一标识。
     */
    public $Id;

    /**
     * @var string 备份文件名称。
     */
    public $Name;

    /**
     * @var string 备份方式：物理备份、逻辑备份。
     */
    public $BackupMethod;

    /**
     * @var string 备份模式：自动备份、手动备份。
     */
    public $BackupMode;

    /**
     * @var string 备份任务状态。
     */
    public $State;

    /**
     * @var integer 备份集大小，单位bytes。
     */
    public $Size;

    /**
     * @var string 备份的开始时间。
     */
    public $StartTime;

    /**
     * @var string 备份的结束时间。
     */
    public $FinishTime;

    /**
     * @var string 备份的过期时间。
     */
    public $ExpireTime;

    /**
     * @param string $DBInstanceId 实例ID。
     * @param string $Id 备份文件唯一标识。
     * @param string $Name 备份文件名称。
     * @param string $BackupMethod 备份方式：物理备份、逻辑备份。
     * @param string $BackupMode 备份模式：自动备份、手动备份。
     * @param string $State 备份任务状态。
     * @param integer $Size 备份集大小，单位bytes。
     * @param string $StartTime 备份的开始时间。
     * @param string $FinishTime 备份的结束时间。
     * @param string $ExpireTime 备份的过期时间。
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

        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("BackupMethod",$param) and $param["BackupMethod"] !== null) {
            $this->BackupMethod = $param["BackupMethod"];
        }

        if (array_key_exists("BackupMode",$param) and $param["BackupMode"] !== null) {
            $this->BackupMode = $param["BackupMode"];
        }

        if (array_key_exists("State",$param) and $param["State"] !== null) {
            $this->State = $param["State"];
        }

        if (array_key_exists("Size",$param) and $param["Size"] !== null) {
            $this->Size = $param["Size"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("FinishTime",$param) and $param["FinishTime"] !== null) {
            $this->FinishTime = $param["FinishTime"];
        }

        if (array_key_exists("ExpireTime",$param) and $param["ExpireTime"] !== null) {
            $this->ExpireTime = $param["ExpireTime"];
        }
    }
}
