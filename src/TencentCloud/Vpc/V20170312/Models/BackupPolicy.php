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
namespace TencentCloud\Vpc\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 时间备份策略详情
 *
 * @method string getBackupDay() 获取备份周期时间，取值为monday, tuesday, wednesday, thursday, friday, saturday, sunday。
 * @method void setBackupDay(string $BackupDay) 设置备份周期时间，取值为monday, tuesday, wednesday, thursday, friday, saturday, sunday。
 * @method string getBackupTime() 获取备份时间点，格式：HH:mm:ss。
 * @method void setBackupTime(string $BackupTime) 设置备份时间点，格式：HH:mm:ss。
 */
class BackupPolicy extends AbstractModel
{
    /**
     * @var string 备份周期时间，取值为monday, tuesday, wednesday, thursday, friday, saturday, sunday。
     */
    public $BackupDay;

    /**
     * @var string 备份时间点，格式：HH:mm:ss。
     */
    public $BackupTime;

    /**
     * @param string $BackupDay 备份周期时间，取值为monday, tuesday, wednesday, thursday, friday, saturday, sunday。
     * @param string $BackupTime 备份时间点，格式：HH:mm:ss。
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
        if (array_key_exists("BackupDay",$param) and $param["BackupDay"] !== null) {
            $this->BackupDay = $param["BackupDay"];
        }

        if (array_key_exists("BackupTime",$param) and $param["BackupTime"] !== null) {
            $this->BackupTime = $param["BackupTime"];
        }
    }
}
