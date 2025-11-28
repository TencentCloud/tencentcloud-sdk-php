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
namespace TencentCloud\Mongodb\V20190725\Models;
use TencentCloud\Common\AbstractModel;

/**
 * SetBackupRules请求参数结构体
 *
 * @method string getInstanceId() 获取实例id，例如：cmgo-p8vn****。请登录 [MongoDB 控制台](https://console.cloud.tencent.com/mongodb)在实例列表复制实例 ID。
 * @method void setInstanceId(string $InstanceId) 设置实例id，例如：cmgo-p8vn****。请登录 [MongoDB 控制台](https://console.cloud.tencent.com/mongodb)在实例列表复制实例 ID。
 * @method integer getBackupMethod() 获取备份方式。
- 0：逻辑备份。
- 1：物理备份。
- 3：快照备份。
**说明**:
1. 通用版实例支持逻辑备份与物理备份。云盘版实例支持物理备份与快照备份，暂不支持逻辑备份。
2. 实例开通存储加密，则备份方式不能为物理备份。
 * @method void setBackupMethod(integer $BackupMethod) 设置备份方式。
- 0：逻辑备份。
- 1：物理备份。
- 3：快照备份。
**说明**:
1. 通用版实例支持逻辑备份与物理备份。云盘版实例支持物理备份与快照备份，暂不支持逻辑备份。
2. 实例开通存储加密，则备份方式不能为物理备份。
 * @method integer getBackupTime() 获取设置自动备份开始时间。取值范围为：[0,23]，例如：该参数设置为2，表示02:00开始备份。
 * @method void setBackupTime(integer $BackupTime) 设置设置自动备份开始时间。取值范围为：[0,23]，例如：该参数设置为2，表示02:00开始备份。
 * @method integer getBackupFrequency() 获取自动备份频率，内部展示，默认取值为24h。
 * @method void setBackupFrequency(integer $BackupFrequency) 设置自动备份频率，内部展示，默认取值为24h。
 * @method boolean getNotify() 获取设置自动备份发生错误时，是否发送失败告警。
- true：发送。
- false：不发送。
 * @method void setNotify(boolean $Notify) 设置设置自动备份发生错误时，是否发送失败告警。
- true：发送。
- false：不发送。
 * @method integer getBackupRetentionPeriod() 获取指定备份数据保存天数。默认为 7 天，支持设置为7、30、90、180、365。
 * @method void setBackupRetentionPeriod(integer $BackupRetentionPeriod) 设置指定备份数据保存天数。默认为 7 天，支持设置为7、30、90、180、365。
 * @method string getActiveWeekdays() 获取周几备份，0-6，逗号分割。仅对高级备份生效
 * @method void setActiveWeekdays(string $ActiveWeekdays) 设置周几备份，0-6，逗号分割。仅对高级备份生效
 * @method string getLongTermUnit() 获取长期保留周期，周weekly，月monthly，空不开启
 * @method void setLongTermUnit(string $LongTermUnit) 设置长期保留周期，周weekly，月monthly，空不开启
 * @method string getLongTermActiveDays() 获取长期保留哪些天的，周0-6，月1-31，逗号分割
 * @method void setLongTermActiveDays(string $LongTermActiveDays) 设置长期保留哪些天的，周0-6，月1-31，逗号分割
 * @method integer getLongTermExpiredDays() 获取长期备份保留多少天
 * @method void setLongTermExpiredDays(integer $LongTermExpiredDays) 设置长期备份保留多少天
 * @method integer getOplogExpiredDays() 获取增量保留多少天
 * @method void setOplogExpiredDays(integer $OplogExpiredDays) 设置增量保留多少天
 * @method integer getBackupVersion() 获取备份版本。旧版本备份为0，高级备份为1。开启高级备份此值传1
 * @method void setBackupVersion(integer $BackupVersion) 设置备份版本。旧版本备份为0，高级备份为1。开启高级备份此值传1
 * @method integer getAlarmWaterLevel() 获取告警额度。50-300
 * @method void setAlarmWaterLevel(integer $AlarmWaterLevel) 设置告警额度。50-300
 */
class SetBackupRulesRequest extends AbstractModel
{
    /**
     * @var string 实例id，例如：cmgo-p8vn****。请登录 [MongoDB 控制台](https://console.cloud.tencent.com/mongodb)在实例列表复制实例 ID。
     */
    public $InstanceId;

    /**
     * @var integer 备份方式。
- 0：逻辑备份。
- 1：物理备份。
- 3：快照备份。
**说明**:
1. 通用版实例支持逻辑备份与物理备份。云盘版实例支持物理备份与快照备份，暂不支持逻辑备份。
2. 实例开通存储加密，则备份方式不能为物理备份。
     */
    public $BackupMethod;

    /**
     * @var integer 设置自动备份开始时间。取值范围为：[0,23]，例如：该参数设置为2，表示02:00开始备份。
     */
    public $BackupTime;

    /**
     * @var integer 自动备份频率，内部展示，默认取值为24h。
     */
    public $BackupFrequency;

    /**
     * @var boolean 设置自动备份发生错误时，是否发送失败告警。
- true：发送。
- false：不发送。
     */
    public $Notify;

    /**
     * @var integer 指定备份数据保存天数。默认为 7 天，支持设置为7、30、90、180、365。
     */
    public $BackupRetentionPeriod;

    /**
     * @var string 周几备份，0-6，逗号分割。仅对高级备份生效
     */
    public $ActiveWeekdays;

    /**
     * @var string 长期保留周期，周weekly，月monthly，空不开启
     */
    public $LongTermUnit;

    /**
     * @var string 长期保留哪些天的，周0-6，月1-31，逗号分割
     */
    public $LongTermActiveDays;

    /**
     * @var integer 长期备份保留多少天
     */
    public $LongTermExpiredDays;

    /**
     * @var integer 增量保留多少天
     */
    public $OplogExpiredDays;

    /**
     * @var integer 备份版本。旧版本备份为0，高级备份为1。开启高级备份此值传1
     */
    public $BackupVersion;

    /**
     * @var integer 告警额度。50-300
     */
    public $AlarmWaterLevel;

    /**
     * @param string $InstanceId 实例id，例如：cmgo-p8vn****。请登录 [MongoDB 控制台](https://console.cloud.tencent.com/mongodb)在实例列表复制实例 ID。
     * @param integer $BackupMethod 备份方式。
- 0：逻辑备份。
- 1：物理备份。
- 3：快照备份。
**说明**:
1. 通用版实例支持逻辑备份与物理备份。云盘版实例支持物理备份与快照备份，暂不支持逻辑备份。
2. 实例开通存储加密，则备份方式不能为物理备份。
     * @param integer $BackupTime 设置自动备份开始时间。取值范围为：[0,23]，例如：该参数设置为2，表示02:00开始备份。
     * @param integer $BackupFrequency 自动备份频率，内部展示，默认取值为24h。
     * @param boolean $Notify 设置自动备份发生错误时，是否发送失败告警。
- true：发送。
- false：不发送。
     * @param integer $BackupRetentionPeriod 指定备份数据保存天数。默认为 7 天，支持设置为7、30、90、180、365。
     * @param string $ActiveWeekdays 周几备份，0-6，逗号分割。仅对高级备份生效
     * @param string $LongTermUnit 长期保留周期，周weekly，月monthly，空不开启
     * @param string $LongTermActiveDays 长期保留哪些天的，周0-6，月1-31，逗号分割
     * @param integer $LongTermExpiredDays 长期备份保留多少天
     * @param integer $OplogExpiredDays 增量保留多少天
     * @param integer $BackupVersion 备份版本。旧版本备份为0，高级备份为1。开启高级备份此值传1
     * @param integer $AlarmWaterLevel 告警额度。50-300
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

        if (array_key_exists("BackupMethod",$param) and $param["BackupMethod"] !== null) {
            $this->BackupMethod = $param["BackupMethod"];
        }

        if (array_key_exists("BackupTime",$param) and $param["BackupTime"] !== null) {
            $this->BackupTime = $param["BackupTime"];
        }

        if (array_key_exists("BackupFrequency",$param) and $param["BackupFrequency"] !== null) {
            $this->BackupFrequency = $param["BackupFrequency"];
        }

        if (array_key_exists("Notify",$param) and $param["Notify"] !== null) {
            $this->Notify = $param["Notify"];
        }

        if (array_key_exists("BackupRetentionPeriod",$param) and $param["BackupRetentionPeriod"] !== null) {
            $this->BackupRetentionPeriod = $param["BackupRetentionPeriod"];
        }

        if (array_key_exists("ActiveWeekdays",$param) and $param["ActiveWeekdays"] !== null) {
            $this->ActiveWeekdays = $param["ActiveWeekdays"];
        }

        if (array_key_exists("LongTermUnit",$param) and $param["LongTermUnit"] !== null) {
            $this->LongTermUnit = $param["LongTermUnit"];
        }

        if (array_key_exists("LongTermActiveDays",$param) and $param["LongTermActiveDays"] !== null) {
            $this->LongTermActiveDays = $param["LongTermActiveDays"];
        }

        if (array_key_exists("LongTermExpiredDays",$param) and $param["LongTermExpiredDays"] !== null) {
            $this->LongTermExpiredDays = $param["LongTermExpiredDays"];
        }

        if (array_key_exists("OplogExpiredDays",$param) and $param["OplogExpiredDays"] !== null) {
            $this->OplogExpiredDays = $param["OplogExpiredDays"];
        }

        if (array_key_exists("BackupVersion",$param) and $param["BackupVersion"] !== null) {
            $this->BackupVersion = $param["BackupVersion"];
        }

        if (array_key_exists("AlarmWaterLevel",$param) and $param["AlarmWaterLevel"] !== null) {
            $this->AlarmWaterLevel = $param["AlarmWaterLevel"];
        }
    }
}
