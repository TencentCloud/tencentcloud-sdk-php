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
 * 备份策略对象
 *
 * @method string getBackupEndTime() 获取<p>备份结束时间</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setBackupEndTime(string $BackupEndTime) 设置<p>备份结束时间</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getBackupMethod() 获取<p>备份方式</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setBackupMethod(string $BackupMethod) 设置<p>备份方式</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getBackupStartTime() 获取<p>备份开始时间</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setBackupStartTime(string $BackupStartTime) 设置<p>备份开始时间</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDBType() 获取<p>引擎类型</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDBType(string $DBType) 设置<p>引擎类型</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDBVersion() 获取<p>引擎版本</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDBVersion(string $DBVersion) 设置<p>引擎版本</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getEnableFull() 获取<p>是否开启全量备份</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setEnableFull(integer $EnableFull) 设置<p>是否开启全量备份</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getEnableLog() 获取<p>是否开启日志备份</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setEnableLog(integer $EnableLog) 设置<p>是否开启日志备份</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getExpectedNextBackupPeriod() 获取<p>预计下次备份时间</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setExpectedNextBackupPeriod(string $ExpectedNextBackupPeriod) 设置<p>预计下次备份时间</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getFullRetentionPeriod() 获取<p>全备保留时间</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setFullRetentionPeriod(integer $FullRetentionPeriod) 设置<p>全备保留时间</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getID() 获取<p>策略ID</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setID(integer $ID) 设置<p>策略ID</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getInstanceId() 获取<p>实例ID</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setInstanceId(string $InstanceId) 设置<p>实例ID</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getLogRetentionPeriod() 获取<p>日志保留天数</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLogRetentionPeriod(integer $LogRetentionPeriod) 设置<p>日志保留天数</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getPeriodTime() 获取<p>一周的哪几天进行备份</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPeriodTime(string $PeriodTime) 设置<p>一周的哪几天进行备份</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRegion() 获取<p>地域</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRegion(string $Region) 设置<p>地域</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getPeriodType() 获取<p>备份周期类型  0:Weekly</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPeriodType(integer $PeriodType) 设置<p>备份周期类型  0:Weekly</p>
注意：此字段可能返回 null，表示取不到有效值。
 */
class BackupPolicyModelOutPut extends AbstractModel
{
    /**
     * @var string <p>备份结束时间</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $BackupEndTime;

    /**
     * @var string <p>备份方式</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $BackupMethod;

    /**
     * @var string <p>备份开始时间</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $BackupStartTime;

    /**
     * @var string <p>引擎类型</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DBType;

    /**
     * @var string <p>引擎版本</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DBVersion;

    /**
     * @var integer <p>是否开启全量备份</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $EnableFull;

    /**
     * @var integer <p>是否开启日志备份</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $EnableLog;

    /**
     * @var string <p>预计下次备份时间</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ExpectedNextBackupPeriod;

    /**
     * @var integer <p>全备保留时间</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $FullRetentionPeriod;

    /**
     * @var integer <p>策略ID</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ID;

    /**
     * @var string <p>实例ID</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $InstanceId;

    /**
     * @var integer <p>日志保留天数</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $LogRetentionPeriod;

    /**
     * @var string <p>一周的哪几天进行备份</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PeriodTime;

    /**
     * @var string <p>地域</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Region;

    /**
     * @var integer <p>备份周期类型  0:Weekly</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PeriodType;

    /**
     * @param string $BackupEndTime <p>备份结束时间</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $BackupMethod <p>备份方式</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $BackupStartTime <p>备份开始时间</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $DBType <p>引擎类型</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $DBVersion <p>引擎版本</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $EnableFull <p>是否开启全量备份</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $EnableLog <p>是否开启日志备份</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ExpectedNextBackupPeriod <p>预计下次备份时间</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $FullRetentionPeriod <p>全备保留时间</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $ID <p>策略ID</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $InstanceId <p>实例ID</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $LogRetentionPeriod <p>日志保留天数</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $PeriodTime <p>一周的哪几天进行备份</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Region <p>地域</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $PeriodType <p>备份周期类型  0:Weekly</p>
注意：此字段可能返回 null，表示取不到有效值。
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

        if (array_key_exists("DBType",$param) and $param["DBType"] !== null) {
            $this->DBType = $param["DBType"];
        }

        if (array_key_exists("DBVersion",$param) and $param["DBVersion"] !== null) {
            $this->DBVersion = $param["DBVersion"];
        }

        if (array_key_exists("EnableFull",$param) and $param["EnableFull"] !== null) {
            $this->EnableFull = $param["EnableFull"];
        }

        if (array_key_exists("EnableLog",$param) and $param["EnableLog"] !== null) {
            $this->EnableLog = $param["EnableLog"];
        }

        if (array_key_exists("ExpectedNextBackupPeriod",$param) and $param["ExpectedNextBackupPeriod"] !== null) {
            $this->ExpectedNextBackupPeriod = $param["ExpectedNextBackupPeriod"];
        }

        if (array_key_exists("FullRetentionPeriod",$param) and $param["FullRetentionPeriod"] !== null) {
            $this->FullRetentionPeriod = $param["FullRetentionPeriod"];
        }

        if (array_key_exists("ID",$param) and $param["ID"] !== null) {
            $this->ID = $param["ID"];
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

        if (array_key_exists("Region",$param) and $param["Region"] !== null) {
            $this->Region = $param["Region"];
        }

        if (array_key_exists("PeriodType",$param) and $param["PeriodType"] !== null) {
            $this->PeriodType = $param["PeriodType"];
        }
    }
}
