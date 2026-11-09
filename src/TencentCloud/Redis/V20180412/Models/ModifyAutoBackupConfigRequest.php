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
 * ModifyAutoBackupConfig请求参数结构体
 *
 * @method string getInstanceId() 获取<p>指定实例 ID。例如：crs-xjhsdj****。请登录<a href="https://console.cloud.tencent.com/redis">Redis控制台</a>在实例列表复制实例 ID。</p>
 * @method void setInstanceId(string $InstanceId) 设置<p>指定实例 ID。例如：crs-xjhsdj****。请登录<a href="https://console.cloud.tencent.com/redis">Redis控制台</a>在实例列表复制实例 ID。</p>
 * @method array getWeekDays() 获取<p>设置自动备份周期。可设置为Monday，Tuesday，Wednesday，Thursday，Friday，Saturday，Sunday。该参数暂不支持修改。</p>
 * @method void setWeekDays(array $WeekDays) 设置<p>设置自动备份周期。可设置为Monday，Tuesday，Wednesday，Thursday，Friday，Saturday，Sunday。该参数暂不支持修改。</p>
 * @method string getTimePeriod() 获取<p>备份时间段。可设置为每个整点。格式如：00:00-01:00, 01:00-02:00...... 23:00-00:00。</p>
 * @method void setTimePeriod(string $TimePeriod) 设置<p>备份时间段。可设置为每个整点。格式如：00:00-01:00, 01:00-02:00...... 23:00-00:00。</p>
 * @method integer getAutoBackupType() 获取<p>自动备份类型。目前仅能配置为：1 ，指定时备份。</p>
 * @method void setAutoBackupType(integer $AutoBackupType) 设置<p>自动备份类型。目前仅能配置为：1 ，指定时备份。</p>
 * @method integer getBackupStorageDays() 获取<p>全量备份文件保存天数。 仅支持设置为 7，单位：天。如需更长天数，请<a href="https://console.cloud.tencent.com/workorder/category">提交工单</a>申请。</p>
 * @method void setBackupStorageDays(integer $BackupStorageDays) 设置<p>全量备份文件保存天数。 仅支持设置为 7，单位：天。如需更长天数，请<a href="https://console.cloud.tencent.com/workorder/category">提交工单</a>申请。</p>
 */
class ModifyAutoBackupConfigRequest extends AbstractModel
{
    /**
     * @var string <p>指定实例 ID。例如：crs-xjhsdj****。请登录<a href="https://console.cloud.tencent.com/redis">Redis控制台</a>在实例列表复制实例 ID。</p>
     */
    public $InstanceId;

    /**
     * @var array <p>设置自动备份周期。可设置为Monday，Tuesday，Wednesday，Thursday，Friday，Saturday，Sunday。该参数暂不支持修改。</p>
     */
    public $WeekDays;

    /**
     * @var string <p>备份时间段。可设置为每个整点。格式如：00:00-01:00, 01:00-02:00...... 23:00-00:00。</p>
     */
    public $TimePeriod;

    /**
     * @var integer <p>自动备份类型。目前仅能配置为：1 ，指定时备份。</p>
     */
    public $AutoBackupType;

    /**
     * @var integer <p>全量备份文件保存天数。 仅支持设置为 7，单位：天。如需更长天数，请<a href="https://console.cloud.tencent.com/workorder/category">提交工单</a>申请。</p>
     */
    public $BackupStorageDays;

    /**
     * @param string $InstanceId <p>指定实例 ID。例如：crs-xjhsdj****。请登录<a href="https://console.cloud.tencent.com/redis">Redis控制台</a>在实例列表复制实例 ID。</p>
     * @param array $WeekDays <p>设置自动备份周期。可设置为Monday，Tuesday，Wednesday，Thursday，Friday，Saturday，Sunday。该参数暂不支持修改。</p>
     * @param string $TimePeriod <p>备份时间段。可设置为每个整点。格式如：00:00-01:00, 01:00-02:00...... 23:00-00:00。</p>
     * @param integer $AutoBackupType <p>自动备份类型。目前仅能配置为：1 ，指定时备份。</p>
     * @param integer $BackupStorageDays <p>全量备份文件保存天数。 仅支持设置为 7，单位：天。如需更长天数，请<a href="https://console.cloud.tencent.com/workorder/category">提交工单</a>申请。</p>
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

        if (array_key_exists("WeekDays",$param) and $param["WeekDays"] !== null) {
            $this->WeekDays = $param["WeekDays"];
        }

        if (array_key_exists("TimePeriod",$param) and $param["TimePeriod"] !== null) {
            $this->TimePeriod = $param["TimePeriod"];
        }

        if (array_key_exists("AutoBackupType",$param) and $param["AutoBackupType"] !== null) {
            $this->AutoBackupType = $param["AutoBackupType"];
        }

        if (array_key_exists("BackupStorageDays",$param) and $param["BackupStorageDays"] !== null) {
            $this->BackupStorageDays = $param["BackupStorageDays"];
        }
    }
}
