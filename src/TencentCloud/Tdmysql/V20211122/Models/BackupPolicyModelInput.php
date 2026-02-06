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
namespace TencentCloud\Tdmysql\V20211122\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 修改备份策略对象
 *
 * @method string getBackupEndTime() 获取<p>备份结束时间</p>
 * @method void setBackupEndTime(string $BackupEndTime) 设置<p>备份结束时间</p>
 * @method string getBackupMethod() 获取<p>备份方式  physical 物理备份 snapshot 快照备份</p>
 * @method void setBackupMethod(string $BackupMethod) 设置<p>备份方式  physical 物理备份 snapshot 快照备份</p>
 * @method string getBackupStartTime() 获取<p>备份开始时间</p>
 * @method void setBackupStartTime(string $BackupStartTime) 设置<p>备份开始时间</p>
 * @method integer getEnableFull() 获取<p>是否开启全量备份</p>
 * @method void setEnableFull(integer $EnableFull) 设置<p>是否开启全量备份</p>
 * @method integer getEnableLog() 获取<p>是否开启日志备份</p>
 * @method void setEnableLog(integer $EnableLog) 设置<p>是否开启日志备份</p>
 * @method integer getFullRetentionPeriod() 获取<p>全备保留时间,目前只能设置7天</p>
 * @method void setFullRetentionPeriod(integer $FullRetentionPeriod) 设置<p>全备保留时间,目前只能设置7天</p>
 * @method string getInstanceId() 获取<p>实例ID</p>
 * @method void setInstanceId(string $InstanceId) 设置<p>实例ID</p>
 * @method integer getLogRetentionPeriod() 获取<p>日志保留天数，目前只能设置保留7天</p>
 * @method void setLogRetentionPeriod(integer $LogRetentionPeriod) 设置<p>日志保留天数，目前只能设置保留7天</p>
 * @method string getPeriodTime() 获取<p>一周的哪几天进行备份</p>
 * @method void setPeriodTime(string $PeriodTime) 设置<p>一周的哪几天进行备份</p>
 * @method string getStorageType() 获取<p>存储类型:COS,SNAPSHOT</p>枚举值：<ul><li> COS： COS存储</li><li> SNAPSHOT： 云盘快照</li></ul>
 * @method void setStorageType(string $StorageType) 设置<p>存储类型:COS,SNAPSHOT</p>枚举值：<ul><li> COS： COS存储</li><li> SNAPSHOT： 云盘快照</li></ul>
 */
class BackupPolicyModelInput extends AbstractModel
{
    /**
     * @var string <p>备份结束时间</p>
     */
    public $BackupEndTime;

    /**
     * @var string <p>备份方式  physical 物理备份 snapshot 快照备份</p>
     */
    public $BackupMethod;

    /**
     * @var string <p>备份开始时间</p>
     */
    public $BackupStartTime;

    /**
     * @var integer <p>是否开启全量备份</p>
     */
    public $EnableFull;

    /**
     * @var integer <p>是否开启日志备份</p>
     */
    public $EnableLog;

    /**
     * @var integer <p>全备保留时间,目前只能设置7天</p>
     */
    public $FullRetentionPeriod;

    /**
     * @var string <p>实例ID</p>
     */
    public $InstanceId;

    /**
     * @var integer <p>日志保留天数，目前只能设置保留7天</p>
     */
    public $LogRetentionPeriod;

    /**
     * @var string <p>一周的哪几天进行备份</p>
     */
    public $PeriodTime;

    /**
     * @var string <p>存储类型:COS,SNAPSHOT</p>枚举值：<ul><li> COS： COS存储</li><li> SNAPSHOT： 云盘快照</li></ul>
     */
    public $StorageType;

    /**
     * @param string $BackupEndTime <p>备份结束时间</p>
     * @param string $BackupMethod <p>备份方式  physical 物理备份 snapshot 快照备份</p>
     * @param string $BackupStartTime <p>备份开始时间</p>
     * @param integer $EnableFull <p>是否开启全量备份</p>
     * @param integer $EnableLog <p>是否开启日志备份</p>
     * @param integer $FullRetentionPeriod <p>全备保留时间,目前只能设置7天</p>
     * @param string $InstanceId <p>实例ID</p>
     * @param integer $LogRetentionPeriod <p>日志保留天数，目前只能设置保留7天</p>
     * @param string $PeriodTime <p>一周的哪几天进行备份</p>
     * @param string $StorageType <p>存储类型:COS,SNAPSHOT</p>枚举值：<ul><li> COS： COS存储</li><li> SNAPSHOT： 云盘快照</li></ul>
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
        if (array_key_exists("BackupEndTime",$param) and $param["BackupEndTime"] !== null) {
            $this->BackupEndTime = $param["BackupEndTime"];
        }

        if (array_key_exists("BackupMethod",$param) and $param["BackupMethod"] !== null) {
            $this->BackupMethod = $param["BackupMethod"];
        }

        if (array_key_exists("BackupStartTime",$param) and $param["BackupStartTime"] !== null) {
            $this->BackupStartTime = $param["BackupStartTime"];
        }

        if (array_key_exists("EnableFull",$param) and $param["EnableFull"] !== null) {
            $this->EnableFull = $param["EnableFull"];
        }

        if (array_key_exists("EnableLog",$param) and $param["EnableLog"] !== null) {
            $this->EnableLog = $param["EnableLog"];
        }

        if (array_key_exists("FullRetentionPeriod",$param) and $param["FullRetentionPeriod"] !== null) {
            $this->FullRetentionPeriod = $param["FullRetentionPeriod"];
        }

        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("LogRetentionPeriod",$param) and $param["LogRetentionPeriod"] !== null) {
            $this->LogRetentionPeriod = $param["LogRetentionPeriod"];
        }

        if (array_key_exists("PeriodTime",$param) and $param["PeriodTime"] !== null) {
            $this->PeriodTime = $param["PeriodTime"];
        }

        if (array_key_exists("StorageType",$param) and $param["StorageType"] !== null) {
            $this->StorageType = $param["StorageType"];
        }
    }
}
