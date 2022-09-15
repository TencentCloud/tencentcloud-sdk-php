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
namespace TencentCloud\Sqlserver\V20180328\Models;
use TencentCloud\Common\AbstractModel;

/**
 * RemoveBackups请求参数结构体
 *
 * @method string getInstanceId() 获取实例ID，形如mssql-j8kv137v
 * @method void setInstanceId(string $InstanceId) 设置实例ID，形如mssql-j8kv137v
 * @method array getBackupNames() 获取待删除的备份名称，备份名称可通过DescribeBackups接口的FileName字段获得。单次请求批量删除备份数不能超过10个。
 * @method void setBackupNames(array $BackupNames) 设置待删除的备份名称，备份名称可通过DescribeBackups接口的FileName字段获得。单次请求批量删除备份数不能超过10个。
 * @method string getStartTime() 获取批量删除手动备份起始时间
 * @method void setStartTime(string $StartTime) 设置批量删除手动备份起始时间
 * @method string getEndTime() 获取批量删除手动备份截止时间
 * @method void setEndTime(string $EndTime) 设置批量删除手动备份截止时间
 */
class RemoveBackupsRequest extends AbstractModel
{
    /**
     * @var string 实例ID，形如mssql-j8kv137v
     */
    public $InstanceId;

    /**
     * @var array 待删除的备份名称，备份名称可通过DescribeBackups接口的FileName字段获得。单次请求批量删除备份数不能超过10个。
     */
    public $BackupNames;

    /**
     * @var string 批量删除手动备份起始时间
     */
    public $StartTime;

    /**
     * @var string 批量删除手动备份截止时间
     */
    public $EndTime;

    /**
     * @param string $InstanceId 实例ID，形如mssql-j8kv137v
     * @param array $BackupNames 待删除的备份名称，备份名称可通过DescribeBackups接口的FileName字段获得。单次请求批量删除备份数不能超过10个。
     * @param string $StartTime 批量删除手动备份起始时间
     * @param string $EndTime 批量删除手动备份截止时间
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

        if (array_key_exists("BackupNames",$param) and $param["BackupNames"] !== null) {
            $this->BackupNames = $param["BackupNames"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }
    }
}
