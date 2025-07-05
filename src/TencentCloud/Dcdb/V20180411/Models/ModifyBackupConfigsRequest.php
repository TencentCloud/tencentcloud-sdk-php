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
namespace TencentCloud\Dcdb\V20180411\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyBackupConfigs请求参数结构体
 *
 * @method string getInstanceId() 获取实例 ID，格式如：tdsqlshard-c1nl9rpv，与云数据库控制台页面中显示的实例 ID 相同。
 * @method void setInstanceId(string $InstanceId) 设置实例 ID，格式如：tdsqlshard-c1nl9rpv，与云数据库控制台页面中显示的实例 ID 相同。
 * @method integer getDays() 获取常规备份存储时长，范围[1, 3650]。
 * @method void setDays(integer $Days) 设置常规备份存储时长，范围[1, 3650]。
 * @method string getStartBackupTime() 获取每天备份执行的区间的开始时间，格式 mm:ss，形如 22:00。
 * @method void setStartBackupTime(string $StartBackupTime) 设置每天备份执行的区间的开始时间，格式 mm:ss，形如 22:00。
 * @method string getEndBackupTime() 获取每天备份执行的区间的结束时间，格式 mm:ss，形如 23:59。
 * @method void setEndBackupTime(string $EndBackupTime) 设置每天备份执行的区间的结束时间，格式 mm:ss，形如 23:59。
 * @method array getWeekDays() 获取执行备份周期，枚举值：Monday,Tuesday,Wednesday,Thursday,Friday,Saturday,Sunday
 * @method void setWeekDays(array $WeekDays) 设置执行备份周期，枚举值：Monday,Tuesday,Wednesday,Thursday,Friday,Saturday,Sunday
 * @method integer getArchiveDays() 获取沉降到归档存储时长，-1表示关闭归档设置。
 * @method void setArchiveDays(integer $ArchiveDays) 设置沉降到归档存储时长，-1表示关闭归档设置。
 * @method array getBackupConfigSet() 获取超期备份配置。
 * @method void setBackupConfigSet(array $BackupConfigSet) 设置超期备份配置。
 */
class ModifyBackupConfigsRequest extends AbstractModel
{
    /**
     * @var string 实例 ID，格式如：tdsqlshard-c1nl9rpv，与云数据库控制台页面中显示的实例 ID 相同。
     */
    public $InstanceId;

    /**
     * @var integer 常规备份存储时长，范围[1, 3650]。
     */
    public $Days;

    /**
     * @var string 每天备份执行的区间的开始时间，格式 mm:ss，形如 22:00。
     */
    public $StartBackupTime;

    /**
     * @var string 每天备份执行的区间的结束时间，格式 mm:ss，形如 23:59。
     */
    public $EndBackupTime;

    /**
     * @var array 执行备份周期，枚举值：Monday,Tuesday,Wednesday,Thursday,Friday,Saturday,Sunday
     */
    public $WeekDays;

    /**
     * @var integer 沉降到归档存储时长，-1表示关闭归档设置。
     */
    public $ArchiveDays;

    /**
     * @var array 超期备份配置。
     */
    public $BackupConfigSet;

    /**
     * @param string $InstanceId 实例 ID，格式如：tdsqlshard-c1nl9rpv，与云数据库控制台页面中显示的实例 ID 相同。
     * @param integer $Days 常规备份存储时长，范围[1, 3650]。
     * @param string $StartBackupTime 每天备份执行的区间的开始时间，格式 mm:ss，形如 22:00。
     * @param string $EndBackupTime 每天备份执行的区间的结束时间，格式 mm:ss，形如 23:59。
     * @param array $WeekDays 执行备份周期，枚举值：Monday,Tuesday,Wednesday,Thursday,Friday,Saturday,Sunday
     * @param integer $ArchiveDays 沉降到归档存储时长，-1表示关闭归档设置。
     * @param array $BackupConfigSet 超期备份配置。
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

        if (array_key_exists("Days",$param) and $param["Days"] !== null) {
            $this->Days = $param["Days"];
        }

        if (array_key_exists("StartBackupTime",$param) and $param["StartBackupTime"] !== null) {
            $this->StartBackupTime = $param["StartBackupTime"];
        }

        if (array_key_exists("EndBackupTime",$param) and $param["EndBackupTime"] !== null) {
            $this->EndBackupTime = $param["EndBackupTime"];
        }

        if (array_key_exists("WeekDays",$param) and $param["WeekDays"] !== null) {
            $this->WeekDays = $param["WeekDays"];
        }

        if (array_key_exists("ArchiveDays",$param) and $param["ArchiveDays"] !== null) {
            $this->ArchiveDays = $param["ArchiveDays"];
        }

        if (array_key_exists("BackupConfigSet",$param) and $param["BackupConfigSet"] !== null) {
            $this->BackupConfigSet = [];
            foreach ($param["BackupConfigSet"] as $key => $value){
                $obj = new NewBackupConfig();
                $obj->deserialize($value);
                array_push($this->BackupConfigSet, $obj);
            }
        }
    }
}
