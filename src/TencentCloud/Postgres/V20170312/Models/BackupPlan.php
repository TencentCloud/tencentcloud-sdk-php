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
 * 备份计划
 *
 * @method string getBackupPeriod() 获取备份周期
 * @method void setBackupPeriod(string $BackupPeriod) 设置备份周期
 * @method integer getBaseBackupRetentionPeriod() 获取数据备份保留时长。单位：天
 * @method void setBaseBackupRetentionPeriod(integer $BaseBackupRetentionPeriod) 设置数据备份保留时长。单位：天
 * @method string getMinBackupStartTime() 获取开始备份的最早时间
 * @method void setMinBackupStartTime(string $MinBackupStartTime) 设置开始备份的最早时间
 * @method string getMaxBackupStartTime() 获取开始备份的最晚时间
 * @method void setMaxBackupStartTime(string $MaxBackupStartTime) 设置开始备份的最晚时间
 * @method string getPlanId() 获取备份计划ID
 * @method void setPlanId(string $PlanId) 设置备份计划ID
 * @method string getPlanName() 获取备份计划自定义名称。
 * @method void setPlanName(string $PlanName) 设置备份计划自定义名称。
 * @method integer getLogBackupRetentionPeriod() 获取日志备份保留时长。单位：天
 * @method void setLogBackupRetentionPeriod(integer $LogBackupRetentionPeriod) 设置日志备份保留时长。单位：天
 * @method string getCreatedTime() 获取创建时间。
 * @method void setCreatedTime(string $CreatedTime) 设置创建时间。
 * @method string getUpdatedTime() 获取最近一次的修改时间。
 * @method void setUpdatedTime(string $UpdatedTime) 设置最近一次的修改时间。
 * @method string getPlanType() 获取备份计划类型。系统默认创建的为default，自定义的为custom。
 * @method void setPlanType(string $PlanType) 设置备份计划类型。系统默认创建的为default，自定义的为custom。
 * @method string getBackupPeriodType() 获取备份周期类型。当前支持week、month。
 * @method void setBackupPeriodType(string $BackupPeriodType) 设置备份周期类型。当前支持week、month。
 */
class BackupPlan extends AbstractModel
{
    /**
     * @var string 备份周期
     */
    public $BackupPeriod;

    /**
     * @var integer 数据备份保留时长。单位：天
     */
    public $BaseBackupRetentionPeriod;

    /**
     * @var string 开始备份的最早时间
     */
    public $MinBackupStartTime;

    /**
     * @var string 开始备份的最晚时间
     */
    public $MaxBackupStartTime;

    /**
     * @var string 备份计划ID
     */
    public $PlanId;

    /**
     * @var string 备份计划自定义名称。
     */
    public $PlanName;

    /**
     * @var integer 日志备份保留时长。单位：天
     */
    public $LogBackupRetentionPeriod;

    /**
     * @var string 创建时间。
     */
    public $CreatedTime;

    /**
     * @var string 最近一次的修改时间。
     */
    public $UpdatedTime;

    /**
     * @var string 备份计划类型。系统默认创建的为default，自定义的为custom。
     */
    public $PlanType;

    /**
     * @var string 备份周期类型。当前支持week、month。
     */
    public $BackupPeriodType;

    /**
     * @param string $BackupPeriod 备份周期
     * @param integer $BaseBackupRetentionPeriod 数据备份保留时长。单位：天
     * @param string $MinBackupStartTime 开始备份的最早时间
     * @param string $MaxBackupStartTime 开始备份的最晚时间
     * @param string $PlanId 备份计划ID
     * @param string $PlanName 备份计划自定义名称。
     * @param integer $LogBackupRetentionPeriod 日志备份保留时长。单位：天
     * @param string $CreatedTime 创建时间。
     * @param string $UpdatedTime 最近一次的修改时间。
     * @param string $PlanType 备份计划类型。系统默认创建的为default，自定义的为custom。
     * @param string $BackupPeriodType 备份周期类型。当前支持week、month。
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
        if (array_key_exists("BackupPeriod",$param) and $param["BackupPeriod"] !== null) {
            $this->BackupPeriod = $param["BackupPeriod"];
        }

        if (array_key_exists("BaseBackupRetentionPeriod",$param) and $param["BaseBackupRetentionPeriod"] !== null) {
            $this->BaseBackupRetentionPeriod = $param["BaseBackupRetentionPeriod"];
        }

        if (array_key_exists("MinBackupStartTime",$param) and $param["MinBackupStartTime"] !== null) {
            $this->MinBackupStartTime = $param["MinBackupStartTime"];
        }

        if (array_key_exists("MaxBackupStartTime",$param) and $param["MaxBackupStartTime"] !== null) {
            $this->MaxBackupStartTime = $param["MaxBackupStartTime"];
        }

        if (array_key_exists("PlanId",$param) and $param["PlanId"] !== null) {
            $this->PlanId = $param["PlanId"];
        }

        if (array_key_exists("PlanName",$param) and $param["PlanName"] !== null) {
            $this->PlanName = $param["PlanName"];
        }

        if (array_key_exists("LogBackupRetentionPeriod",$param) and $param["LogBackupRetentionPeriod"] !== null) {
            $this->LogBackupRetentionPeriod = $param["LogBackupRetentionPeriod"];
        }

        if (array_key_exists("CreatedTime",$param) and $param["CreatedTime"] !== null) {
            $this->CreatedTime = $param["CreatedTime"];
        }

        if (array_key_exists("UpdatedTime",$param) and $param["UpdatedTime"] !== null) {
            $this->UpdatedTime = $param["UpdatedTime"];
        }

        if (array_key_exists("PlanType",$param) and $param["PlanType"] !== null) {
            $this->PlanType = $param["PlanType"];
        }

        if (array_key_exists("BackupPeriodType",$param) and $param["BackupPeriodType"] !== null) {
            $this->BackupPeriodType = $param["BackupPeriodType"];
        }
    }
}
