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
 * ModifyBackupPlan请求参数结构体
 *
 * @method string getDBInstanceId() 获取实例ID
 * @method void setDBInstanceId(string $DBInstanceId) 设置实例ID
 * @method string getMinBackupStartTime() 获取实例最早开始备份时间
 * @method void setMinBackupStartTime(string $MinBackupStartTime) 设置实例最早开始备份时间
 * @method string getMaxBackupStartTime() 获取实例最晚开始备份时间
 * @method void setMaxBackupStartTime(string $MaxBackupStartTime) 设置实例最晚开始备份时间
 * @method integer getBaseBackupRetentionPeriod() 获取实例备份保留时长，取值范围为3-7，单位是天
 * @method void setBaseBackupRetentionPeriod(integer $BaseBackupRetentionPeriod) 设置实例备份保留时长，取值范围为3-7，单位是天
 * @method array getBackupPeriod() 获取实例备份周期，按照星期维度，格式为小写星期英文单词
 * @method void setBackupPeriod(array $BackupPeriod) 设置实例备份周期，按照星期维度，格式为小写星期英文单词
 */
class ModifyBackupPlanRequest extends AbstractModel
{
    /**
     * @var string 实例ID
     */
    public $DBInstanceId;

    /**
     * @var string 实例最早开始备份时间
     */
    public $MinBackupStartTime;

    /**
     * @var string 实例最晚开始备份时间
     */
    public $MaxBackupStartTime;

    /**
     * @var integer 实例备份保留时长，取值范围为3-7，单位是天
     */
    public $BaseBackupRetentionPeriod;

    /**
     * @var array 实例备份周期，按照星期维度，格式为小写星期英文单词
     */
    public $BackupPeriod;

    /**
     * @param string $DBInstanceId 实例ID
     * @param string $MinBackupStartTime 实例最早开始备份时间
     * @param string $MaxBackupStartTime 实例最晚开始备份时间
     * @param integer $BaseBackupRetentionPeriod 实例备份保留时长，取值范围为3-7，单位是天
     * @param array $BackupPeriod 实例备份周期，按照星期维度，格式为小写星期英文单词
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
        if (array_key_exists("DBInstanceId",$param) and $param["DBInstanceId"] !== null) {
            $this->DBInstanceId = $param["DBInstanceId"];
        }

        if (array_key_exists("MinBackupStartTime",$param) and $param["MinBackupStartTime"] !== null) {
            $this->MinBackupStartTime = $param["MinBackupStartTime"];
        }

        if (array_key_exists("MaxBackupStartTime",$param) and $param["MaxBackupStartTime"] !== null) {
            $this->MaxBackupStartTime = $param["MaxBackupStartTime"];
        }

        if (array_key_exists("BaseBackupRetentionPeriod",$param) and $param["BaseBackupRetentionPeriod"] !== null) {
            $this->BaseBackupRetentionPeriod = $param["BaseBackupRetentionPeriod"];
        }

        if (array_key_exists("BackupPeriod",$param) and $param["BackupPeriod"] !== null) {
            $this->BackupPeriod = $param["BackupPeriod"];
        }
    }
}
