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
namespace TencentCloud\Cdb\V20170320\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 通用时间窗
 *
 * @method string getMonday() 获取周一的时间窗，格式如： 02:00-06:00
 * @method void setMonday(string $Monday) 设置周一的时间窗，格式如： 02:00-06:00
 * @method string getTuesday() 获取周二的时间窗，格式如： 02:00-06:00
 * @method void setTuesday(string $Tuesday) 设置周二的时间窗，格式如： 02:00-06:00
 * @method string getWednesday() 获取周三的时间窗，格式如： 02:00-06:00
 * @method void setWednesday(string $Wednesday) 设置周三的时间窗，格式如： 02:00-06:00
 * @method string getThursday() 获取周四的时间窗，格式如： 02:00-06:00
 * @method void setThursday(string $Thursday) 设置周四的时间窗，格式如： 02:00-06:00
 * @method string getFriday() 获取周五的时间窗，格式如： 02:00-06:00
 * @method void setFriday(string $Friday) 设置周五的时间窗，格式如： 02:00-06:00
 * @method string getSaturday() 获取周六的时间窗，格式如： 02:00-06:00
 * @method void setSaturday(string $Saturday) 设置周六的时间窗，格式如： 02:00-06:00
 * @method string getSunday() 获取周日的时间窗，格式如： 02:00-06:00
 * @method void setSunday(string $Sunday) 设置周日的时间窗，格式如： 02:00-06:00
 * @method string getBackupPeriodStrategy() 获取常规备份保留策略，weekly-按周备份，monthly-按月备份，默认为weekly
 * @method void setBackupPeriodStrategy(string $BackupPeriodStrategy) 设置常规备份保留策略，weekly-按周备份，monthly-按月备份，默认为weekly
 * @method array getDays() 获取如果设置为按月备份，需填入每月具体备份日期，相邻备份天数不得超过两天。例[1,4,7,9,11,14,17,19,22,25,28,30,31]
 * @method void setDays(array $Days) 设置如果设置为按月备份，需填入每月具体备份日期，相邻备份天数不得超过两天。例[1,4,7,9,11,14,17,19,22,25,28,30,31]
 * @method string getBackupPeriodTime() 获取月度备份时间窗，BackupPeriodStrategy为monthly时必填。格式如： 02:00-06:00
 * @method void setBackupPeriodTime(string $BackupPeriodTime) 设置月度备份时间窗，BackupPeriodStrategy为monthly时必填。格式如： 02:00-06:00
 */
class CommonTimeWindow extends AbstractModel
{
    /**
     * @var string 周一的时间窗，格式如： 02:00-06:00
     */
    public $Monday;

    /**
     * @var string 周二的时间窗，格式如： 02:00-06:00
     */
    public $Tuesday;

    /**
     * @var string 周三的时间窗，格式如： 02:00-06:00
     */
    public $Wednesday;

    /**
     * @var string 周四的时间窗，格式如： 02:00-06:00
     */
    public $Thursday;

    /**
     * @var string 周五的时间窗，格式如： 02:00-06:00
     */
    public $Friday;

    /**
     * @var string 周六的时间窗，格式如： 02:00-06:00
     */
    public $Saturday;

    /**
     * @var string 周日的时间窗，格式如： 02:00-06:00
     */
    public $Sunday;

    /**
     * @var string 常规备份保留策略，weekly-按周备份，monthly-按月备份，默认为weekly
     */
    public $BackupPeriodStrategy;

    /**
     * @var array 如果设置为按月备份，需填入每月具体备份日期，相邻备份天数不得超过两天。例[1,4,7,9,11,14,17,19,22,25,28,30,31]
     */
    public $Days;

    /**
     * @var string 月度备份时间窗，BackupPeriodStrategy为monthly时必填。格式如： 02:00-06:00
     */
    public $BackupPeriodTime;

    /**
     * @param string $Monday 周一的时间窗，格式如： 02:00-06:00
     * @param string $Tuesday 周二的时间窗，格式如： 02:00-06:00
     * @param string $Wednesday 周三的时间窗，格式如： 02:00-06:00
     * @param string $Thursday 周四的时间窗，格式如： 02:00-06:00
     * @param string $Friday 周五的时间窗，格式如： 02:00-06:00
     * @param string $Saturday 周六的时间窗，格式如： 02:00-06:00
     * @param string $Sunday 周日的时间窗，格式如： 02:00-06:00
     * @param string $BackupPeriodStrategy 常规备份保留策略，weekly-按周备份，monthly-按月备份，默认为weekly
     * @param array $Days 如果设置为按月备份，需填入每月具体备份日期，相邻备份天数不得超过两天。例[1,4,7,9,11,14,17,19,22,25,28,30,31]
     * @param string $BackupPeriodTime 月度备份时间窗，BackupPeriodStrategy为monthly时必填。格式如： 02:00-06:00
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
        if (array_key_exists("Monday",$param) and $param["Monday"] !== null) {
            $this->Monday = $param["Monday"];
        }

        if (array_key_exists("Tuesday",$param) and $param["Tuesday"] !== null) {
            $this->Tuesday = $param["Tuesday"];
        }

        if (array_key_exists("Wednesday",$param) and $param["Wednesday"] !== null) {
            $this->Wednesday = $param["Wednesday"];
        }

        if (array_key_exists("Thursday",$param) and $param["Thursday"] !== null) {
            $this->Thursday = $param["Thursday"];
        }

        if (array_key_exists("Friday",$param) and $param["Friday"] !== null) {
            $this->Friday = $param["Friday"];
        }

        if (array_key_exists("Saturday",$param) and $param["Saturday"] !== null) {
            $this->Saturday = $param["Saturday"];
        }

        if (array_key_exists("Sunday",$param) and $param["Sunday"] !== null) {
            $this->Sunday = $param["Sunday"];
        }

        if (array_key_exists("BackupPeriodStrategy",$param) and $param["BackupPeriodStrategy"] !== null) {
            $this->BackupPeriodStrategy = $param["BackupPeriodStrategy"];
        }

        if (array_key_exists("Days",$param) and $param["Days"] !== null) {
            $this->Days = $param["Days"];
        }

        if (array_key_exists("BackupPeriodTime",$param) and $param["BackupPeriodTime"] !== null) {
            $this->BackupPeriodTime = $param["BackupPeriodTime"];
        }
    }
}
