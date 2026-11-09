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
namespace TencentCloud\Redis\V20180412\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyAutoBackupConfig返回参数结构体
 *
 * @method integer getAutoBackupType() 获取<p>自动备份类型。目前仅能配置为：1 ，指定时备份。</p>
 * @method void setAutoBackupType(integer $AutoBackupType) 设置<p>自动备份类型。目前仅能配置为：1 ，指定时备份。</p>
 * @method array getWeekDays() 获取<p>自动备份周期。取值为：Monday，Tuesday，Wednesday，Thursday，Friday，Saturday，Sunday。</p>
 * @method void setWeekDays(array $WeekDays) 设置<p>自动备份周期。取值为：Monday，Tuesday，Wednesday，Thursday，Friday，Saturday，Sunday。</p>
 * @method string getTimePeriod() 获取<p>自动定时备份时间段。格式如：00:00-01:00, 01:00-02:00...... 23:00-00:00。</p>
 * @method void setTimePeriod(string $TimePeriod) 设置<p>自动定时备份时间段。格式如：00:00-01:00, 01:00-02:00...... 23:00-00:00。</p>
 * @method integer getBackupStorageDays() 获取<p>全量备份文件保存天数,单位：天。</p>
 * @method void setBackupStorageDays(integer $BackupStorageDays) 设置<p>全量备份文件保存天数,单位：天。</p>
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class ModifyAutoBackupConfigResponse extends AbstractModel
{
    /**
     * @var integer <p>自动备份类型。目前仅能配置为：1 ，指定时备份。</p>
     */
    public $AutoBackupType;

    /**
     * @var array <p>自动备份周期。取值为：Monday，Tuesday，Wednesday，Thursday，Friday，Saturday，Sunday。</p>
     */
    public $WeekDays;

    /**
     * @var string <p>自动定时备份时间段。格式如：00:00-01:00, 01:00-02:00...... 23:00-00:00。</p>
     */
    public $TimePeriod;

    /**
     * @var integer <p>全量备份文件保存天数,单位：天。</p>
     */
    public $BackupStorageDays;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param integer $AutoBackupType <p>自动备份类型。目前仅能配置为：1 ，指定时备份。</p>
     * @param array $WeekDays <p>自动备份周期。取值为：Monday，Tuesday，Wednesday，Thursday，Friday，Saturday，Sunday。</p>
     * @param string $TimePeriod <p>自动定时备份时间段。格式如：00:00-01:00, 01:00-02:00...... 23:00-00:00。</p>
     * @param integer $BackupStorageDays <p>全量备份文件保存天数,单位：天。</p>
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

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
