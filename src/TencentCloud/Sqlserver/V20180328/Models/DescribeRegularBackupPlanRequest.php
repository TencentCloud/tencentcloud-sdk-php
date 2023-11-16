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
namespace TencentCloud\Sqlserver\V20180328\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeRegularBackupPlan请求参数结构体
 *
 * @method string getInstanceId() 获取实例ID
 * @method void setInstanceId(string $InstanceId) 设置实例ID
 * @method integer getRegularBackupSaveDays() 获取定期备份保留天数 [90 - 3650]天，默认365天
 * @method void setRegularBackupSaveDays(integer $RegularBackupSaveDays) 设置定期备份保留天数 [90 - 3650]天，默认365天
 * @method string getRegularBackupStrategy() 获取定期备份策略 years-每年，quarters-每季度，months-每月，默认months
 * @method void setRegularBackupStrategy(string $RegularBackupStrategy) 设置定期备份策略 years-每年，quarters-每季度，months-每月，默认months
 * @method integer getRegularBackupCounts() 获取定期备份保留个数，默认1个
 * @method void setRegularBackupCounts(integer $RegularBackupCounts) 设置定期备份保留个数，默认1个
 * @method string getRegularBackupStartTime() 获取定期备份开始日期，格式-YYYY-MM-DD 默认当前日期
 * @method void setRegularBackupStartTime(string $RegularBackupStartTime) 设置定期备份开始日期，格式-YYYY-MM-DD 默认当前日期
 * @method array getBackupCycle() 获取常规备份周期
 * @method void setBackupCycle(array $BackupCycle) 设置常规备份周期
 */
class DescribeRegularBackupPlanRequest extends AbstractModel
{
    /**
     * @var string 实例ID
     */
    public $InstanceId;

    /**
     * @var integer 定期备份保留天数 [90 - 3650]天，默认365天
     */
    public $RegularBackupSaveDays;

    /**
     * @var string 定期备份策略 years-每年，quarters-每季度，months-每月，默认months
     */
    public $RegularBackupStrategy;

    /**
     * @var integer 定期备份保留个数，默认1个
     */
    public $RegularBackupCounts;

    /**
     * @var string 定期备份开始日期，格式-YYYY-MM-DD 默认当前日期
     */
    public $RegularBackupStartTime;

    /**
     * @var array 常规备份周期
     */
    public $BackupCycle;

    /**
     * @param string $InstanceId 实例ID
     * @param integer $RegularBackupSaveDays 定期备份保留天数 [90 - 3650]天，默认365天
     * @param string $RegularBackupStrategy 定期备份策略 years-每年，quarters-每季度，months-每月，默认months
     * @param integer $RegularBackupCounts 定期备份保留个数，默认1个
     * @param string $RegularBackupStartTime 定期备份开始日期，格式-YYYY-MM-DD 默认当前日期
     * @param array $BackupCycle 常规备份周期
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

        if (array_key_exists("RegularBackupSaveDays",$param) and $param["RegularBackupSaveDays"] !== null) {
            $this->RegularBackupSaveDays = $param["RegularBackupSaveDays"];
        }

        if (array_key_exists("RegularBackupStrategy",$param) and $param["RegularBackupStrategy"] !== null) {
            $this->RegularBackupStrategy = $param["RegularBackupStrategy"];
        }

        if (array_key_exists("RegularBackupCounts",$param) and $param["RegularBackupCounts"] !== null) {
            $this->RegularBackupCounts = $param["RegularBackupCounts"];
        }

        if (array_key_exists("RegularBackupStartTime",$param) and $param["RegularBackupStartTime"] !== null) {
            $this->RegularBackupStartTime = $param["RegularBackupStartTime"];
        }

        if (array_key_exists("BackupCycle",$param) and $param["BackupCycle"] !== null) {
            $this->BackupCycle = $param["BackupCycle"];
        }
    }
}
