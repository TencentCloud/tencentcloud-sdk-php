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
namespace TencentCloud\Postgres\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 备份计划
 *
 * @method string getBackupPeriod() 获取备份周期
 * @method void setBackupPeriod(string $BackupPeriod) 设置备份周期
 * @method integer getBaseBackupRetentionPeriod() 获取基础备份保留时长
 * @method void setBaseBackupRetentionPeriod(integer $BaseBackupRetentionPeriod) 设置基础备份保留时长
 * @method string getMinBackupStartTime() 获取开始备份的最早时间
 * @method void setMinBackupStartTime(string $MinBackupStartTime) 设置开始备份的最早时间
 * @method string getMaxBackupStartTime() 获取开始备份的最晚时间
 * @method void setMaxBackupStartTime(string $MaxBackupStartTime) 设置开始备份的最晚时间
 */
class BackupPlan extends AbstractModel
{
    /**
     * @var string 备份周期
     */
    public $BackupPeriod;

    /**
     * @var integer 基础备份保留时长
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
     * @param string $BackupPeriod 备份周期
     * @param integer $BaseBackupRetentionPeriod 基础备份保留时长
     * @param string $MinBackupStartTime 开始备份的最早时间
     * @param string $MaxBackupStartTime 开始备份的最晚时间
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
    }
}
