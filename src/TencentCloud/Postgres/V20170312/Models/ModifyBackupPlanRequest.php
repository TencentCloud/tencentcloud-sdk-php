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
 * ModifyBackupPlan请求参数结构体
 *
 * @method string getDBInstanceId() 获取实例ID。可通过[DescribeDBInstances](https://cloud.tencent.com/document/api/409/16773)接口获取
 * @method void setDBInstanceId(string $DBInstanceId) 设置实例ID。可通过[DescribeDBInstances](https://cloud.tencent.com/document/api/409/16773)接口获取
 * @method string getMinBackupStartTime() 获取实例最早开始备份时间
 * @method void setMinBackupStartTime(string $MinBackupStartTime) 设置实例最早开始备份时间
 * @method string getMaxBackupStartTime() 获取实例最晚开始备份时间
 * @method void setMaxBackupStartTime(string $MaxBackupStartTime) 设置实例最晚开始备份时间
 * @method integer getBaseBackupRetentionPeriod() 获取实例备份保留时长，取值范围为7-1830，单位是天
 * @method void setBaseBackupRetentionPeriod(integer $BaseBackupRetentionPeriod) 设置实例备份保留时长，取值范围为7-1830，单位是天
 * @method array getBackupPeriod() 获取实例备份周期，若是星期维度，格式为小写星期英文单词，且至少设置两天备份；若是按月维度，格式为数字字符，如["1","2"]。
 * @method void setBackupPeriod(array $BackupPeriod) 设置实例备份周期，若是星期维度，格式为小写星期英文单词，且至少设置两天备份；若是按月维度，格式为数字字符，如["1","2"]。
 * @method integer getLogBackupRetentionPeriod() 获取实例日志备份保留时长，取值范围为7-1830，单位是天
 * @method void setLogBackupRetentionPeriod(integer $LogBackupRetentionPeriod) 设置实例日志备份保留时长，取值范围为7-1830，单位是天
 * @method string getPlanId() 获取备份计划ID，用于指明要修改哪个备份计划，不传则是修改默认备份计划。
 * @method void setPlanId(string $PlanId) 设置备份计划ID，用于指明要修改哪个备份计划，不传则是修改默认备份计划。
 * @method string getPlanName() 获取要修改的备份计划名称。
 * @method void setPlanName(string $PlanName) 设置要修改的备份计划名称。
 */
class ModifyBackupPlanRequest extends AbstractModel
{
    /**
     * @var string 实例ID。可通过[DescribeDBInstances](https://cloud.tencent.com/document/api/409/16773)接口获取
     */
    public $DBInstanceId;

    /**
     * @var string 实例最早开始备份时间
     */
    public $MinBackupStartTime;

    /**
     * @var string 实例最晚开始备份时间
     */
    public $MaxBackupStartTime;

    /**
     * @var integer 实例备份保留时长，取值范围为7-1830，单位是天
     */
    public $BaseBackupRetentionPeriod;

    /**
     * @var array 实例备份周期，若是星期维度，格式为小写星期英文单词，且至少设置两天备份；若是按月维度，格式为数字字符，如["1","2"]。
     */
    public $BackupPeriod;

    /**
     * @var integer 实例日志备份保留时长，取值范围为7-1830，单位是天
     */
    public $LogBackupRetentionPeriod;

    /**
     * @var string 备份计划ID，用于指明要修改哪个备份计划，不传则是修改默认备份计划。
     */
    public $PlanId;

    /**
     * @var string 要修改的备份计划名称。
     */
    public $PlanName;

    /**
     * @param string $DBInstanceId 实例ID。可通过[DescribeDBInstances](https://cloud.tencent.com/document/api/409/16773)接口获取
     * @param string $MinBackupStartTime 实例最早开始备份时间
     * @param string $MaxBackupStartTime 实例最晚开始备份时间
     * @param integer $BaseBackupRetentionPeriod 实例备份保留时长，取值范围为7-1830，单位是天
     * @param array $BackupPeriod 实例备份周期，若是星期维度，格式为小写星期英文单词，且至少设置两天备份；若是按月维度，格式为数字字符，如["1","2"]。
     * @param integer $LogBackupRetentionPeriod 实例日志备份保留时长，取值范围为7-1830，单位是天
     * @param string $PlanId 备份计划ID，用于指明要修改哪个备份计划，不传则是修改默认备份计划。
     * @param string $PlanName 要修改的备份计划名称。
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

        if (array_key_exists("MinBackupStartTime",$param) and $param["MinBackupStartTime"] !== null) {
            $this->MinBackupStartTime = $param["MinBackupStartTime"];
        }

        if (array_key_exists("MaxBackupStartTime",$param) and $param["MaxBackupStartTime"] !== null) {
            $this->MaxBackupStartTime = $param["MaxBackupStartTime"];
        }

        if (array_key_exists("BaseBackupRetentionPeriod",$param) and $param["BaseBackupRetentionPeriod"] !== null) {
            $this->BaseBackupRetentionPeriod = $param["BaseBackupRetentionPeriod"];
        }

        if (array_key_exists("BackupPeriod",$param) and $param["BackupPeriod"] !== null) {
            $this->BackupPeriod = $param["BackupPeriod"];
        }

        if (array_key_exists("LogBackupRetentionPeriod",$param) and $param["LogBackupRetentionPeriod"] !== null) {
            $this->LogBackupRetentionPeriod = $param["LogBackupRetentionPeriod"];
        }

        if (array_key_exists("PlanId",$param) and $param["PlanId"] !== null) {
            $this->PlanId = $param["PlanId"];
        }

        if (array_key_exists("PlanName",$param) and $param["PlanName"] !== null) {
            $this->PlanName = $param["PlanName"];
        }
    }
}
