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
namespace TencentCloud\Sqlserver\V20180328\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyCrossBackupStrategy请求参数结构体
 *
 * @method string getCrossBackupEnabled() 获取跨地域备份开关(数据备份&日志备份) enable-开启，disable-关闭
 * @method void setCrossBackupEnabled(string $CrossBackupEnabled) 设置跨地域备份开关(数据备份&日志备份) enable-开启，disable-关闭
 * @method string getInstanceId() 获取实例Id
 * @method void setInstanceId(string $InstanceId) 设置实例Id
 * @method array getInstanceIdSet() 获取实例ID列表
 * @method void setInstanceIdSet(array $InstanceIdSet) 设置实例ID列表
 * @method integer getCrossBackupSaveDays() 获取跨地域备份保留天数，取值：7~1830，默认7天
 * @method void setCrossBackupSaveDays(integer $CrossBackupSaveDays) 设置跨地域备份保留天数，取值：7~1830，默认7天
 * @method array getCrossBackupRegion() 获取跨地域备份的目标地域ID，最多两个，最少一个
 * @method void setCrossBackupRegion(array $CrossBackupRegion) 设置跨地域备份的目标地域ID，最多两个，最少一个
 * @method integer getCleanUpCrossBackup() 获取是否立即清理跨地域备份(数据备份&日志备份) ，只有在BackupEnabled = disable时有效。1-是，0-否，默认：0
 * @method void setCleanUpCrossBackup(integer $CleanUpCrossBackup) 设置是否立即清理跨地域备份(数据备份&日志备份) ，只有在BackupEnabled = disable时有效。1-是，0-否，默认：0
 */
class ModifyCrossBackupStrategyRequest extends AbstractModel
{
    /**
     * @var string 跨地域备份开关(数据备份&日志备份) enable-开启，disable-关闭
     */
    public $CrossBackupEnabled;

    /**
     * @var string 实例Id
     */
    public $InstanceId;

    /**
     * @var array 实例ID列表
     */
    public $InstanceIdSet;

    /**
     * @var integer 跨地域备份保留天数，取值：7~1830，默认7天
     */
    public $CrossBackupSaveDays;

    /**
     * @var array 跨地域备份的目标地域ID，最多两个，最少一个
     */
    public $CrossBackupRegion;

    /**
     * @var integer 是否立即清理跨地域备份(数据备份&日志备份) ，只有在BackupEnabled = disable时有效。1-是，0-否，默认：0
     */
    public $CleanUpCrossBackup;

    /**
     * @param string $CrossBackupEnabled 跨地域备份开关(数据备份&日志备份) enable-开启，disable-关闭
     * @param string $InstanceId 实例Id
     * @param array $InstanceIdSet 实例ID列表
     * @param integer $CrossBackupSaveDays 跨地域备份保留天数，取值：7~1830，默认7天
     * @param array $CrossBackupRegion 跨地域备份的目标地域ID，最多两个，最少一个
     * @param integer $CleanUpCrossBackup 是否立即清理跨地域备份(数据备份&日志备份) ，只有在BackupEnabled = disable时有效。1-是，0-否，默认：0
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
        if (array_key_exists("CrossBackupEnabled",$param) and $param["CrossBackupEnabled"] !== null) {
            $this->CrossBackupEnabled = $param["CrossBackupEnabled"];
        }

        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("InstanceIdSet",$param) and $param["InstanceIdSet"] !== null) {
            $this->InstanceIdSet = $param["InstanceIdSet"];
        }

        if (array_key_exists("CrossBackupSaveDays",$param) and $param["CrossBackupSaveDays"] !== null) {
            $this->CrossBackupSaveDays = $param["CrossBackupSaveDays"];
        }

        if (array_key_exists("CrossBackupRegion",$param) and $param["CrossBackupRegion"] !== null) {
            $this->CrossBackupRegion = $param["CrossBackupRegion"];
        }

        if (array_key_exists("CleanUpCrossBackup",$param) and $param["CleanUpCrossBackup"] !== null) {
            $this->CleanUpCrossBackup = $param["CleanUpCrossBackup"];
        }
    }
}
