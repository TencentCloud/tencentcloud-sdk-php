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
namespace TencentCloud\Redis\V20180412\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeAutoBackupConfig返回参数结构体
 *
 * @method integer getAutoBackupType() 获取该参数因兼容性问题暂时保留，请忽略。
 * @method void setAutoBackupType(integer $AutoBackupType) 设置该参数因兼容性问题暂时保留，请忽略。
 * @method array getWeekDays() 获取备份周期，默认为每天自动备份，Monday，Tuesday，Wednesday，Thursday，Friday，Saturday，Sunday。
 * @method void setWeekDays(array $WeekDays) 设置备份周期，默认为每天自动备份，Monday，Tuesday，Wednesday，Thursday，Friday，Saturday，Sunday。
 * @method string getTimePeriod() 获取备份任务发起时间段。
 * @method void setTimePeriod(string $TimePeriod) 设置备份任务发起时间段。
 * @method integer getBackupStorageDays() 获取全量备份文件保存天数。默认为7天。如需保存更多天数，请[提交工单](https://console.cloud.tencent.com/workorder/category)申请。
 * @method void setBackupStorageDays(integer $BackupStorageDays) 设置全量备份文件保存天数。默认为7天。如需保存更多天数，请[提交工单](https://console.cloud.tencent.com/workorder/category)申请。
 * @method integer getBinlogStorageDays() 获取该参数不再使用，请忽略。
 * @method void setBinlogStorageDays(integer $BinlogStorageDays) 设置该参数不再使用，请忽略。
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeAutoBackupConfigResponse extends AbstractModel
{
    /**
     * @var integer 该参数因兼容性问题暂时保留，请忽略。
     */
    public $AutoBackupType;

    /**
     * @var array 备份周期，默认为每天自动备份，Monday，Tuesday，Wednesday，Thursday，Friday，Saturday，Sunday。
     */
    public $WeekDays;

    /**
     * @var string 备份任务发起时间段。
     */
    public $TimePeriod;

    /**
     * @var integer 全量备份文件保存天数。默认为7天。如需保存更多天数，请[提交工单](https://console.cloud.tencent.com/workorder/category)申请。
     */
    public $BackupStorageDays;

    /**
     * @var integer 该参数不再使用，请忽略。
     */
    public $BinlogStorageDays;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param integer $AutoBackupType 该参数因兼容性问题暂时保留，请忽略。
     * @param array $WeekDays 备份周期，默认为每天自动备份，Monday，Tuesday，Wednesday，Thursday，Friday，Saturday，Sunday。
     * @param string $TimePeriod 备份任务发起时间段。
     * @param integer $BackupStorageDays 全量备份文件保存天数。默认为7天。如需保存更多天数，请[提交工单](https://console.cloud.tencent.com/workorder/category)申请。
     * @param integer $BinlogStorageDays 该参数不再使用，请忽略。
     * @param string $RequestId 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
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
        if (array_key_exists("AutoBackupType",$param) and $param["AutoBackupType"] !== null) {
            $this->AutoBackupType = $param["AutoBackupType"];
        }

        if (array_key_exists("WeekDays",$param) and $param["WeekDays"] !== null) {
            $this->WeekDays = $param["WeekDays"];
        }

        if (array_key_exists("TimePeriod",$param) and $param["TimePeriod"] !== null) {
            $this->TimePeriod = $param["TimePeriod"];
        }

        if (array_key_exists("BackupStorageDays",$param) and $param["BackupStorageDays"] !== null) {
            $this->BackupStorageDays = $param["BackupStorageDays"];
        }

        if (array_key_exists("BinlogStorageDays",$param) and $param["BinlogStorageDays"] !== null) {
            $this->BinlogStorageDays = $param["BinlogStorageDays"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
