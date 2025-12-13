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
namespace TencentCloud\Dbs\V20211108\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 备份策略
 *
 * @method string getBackupStartTime() 获取全量备份开始时间。周期性的全量备份将在当天该时间开始。
 * @method void setBackupStartTime(string $BackupStartTime) 设置全量备份开始时间。周期性的全量备份将在当天该时间开始。
 * @method StorageStrategy getStorageStrategy() 获取存储策略。
 * @method void setStorageStrategy(StorageStrategy $StorageStrategy) 设置存储策略。
 * @method BackupPeriod getBackupPeriod() 获取备份周期。
 * @method void setBackupPeriod(BackupPeriod $BackupPeriod) 设置备份周期。
 * @method string getBackupMethod() 获取备份方法。目前仅支持 "logical" - 逻辑备份。
 * @method void setBackupMethod(string $BackupMethod) 设置备份方法。目前仅支持 "logical" - 逻辑备份。
 * @method string getStrategyType() 获取备份周期。支持的值包括：
"period" - 周期性备份；
"single" - 单次备份。
默认值为"period"。
 * @method void setStrategyType(string $StrategyType) 设置备份周期。支持的值包括：
"period" - 周期性备份；
"single" - 单次备份。
默认值为"period"。
 * @method boolean getEnableIncrement() 获取是否开启增量备份。可能的取值为["true", "false"]。默认值为"true"。
 * @method void setEnableIncrement(boolean $EnableIncrement) 设置是否开启增量备份。可能的取值为["true", "false"]。默认值为"true"。
 */
class BackupStrategy extends AbstractModel
{
    /**
     * @var string 全量备份开始时间。周期性的全量备份将在当天该时间开始。
     */
    public $BackupStartTime;

    /**
     * @var StorageStrategy 存储策略。
     */
    public $StorageStrategy;

    /**
     * @var BackupPeriod 备份周期。
     */
    public $BackupPeriod;

    /**
     * @var string 备份方法。目前仅支持 "logical" - 逻辑备份。
     */
    public $BackupMethod;

    /**
     * @var string 备份周期。支持的值包括：
"period" - 周期性备份；
"single" - 单次备份。
默认值为"period"。
     */
    public $StrategyType;

    /**
     * @var boolean 是否开启增量备份。可能的取值为["true", "false"]。默认值为"true"。
     */
    public $EnableIncrement;

    /**
     * @param string $BackupStartTime 全量备份开始时间。周期性的全量备份将在当天该时间开始。
     * @param StorageStrategy $StorageStrategy 存储策略。
     * @param BackupPeriod $BackupPeriod 备份周期。
     * @param string $BackupMethod 备份方法。目前仅支持 "logical" - 逻辑备份。
     * @param string $StrategyType 备份周期。支持的值包括：
"period" - 周期性备份；
"single" - 单次备份。
默认值为"period"。
     * @param boolean $EnableIncrement 是否开启增量备份。可能的取值为["true", "false"]。默认值为"true"。
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
        if (array_key_exists("BackupStartTime",$param) and $param["BackupStartTime"] !== null) {
            $this->BackupStartTime = $param["BackupStartTime"];
        }

        if (array_key_exists("StorageStrategy",$param) and $param["StorageStrategy"] !== null) {
            $this->StorageStrategy = new StorageStrategy();
            $this->StorageStrategy->deserialize($param["StorageStrategy"]);
        }

        if (array_key_exists("BackupPeriod",$param) and $param["BackupPeriod"] !== null) {
            $this->BackupPeriod = new BackupPeriod();
            $this->BackupPeriod->deserialize($param["BackupPeriod"]);
        }

        if (array_key_exists("BackupMethod",$param) and $param["BackupMethod"] !== null) {
            $this->BackupMethod = $param["BackupMethod"];
        }

        if (array_key_exists("StrategyType",$param) and $param["StrategyType"] !== null) {
            $this->StrategyType = $param["StrategyType"];
        }

        if (array_key_exists("EnableIncrement",$param) and $param["EnableIncrement"] !== null) {
            $this->EnableIncrement = $param["EnableIncrement"];
        }
    }
}
