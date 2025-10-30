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
 * CreateBackupPlan请求参数结构体
 *
 * @method string getDBInstanceId() 获取实例ID。可通过[DescribeDBInstances](https://cloud.tencent.com/document/api/409/16773)接口获取
 * @method void setDBInstanceId(string $DBInstanceId) 设置实例ID。可通过[DescribeDBInstances](https://cloud.tencent.com/document/api/409/16773)接口获取
 * @method string getPlanName() 获取备份计划名称。
 * @method void setPlanName(string $PlanName) 设置备份计划名称。
 * @method string getBackupPeriodType() 获取创建的备份计划类型，当前仅支持month创建。
 * @method void setBackupPeriodType(string $BackupPeriodType) 设置创建的备份计划类型，当前仅支持month创建。
 * @method array getBackupPeriod() 获取备份的日期，示例是每个月的2号开启备份。
 * @method void setBackupPeriod(array $BackupPeriod) 设置备份的日期，示例是每个月的2号开启备份。
 * @method string getMinBackupStartTime() 获取备份开始时间，不传跟随默认备份计划。
 * @method void setMinBackupStartTime(string $MinBackupStartTime) 设置备份开始时间，不传跟随默认备份计划。
 * @method string getMaxBackupStartTime() 获取备份结束时间，不传跟随默认计划。
 * @method void setMaxBackupStartTime(string $MaxBackupStartTime) 设置备份结束时间，不传跟随默认计划。
 * @method integer getBaseBackupRetentionPeriod() 获取数据备份保留时长，单位：天。取值范围为：[0,30000)
BackupPeriodType为week时默认是7,为month时默认为31。
 * @method void setBaseBackupRetentionPeriod(integer $BaseBackupRetentionPeriod) 设置数据备份保留时长，单位：天。取值范围为：[0,30000)
BackupPeriodType为week时默认是7,为month时默认为31。
 */
class CreateBackupPlanRequest extends AbstractModel
{
    /**
     * @var string 实例ID。可通过[DescribeDBInstances](https://cloud.tencent.com/document/api/409/16773)接口获取
     */
    public $DBInstanceId;

    /**
     * @var string 备份计划名称。
     */
    public $PlanName;

    /**
     * @var string 创建的备份计划类型，当前仅支持month创建。
     */
    public $BackupPeriodType;

    /**
     * @var array 备份的日期，示例是每个月的2号开启备份。
     */
    public $BackupPeriod;

    /**
     * @var string 备份开始时间，不传跟随默认备份计划。
     */
    public $MinBackupStartTime;

    /**
     * @var string 备份结束时间，不传跟随默认计划。
     */
    public $MaxBackupStartTime;

    /**
     * @var integer 数据备份保留时长，单位：天。取值范围为：[0,30000)
BackupPeriodType为week时默认是7,为month时默认为31。
     */
    public $BaseBackupRetentionPeriod;

    /**
     * @param string $DBInstanceId 实例ID。可通过[DescribeDBInstances](https://cloud.tencent.com/document/api/409/16773)接口获取
     * @param string $PlanName 备份计划名称。
     * @param string $BackupPeriodType 创建的备份计划类型，当前仅支持month创建。
     * @param array $BackupPeriod 备份的日期，示例是每个月的2号开启备份。
     * @param string $MinBackupStartTime 备份开始时间，不传跟随默认备份计划。
     * @param string $MaxBackupStartTime 备份结束时间，不传跟随默认计划。
     * @param integer $BaseBackupRetentionPeriod 数据备份保留时长，单位：天。取值范围为：[0,30000)
BackupPeriodType为week时默认是7,为month时默认为31。
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

        if (array_key_exists("PlanName",$param) and $param["PlanName"] !== null) {
            $this->PlanName = $param["PlanName"];
        }

        if (array_key_exists("BackupPeriodType",$param) and $param["BackupPeriodType"] !== null) {
            $this->BackupPeriodType = $param["BackupPeriodType"];
        }

        if (array_key_exists("BackupPeriod",$param) and $param["BackupPeriod"] !== null) {
            $this->BackupPeriod = $param["BackupPeriod"];
        }

        if (array_key_exists("MinBackupStartTime",$param) and $param["MinBackupStartTime"] !== null) {
            $this->MinBackupStartTime = $param["MinBackupStartTime"];
        }

        if (array_key_exists("MaxBackupStartTime",$param) and $param["MaxBackupStartTime"] !== null) {
            $this->MaxBackupStartTime = $param["MaxBackupStartTime"];
        }

        if (array_key_exists("BaseBackupRetentionPeriod",$param) and $param["BaseBackupRetentionPeriod"] !== null) {
            $this->BaseBackupRetentionPeriod = $param["BaseBackupRetentionPeriod"];
        }
    }
}
