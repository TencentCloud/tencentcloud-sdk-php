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
namespace TencentCloud\Mongodb\V20190725\Models;
use TencentCloud\Common\AbstractModel;

/**
 * SetBackupRules请求参数结构体
 *
 * @method string getInstanceId() 获取实例 ID，例如：cmgo-p8vn****。请登录 [MongoDB 控制台](https://console.cloud.tencent.com/mongodb)在实例列表复制实例 ID。
 * @method void setInstanceId(string $InstanceId) 设置实例 ID，例如：cmgo-p8vn****。请登录 [MongoDB 控制台](https://console.cloud.tencent.com/mongodb)在实例列表复制实例 ID。
 * @method integer getBackupMethod() 获取备份方式。
- 0：逻辑备份。
- 1：物理备份。
- 3：快照备份。
**说明**:
1. 通用版实例支持逻辑备份与物理备份。云盘版实例支持物理备份与快照备份，暂不支持逻辑备份。
2. 实例开通存储加密，则备份方式不能为物理备份。
 * @method void setBackupMethod(integer $BackupMethod) 设置备份方式。
- 0：逻辑备份。
- 1：物理备份。
- 3：快照备份。
**说明**:
1. 通用版实例支持逻辑备份与物理备份。云盘版实例支持物理备份与快照备份，暂不支持逻辑备份。
2. 实例开通存储加密，则备份方式不能为物理备份。
 * @method integer getBackupTime() 获取设置自动备份开始时间。取值范围为：[0,23]，例如：该参数设置为2，表示02:00开始备份。
 * @method void setBackupTime(integer $BackupTime) 设置设置自动备份开始时间。取值范围为：[0,23]，例如：该参数设置为2，表示02:00开始备份。
 * @method boolean getNotify() 获取设置自动备份发生错误时，是否发送失败告警。
- true：发送。
- false：不发送。
 * @method void setNotify(boolean $Notify) 设置设置自动备份发生错误时，是否发送失败告警。
- true：发送。
- false：不发送。
 * @method integer getBackupRetentionPeriod() 获取指定备份数据保存天数。默认为 7 天，支持设置为7、30、90、180、365。
 * @method void setBackupRetentionPeriod(integer $BackupRetentionPeriod) 设置指定备份数据保存天数。默认为 7 天，支持设置为7、30、90、180、365。
 */
class SetBackupRulesRequest extends AbstractModel
{
    /**
     * @var string 实例 ID，例如：cmgo-p8vn****。请登录 [MongoDB 控制台](https://console.cloud.tencent.com/mongodb)在实例列表复制实例 ID。
     */
    public $InstanceId;

    /**
     * @var integer 备份方式。
- 0：逻辑备份。
- 1：物理备份。
- 3：快照备份。
**说明**:
1. 通用版实例支持逻辑备份与物理备份。云盘版实例支持物理备份与快照备份，暂不支持逻辑备份。
2. 实例开通存储加密，则备份方式不能为物理备份。
     */
    public $BackupMethod;

    /**
     * @var integer 设置自动备份开始时间。取值范围为：[0,23]，例如：该参数设置为2，表示02:00开始备份。
     */
    public $BackupTime;

    /**
     * @var boolean 设置自动备份发生错误时，是否发送失败告警。
- true：发送。
- false：不发送。
     */
    public $Notify;

    /**
     * @var integer 指定备份数据保存天数。默认为 7 天，支持设置为7、30、90、180、365。
     */
    public $BackupRetentionPeriod;

    /**
     * @param string $InstanceId 实例 ID，例如：cmgo-p8vn****。请登录 [MongoDB 控制台](https://console.cloud.tencent.com/mongodb)在实例列表复制实例 ID。
     * @param integer $BackupMethod 备份方式。
- 0：逻辑备份。
- 1：物理备份。
- 3：快照备份。
**说明**:
1. 通用版实例支持逻辑备份与物理备份。云盘版实例支持物理备份与快照备份，暂不支持逻辑备份。
2. 实例开通存储加密，则备份方式不能为物理备份。
     * @param integer $BackupTime 设置自动备份开始时间。取值范围为：[0,23]，例如：该参数设置为2，表示02:00开始备份。
     * @param boolean $Notify 设置自动备份发生错误时，是否发送失败告警。
- true：发送。
- false：不发送。
     * @param integer $BackupRetentionPeriod 指定备份数据保存天数。默认为 7 天，支持设置为7、30、90、180、365。
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

        if (array_key_exists("BackupMethod",$param) and $param["BackupMethod"] !== null) {
            $this->BackupMethod = $param["BackupMethod"];
        }

        if (array_key_exists("BackupTime",$param) and $param["BackupTime"] !== null) {
            $this->BackupTime = $param["BackupTime"];
        }

        if (array_key_exists("Notify",$param) and $param["Notify"] !== null) {
            $this->Notify = $param["Notify"];
        }

        if (array_key_exists("BackupRetentionPeriod",$param) and $param["BackupRetentionPeriod"] !== null) {
            $this->BackupRetentionPeriod = $param["BackupRetentionPeriod"];
        }
    }
}
