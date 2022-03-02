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
namespace TencentCloud\Tdcpg\V20211118\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 集群备份集信息
 *
 * @method integer getBackupId() 获取备份集ID，集群内唯一
 * @method void setBackupId(integer $BackupId) 设置备份集ID，集群内唯一
 * @method string getBackupType() 获取备份集类型，目前只支持 SNAPSHOT：快照
 * @method void setBackupType(string $BackupType) 设置备份集类型，目前只支持 SNAPSHOT：快照
 * @method string getBackupMethod() 获取备份集产生的方案，目前只支持 AUTO：自动
 * @method void setBackupMethod(string $BackupMethod) 设置备份集产生的方案，目前只支持 AUTO：自动
 * @method string getBackupDataTime() 获取备份集对应的数据时间。按照RFC3339标准表示，并且使用东八区时区时间，格式为：YYYY-MM-DDThh:mm:ss+08:00。
 * @method void setBackupDataTime(string $BackupDataTime) 设置备份集对应的数据时间。按照RFC3339标准表示，并且使用东八区时区时间，格式为：YYYY-MM-DDThh:mm:ss+08:00。
 * @method integer getBackupDataSize() 获取备份集数据大小，单位GiB
 * @method void setBackupDataSize(integer $BackupDataSize) 设置备份集数据大小，单位GiB
 * @method string getBackupTaskStartTime() 获取备份集对应的任务开始时间。按照RFC3339标准表示，并且使用东八区时区时间，格式为：YYYY-MM-DDThh:mm:ss+08:00。
 * @method void setBackupTaskStartTime(string $BackupTaskStartTime) 设置备份集对应的任务开始时间。按照RFC3339标准表示，并且使用东八区时区时间，格式为：YYYY-MM-DDThh:mm:ss+08:00。
 * @method string getBackupTaskEndTime() 获取备份集对应的任务结束时间。按照RFC3339标准表示，并且使用东八区时区时间，格式为：YYYY-MM-DDThh:mm:ss+08:00。
 * @method void setBackupTaskEndTime(string $BackupTaskEndTime) 设置备份集对应的任务结束时间。按照RFC3339标准表示，并且使用东八区时区时间，格式为：YYYY-MM-DDThh:mm:ss+08:00。
 * @method string getBackupTaskStatus() 获取备份集对应的任务状态  SUCCESS：成功
 * @method void setBackupTaskStatus(string $BackupTaskStatus) 设置备份集对应的任务状态  SUCCESS：成功
 */
class Backup extends AbstractModel
{
    /**
     * @var integer 备份集ID，集群内唯一
     */
    public $BackupId;

    /**
     * @var string 备份集类型，目前只支持 SNAPSHOT：快照
     */
    public $BackupType;

    /**
     * @var string 备份集产生的方案，目前只支持 AUTO：自动
     */
    public $BackupMethod;

    /**
     * @var string 备份集对应的数据时间。按照RFC3339标准表示，并且使用东八区时区时间，格式为：YYYY-MM-DDThh:mm:ss+08:00。
     */
    public $BackupDataTime;

    /**
     * @var integer 备份集数据大小，单位GiB
     */
    public $BackupDataSize;

    /**
     * @var string 备份集对应的任务开始时间。按照RFC3339标准表示，并且使用东八区时区时间，格式为：YYYY-MM-DDThh:mm:ss+08:00。
     */
    public $BackupTaskStartTime;

    /**
     * @var string 备份集对应的任务结束时间。按照RFC3339标准表示，并且使用东八区时区时间，格式为：YYYY-MM-DDThh:mm:ss+08:00。
     */
    public $BackupTaskEndTime;

    /**
     * @var string 备份集对应的任务状态  SUCCESS：成功
     */
    public $BackupTaskStatus;

    /**
     * @param integer $BackupId 备份集ID，集群内唯一
     * @param string $BackupType 备份集类型，目前只支持 SNAPSHOT：快照
     * @param string $BackupMethod 备份集产生的方案，目前只支持 AUTO：自动
     * @param string $BackupDataTime 备份集对应的数据时间。按照RFC3339标准表示，并且使用东八区时区时间，格式为：YYYY-MM-DDThh:mm:ss+08:00。
     * @param integer $BackupDataSize 备份集数据大小，单位GiB
     * @param string $BackupTaskStartTime 备份集对应的任务开始时间。按照RFC3339标准表示，并且使用东八区时区时间，格式为：YYYY-MM-DDThh:mm:ss+08:00。
     * @param string $BackupTaskEndTime 备份集对应的任务结束时间。按照RFC3339标准表示，并且使用东八区时区时间，格式为：YYYY-MM-DDThh:mm:ss+08:00。
     * @param string $BackupTaskStatus 备份集对应的任务状态  SUCCESS：成功
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

        if (array_key_exists("BackupType",$param) and $param["BackupType"] !== null) {
            $this->BackupType = $param["BackupType"];
        }

        if (array_key_exists("BackupMethod",$param) and $param["BackupMethod"] !== null) {
            $this->BackupMethod = $param["BackupMethod"];
        }

        if (array_key_exists("BackupDataTime",$param) and $param["BackupDataTime"] !== null) {
            $this->BackupDataTime = $param["BackupDataTime"];
        }

        if (array_key_exists("BackupDataSize",$param) and $param["BackupDataSize"] !== null) {
            $this->BackupDataSize = $param["BackupDataSize"];
        }

        if (array_key_exists("BackupTaskStartTime",$param) and $param["BackupTaskStartTime"] !== null) {
            $this->BackupTaskStartTime = $param["BackupTaskStartTime"];
        }

        if (array_key_exists("BackupTaskEndTime",$param) and $param["BackupTaskEndTime"] !== null) {
            $this->BackupTaskEndTime = $param["BackupTaskEndTime"];
        }

        if (array_key_exists("BackupTaskStatus",$param) and $param["BackupTaskStatus"] !== null) {
            $this->BackupTaskStatus = $param["BackupTaskStatus"];
        }
    }
}
