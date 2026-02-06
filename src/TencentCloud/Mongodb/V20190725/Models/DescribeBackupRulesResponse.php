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
 * DescribeBackupRules返回参数结构体
 *
 * @method integer getBackupSaveTime() 获取备份数据保留期限。单位为：天。
 * @method void setBackupSaveTime(integer $BackupSaveTime) 设置备份数据保留期限。单位为：天。
 * @method integer getBackupFrequency() 获取备份频率。备份时间间隔，单位小时。取值12，24
 * @method void setBackupFrequency(integer $BackupFrequency) 设置备份频率。备份时间间隔，单位小时。取值12，24
 * @method integer getBackupTime() 获取自动备份开始时间。
 * @method void setBackupTime(integer $BackupTime) 设置自动备份开始时间。
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
 * @method string getActiveWeekdays() 获取周几备份，0-6，逗号分割
 * @method void setActiveWeekdays(string $ActiveWeekdays) 设置周几备份，0-6，逗号分割
 * @method string getLongTermInterval() 获取长期备份周期。weekly-按周，monthly-按月，空不开启。
 * @method void setLongTermInterval(string $LongTermInterval) 设置长期备份周期。weekly-按周，monthly-按月，空不开启。
 * @method string getLongTermActiveDays() 获取长期备份的日期，周0-6，月1-31
 * @method void setLongTermActiveDays(string $LongTermActiveDays) 设置长期备份的日期，周0-6，月1-31
 * @method integer getLongTermExpiredDays() 获取长期备份保留时间
 * @method void setLongTermExpiredDays(integer $LongTermExpiredDays) 设置长期备份保留时间
 * @method integer getOplogExpiredDays() 获取增量备份保留时间
 * @method void setOplogExpiredDays(integer $OplogExpiredDays) 设置增量备份保留时间
 * @method integer getBackupVersion() 获取备份版本号。0-旧备份方式，1-高级备份
 * @method void setBackupVersion(integer $BackupVersion) 设置备份版本号。0-旧备份方式，1-高级备份
 * @method BackupTotalSize getBackupTotalSize() 获取备份大小
 * @method void setBackupTotalSize(BackupTotalSize $BackupTotalSize) 设置备份大小
 * @method integer getAlertThreshold() 获取告警额度
 * @method void setAlertThreshold(integer $AlertThreshold) 设置告警额度
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeBackupRulesResponse extends AbstractModel
{
    /**
     * @var integer 备份数据保留期限。单位为：天。
     */
    public $BackupSaveTime;

    /**
     * @var integer 备份频率。备份时间间隔，单位小时。取值12，24
     */
    public $BackupFrequency;

    /**
     * @var integer 自动备份开始时间。
     */
    public $BackupTime;

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
     * @var string 周几备份，0-6，逗号分割
     */
    public $ActiveWeekdays;

    /**
     * @var string 长期备份周期。weekly-按周，monthly-按月，空不开启。
     */
    public $LongTermInterval;

    /**
     * @var string 长期备份的日期，周0-6，月1-31
     */
    public $LongTermActiveDays;

    /**
     * @var integer 长期备份保留时间
     */
    public $LongTermExpiredDays;

    /**
     * @var integer 增量备份保留时间
     */
    public $OplogExpiredDays;

    /**
     * @var integer 备份版本号。0-旧备份方式，1-高级备份
     */
    public $BackupVersion;

    /**
     * @var BackupTotalSize 备份大小
     */
    public $BackupTotalSize;

    /**
     * @var integer 告警额度
     */
    public $AlertThreshold;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param integer $BackupSaveTime 备份数据保留期限。单位为：天。
     * @param integer $BackupFrequency 备份频率。备份时间间隔，单位小时。取值12，24
     * @param integer $BackupTime 自动备份开始时间。
     * @param integer $BackupMethod 备份方式。
- 0：逻辑备份。
- 1：物理备份。
- 3：快照备份。
**说明**:
1. 通用版实例支持逻辑备份与物理备份。云盘版实例支持物理备份与快照备份，暂不支持逻辑备份。
2. 实例开通存储加密，则备份方式不能为物理备份。
     * @param string $ActiveWeekdays 周几备份，0-6，逗号分割
     * @param string $LongTermInterval 长期备份周期。weekly-按周，monthly-按月，空不开启。
     * @param string $LongTermActiveDays 长期备份的日期，周0-6，月1-31
     * @param integer $LongTermExpiredDays 长期备份保留时间
     * @param integer $OplogExpiredDays 增量备份保留时间
     * @param integer $BackupVersion 备份版本号。0-旧备份方式，1-高级备份
     * @param BackupTotalSize $BackupTotalSize 备份大小
     * @param integer $AlertThreshold 告警额度
     * @param string $RequestId 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
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
        if (array_key_exists("BackupSaveTime",$param) and $param["BackupSaveTime"] !== null) {
            $this->BackupSaveTime = $param["BackupSaveTime"];
        }

        if (array_key_exists("BackupFrequency",$param) and $param["BackupFrequency"] !== null) {
            $this->BackupFrequency = $param["BackupFrequency"];
        }

        if (array_key_exists("BackupTime",$param) and $param["BackupTime"] !== null) {
            $this->BackupTime = $param["BackupTime"];
        }

        if (array_key_exists("BackupMethod",$param) and $param["BackupMethod"] !== null) {
            $this->BackupMethod = $param["BackupMethod"];
        }

        if (array_key_exists("ActiveWeekdays",$param) and $param["ActiveWeekdays"] !== null) {
            $this->ActiveWeekdays = $param["ActiveWeekdays"];
        }

        if (array_key_exists("LongTermInterval",$param) and $param["LongTermInterval"] !== null) {
            $this->LongTermInterval = $param["LongTermInterval"];
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

        if (array_key_exists("BackupTotalSize",$param) and $param["BackupTotalSize"] !== null) {
            $this->BackupTotalSize = new BackupTotalSize();
            $this->BackupTotalSize->deserialize($param["BackupTotalSize"]);
        }

        if (array_key_exists("AlertThreshold",$param) and $param["AlertThreshold"] !== null) {
            $this->AlertThreshold = $param["AlertThreshold"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
