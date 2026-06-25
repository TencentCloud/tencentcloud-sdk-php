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
 * @method string getBackupPeriod() 获取<p>备份周期</p>
 * @method void setBackupPeriod(string $BackupPeriod) 设置<p>备份周期</p>
 * @method integer getBaseBackupRetentionPeriod() 获取<p>数据备份保留时长。单位：天</p>
 * @method void setBaseBackupRetentionPeriod(integer $BaseBackupRetentionPeriod) 设置<p>数据备份保留时长。单位：天</p>
 * @method string getMinBackupStartTime() 获取<p>开始备份的最早时间</p>
 * @method void setMinBackupStartTime(string $MinBackupStartTime) 设置<p>开始备份的最早时间</p>
 * @method string getMaxBackupStartTime() 获取<p>开始备份的最晚时间</p>
 * @method void setMaxBackupStartTime(string $MaxBackupStartTime) 设置<p>开始备份的最晚时间</p>
 * @method string getBackupMethod() 获取<p>备份类型</p><p>枚举值：</p><ul><li>physical： 物理备份</li><li>logical： 逻辑备份</li><li>snapshot： 快照备份</li></ul>
 * @method void setBackupMethod(string $BackupMethod) 设置<p>备份类型</p><p>枚举值：</p><ul><li>physical： 物理备份</li><li>logical： 逻辑备份</li><li>snapshot： 快照备份</li></ul>
 * @method string getPlanId() 获取<p>备份计划ID</p>
 * @method void setPlanId(string $PlanId) 设置<p>备份计划ID</p>
 * @method string getPlanName() 获取<p>备份计划自定义名称。</p>
 * @method void setPlanName(string $PlanName) 设置<p>备份计划自定义名称。</p>
 * @method integer getLogBackupRetentionPeriod() 获取<p>日志备份保留时长。单位：天</p>
 * @method void setLogBackupRetentionPeriod(integer $LogBackupRetentionPeriod) 设置<p>日志备份保留时长。单位：天</p>
 * @method string getCreatedTime() 获取<p>创建时间。</p>
 * @method void setCreatedTime(string $CreatedTime) 设置<p>创建时间。</p>
 * @method string getUpdatedTime() 获取<p>最近一次的修改时间。</p>
 * @method void setUpdatedTime(string $UpdatedTime) 设置<p>最近一次的修改时间。</p>
 * @method string getPlanType() 获取<p>备份计划类型。系统默认创建的为default，自定义的为custom。</p>
 * @method void setPlanType(string $PlanType) 设置<p>备份计划类型。系统默认创建的为default，自定义的为custom。</p>
 * @method string getBackupPeriodType() 获取<p>备份周期类型。当前支持week、month。</p>
 * @method void setBackupPeriodType(string $BackupPeriodType) 设置<p>备份周期类型。当前支持week、month。</p>
 */
class BackupPlan extends AbstractModel
{
    /**
     * @var string <p>备份周期</p>
     */
    public $BackupPeriod;

    /**
     * @var integer <p>数据备份保留时长。单位：天</p>
     */
    public $BaseBackupRetentionPeriod;

    /**
     * @var string <p>开始备份的最早时间</p>
     */
    public $MinBackupStartTime;

    /**
     * @var string <p>开始备份的最晚时间</p>
     */
    public $MaxBackupStartTime;

    /**
     * @var string <p>备份类型</p><p>枚举值：</p><ul><li>physical： 物理备份</li><li>logical： 逻辑备份</li><li>snapshot： 快照备份</li></ul>
     */
    public $BackupMethod;

    /**
     * @var string <p>备份计划ID</p>
     */
    public $PlanId;

    /**
     * @var string <p>备份计划自定义名称。</p>
     */
    public $PlanName;

    /**
     * @var integer <p>日志备份保留时长。单位：天</p>
     */
    public $LogBackupRetentionPeriod;

    /**
     * @var string <p>创建时间。</p>
     */
    public $CreatedTime;

    /**
     * @var string <p>最近一次的修改时间。</p>
     */
    public $UpdatedTime;

    /**
     * @var string <p>备份计划类型。系统默认创建的为default，自定义的为custom。</p>
     */
    public $PlanType;

    /**
     * @var string <p>备份周期类型。当前支持week、month。</p>
     */
    public $BackupPeriodType;

    /**
     * @param string $BackupPeriod <p>备份周期</p>
     * @param integer $BaseBackupRetentionPeriod <p>数据备份保留时长。单位：天</p>
     * @param string $MinBackupStartTime <p>开始备份的最早时间</p>
     * @param string $MaxBackupStartTime <p>开始备份的最晚时间</p>
     * @param string $BackupMethod <p>备份类型</p><p>枚举值：</p><ul><li>physical： 物理备份</li><li>logical： 逻辑备份</li><li>snapshot： 快照备份</li></ul>
     * @param string $PlanId <p>备份计划ID</p>
     * @param string $PlanName <p>备份计划自定义名称。</p>
     * @param integer $LogBackupRetentionPeriod <p>日志备份保留时长。单位：天</p>
     * @param string $CreatedTime <p>创建时间。</p>
     * @param string $UpdatedTime <p>最近一次的修改时间。</p>
     * @param string $PlanType <p>备份计划类型。系统默认创建的为default，自定义的为custom。</p>
     * @param string $BackupPeriodType <p>备份周期类型。当前支持week、month。</p>
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

        if (array_key_exists("BackupMethod",$param) and $param["BackupMethod"] !== null) {
            $this->BackupMethod = $param["BackupMethod"];
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
