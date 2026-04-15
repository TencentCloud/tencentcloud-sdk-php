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
 * @method string getInstanceId() 获取<p>实例 ID。请登录 <a href="https://console.cloud.tencent.com/mongodb">MongoDB 控制台</a>在实例列表复制实例 ID。</p>
 * @method void setInstanceId(string $InstanceId) 设置<p>实例 ID。请登录 <a href="https://console.cloud.tencent.com/mongodb">MongoDB 控制台</a>在实例列表复制实例 ID。</p>
 * @method integer getBackupMethod() 获取<p>备份方式。</p><ul><li>0：逻辑备份。</li><li>1：物理备份。</li><li>3：快照备份。<br><strong>说明</strong>:</li><li>通用版实例支持逻辑备份与物理备份。云盘版实例支持物理备份与快照备份，暂不支持逻辑备份。</li><li>实例开通存储加密，则备份方式不能为物理备份。</li></ul>
 * @method void setBackupMethod(integer $BackupMethod) 设置<p>备份方式。</p><ul><li>0：逻辑备份。</li><li>1：物理备份。</li><li>3：快照备份。<br><strong>说明</strong>:</li><li>通用版实例支持逻辑备份与物理备份。云盘版实例支持物理备份与快照备份，暂不支持逻辑备份。</li><li>实例开通存储加密，则备份方式不能为物理备份。</li></ul>
 * @method integer getBackupTime() 获取<p>设置自动备份开始时间。取值范围为：[0,23]，例如：该参数设置为2，表示02:00开始备份。</p>
 * @method void setBackupTime(integer $BackupTime) 设置<p>设置自动备份开始时间。取值范围为：[0,23]，例如：该参数设置为2，表示02:00开始备份。</p>
 * @method integer getBackupFrequency() 获取<p>指定每日自动备份频率。</p><ul><li>12: 每日备份2次，间隔约12小时。</li><li>24: 每日备份1次（默认），间隔约24小时。</li></ul>
 * @method void setBackupFrequency(integer $BackupFrequency) 设置<p>指定每日自动备份频率。</p><ul><li>12: 每日备份2次，间隔约12小时。</li><li>24: 每日备份1次（默认），间隔约24小时。</li></ul>
 * @method boolean getNotify() 获取<p>设置自动备份发生错误时，是否发送失败告警。</p><ul><li>true：发送。</li><li>false：不发送。</li></ul>
 * @method void setNotify(boolean $Notify) 设置<p>设置自动备份发生错误时，是否发送失败告警。</p><ul><li>true：发送。</li><li>false：不发送。</li></ul>
 * @method integer getBackupRetentionPeriod() 获取<p>指定备份数据保留时长。</p><ul><li>单位：天，默认为 7 天。</li><li>取值范围：[7,365]。</li></ul>
 * @method void setBackupRetentionPeriod(integer $BackupRetentionPeriod) 设置<p>指定备份数据保留时长。</p><ul><li>单位：天，默认为 7 天。</li><li>取值范围：[7,365]。</li></ul>
 * @method string getActiveWeekdays() 获取<p>指定每周内执行自动备份的具体日期。</p><ul><li>格式：请输入 0-6 之间的数字代表周日至周六（例如：1 代表周一），多个日期请用英文逗号 , 分隔。</li><li>示例：输入 1,3,5 表示系统将在每周的周一、周三、周五执行备份。</li><li>默认值：不设置，则默认为全周期 (0,1,2,3,4,5,6)，即每日执行备份。</li></ul>
 * @method void setActiveWeekdays(string $ActiveWeekdays) 设置<p>指定每周内执行自动备份的具体日期。</p><ul><li>格式：请输入 0-6 之间的数字代表周日至周六（例如：1 代表周一），多个日期请用英文逗号 , 分隔。</li><li>示例：输入 1,3,5 表示系统将在每周的周一、周三、周五执行备份。</li><li>默认值：不设置，则默认为全周期 (0,1,2,3,4,5,6)，即每日执行备份。</li></ul>
 * @method string getLongTermUnit() 获取<p>长期保留周期。支持按周或按月选择特定日期的备份（例如，每月1日、15日的备份数据），将其保留更长周期。- 不开启（默认）：不启用长期保留功能。- 按周保留： 指定为 weekly。- 按月保留： 指定为 monthly。待废弃，使用LongTermInterval</p>
 * @method void setLongTermUnit(string $LongTermUnit) 设置<p>长期保留周期。支持按周或按月选择特定日期的备份（例如，每月1日、15日的备份数据），将其保留更长周期。- 不开启（默认）：不启用长期保留功能。- 按周保留： 指定为 weekly。- 按月保留： 指定为 monthly。待废弃，使用LongTermInterval</p>
 * @method string getLongTermActiveDays() 获取<p>指定用于长期保留的具体备份日期。此设置仅在 <strong>LongTermUnit</strong> 被设为<strong>weekly</strong> 或 <strong>monthly</strong> 时生效。</p><ul><li>按周（weekly）保留：请输入 0-6 之间的数字来代表周日至周六。多个日期请用英文逗号分隔。</li><li>按月（monthly）保留：请输入 1-31 之间的数字来代表月份中的具体日期。多个日期请用英文逗号分隔。</li></ul>
 * @method void setLongTermActiveDays(string $LongTermActiveDays) 设置<p>指定用于长期保留的具体备份日期。此设置仅在 <strong>LongTermUnit</strong> 被设为<strong>weekly</strong> 或 <strong>monthly</strong> 时生效。</p><ul><li>按周（weekly）保留：请输入 0-6 之间的数字来代表周日至周六。多个日期请用英文逗号分隔。</li><li>按月（monthly）保留：请输入 1-31 之间的数字来代表月份中的具体日期。多个日期请用英文逗号分隔。</li></ul>
 * @method integer getLongTermExpiredDays() 获取<p>长期备份保留时长。取值范围[30,1075]。</p>
 * @method void setLongTermExpiredDays(integer $LongTermExpiredDays) 设置<p>长期备份保留时长。取值范围[30,1075]。</p>
 * @method integer getOplogExpiredDays() 获取<p>增量备份保留时长。</p><ul><li>单位：天。</li><li>默认值：7天。</li><li>取值范围：[7,365]。</li></ul>
 * @method void setOplogExpiredDays(integer $OplogExpiredDays) 设置<p>增量备份保留时长。</p><ul><li>单位：天。</li><li>默认值：7天。</li><li>取值范围：[7,365]。</li></ul>
 * @method integer getBackupVersion() 获取<p>指定备份版本。</p><ul><li>旧版本备份：0。</li><li>开启高级备份：1。</li></ul>
 * @method void setBackupVersion(integer $BackupVersion) 设置<p>指定备份版本。</p><ul><li>旧版本备份：0。</li><li>开启高级备份：1。</li></ul>
 * @method integer getAlarmWaterLevel() 获取<p>设置备份数据集存储空间使用率的告警阈值。- 单位：%。-  默认值：100。- 取值范围：[50,300]。待废弃,使用AlertThreshold</p>
 * @method void setAlarmWaterLevel(integer $AlarmWaterLevel) 设置<p>设置备份数据集存储空间使用率的告警阈值。- 单位：%。-  默认值：100。- 取值范围：[50,300]。待废弃,使用AlertThreshold</p>
 * @method string getLongTermInterval() 获取<p>长期保留周期。支持按周或按月选择特定日期的备份（例如，每月1日、15日的备份数据），将其保留更长周期。- 不开启（默认）：不启用长期保留功能。- 按周保留： 指定为 weekly。- 按月保留： 指定为 monthly。</p>
 * @method void setLongTermInterval(string $LongTermInterval) 设置<p>长期保留周期。支持按周或按月选择特定日期的备份（例如，每月1日、15日的备份数据），将其保留更长周期。- 不开启（默认）：不启用长期保留功能。- 按周保留： 指定为 weekly。- 按月保留： 指定为 monthly。</p>
 * @method integer getAlertThreshold() 获取<p>设置备份数据集存储空间使用率的告警阈值。- 单位：%。-  默认值：100。- 取值范围：[50,300]。</p>
 * @method void setAlertThreshold(integer $AlertThreshold) 设置<p>设置备份数据集存储空间使用率的告警阈值。- 单位：%。-  默认值：100。- 取值范围：[50,300]。</p>
 */
class SetBackupRulesRequest extends AbstractModel
{
    /**
     * @var string <p>实例 ID。请登录 <a href="https://console.cloud.tencent.com/mongodb">MongoDB 控制台</a>在实例列表复制实例 ID。</p>
     */
    public $InstanceId;

    /**
     * @var integer <p>备份方式。</p><ul><li>0：逻辑备份。</li><li>1：物理备份。</li><li>3：快照备份。<br><strong>说明</strong>:</li><li>通用版实例支持逻辑备份与物理备份。云盘版实例支持物理备份与快照备份，暂不支持逻辑备份。</li><li>实例开通存储加密，则备份方式不能为物理备份。</li></ul>
     */
    public $BackupMethod;

    /**
     * @var integer <p>设置自动备份开始时间。取值范围为：[0,23]，例如：该参数设置为2，表示02:00开始备份。</p>
     */
    public $BackupTime;

    /**
     * @var integer <p>指定每日自动备份频率。</p><ul><li>12: 每日备份2次，间隔约12小时。</li><li>24: 每日备份1次（默认），间隔约24小时。</li></ul>
     */
    public $BackupFrequency;

    /**
     * @var boolean <p>设置自动备份发生错误时，是否发送失败告警。</p><ul><li>true：发送。</li><li>false：不发送。</li></ul>
     */
    public $Notify;

    /**
     * @var integer <p>指定备份数据保留时长。</p><ul><li>单位：天，默认为 7 天。</li><li>取值范围：[7,365]。</li></ul>
     */
    public $BackupRetentionPeriod;

    /**
     * @var string <p>指定每周内执行自动备份的具体日期。</p><ul><li>格式：请输入 0-6 之间的数字代表周日至周六（例如：1 代表周一），多个日期请用英文逗号 , 分隔。</li><li>示例：输入 1,3,5 表示系统将在每周的周一、周三、周五执行备份。</li><li>默认值：不设置，则默认为全周期 (0,1,2,3,4,5,6)，即每日执行备份。</li></ul>
     */
    public $ActiveWeekdays;

    /**
     * @var string <p>长期保留周期。支持按周或按月选择特定日期的备份（例如，每月1日、15日的备份数据），将其保留更长周期。- 不开启（默认）：不启用长期保留功能。- 按周保留： 指定为 weekly。- 按月保留： 指定为 monthly。待废弃，使用LongTermInterval</p>
     */
    public $LongTermUnit;

    /**
     * @var string <p>指定用于长期保留的具体备份日期。此设置仅在 <strong>LongTermUnit</strong> 被设为<strong>weekly</strong> 或 <strong>monthly</strong> 时生效。</p><ul><li>按周（weekly）保留：请输入 0-6 之间的数字来代表周日至周六。多个日期请用英文逗号分隔。</li><li>按月（monthly）保留：请输入 1-31 之间的数字来代表月份中的具体日期。多个日期请用英文逗号分隔。</li></ul>
     */
    public $LongTermActiveDays;

    /**
     * @var integer <p>长期备份保留时长。取值范围[30,1075]。</p>
     */
    public $LongTermExpiredDays;

    /**
     * @var integer <p>增量备份保留时长。</p><ul><li>单位：天。</li><li>默认值：7天。</li><li>取值范围：[7,365]。</li></ul>
     */
    public $OplogExpiredDays;

    /**
     * @var integer <p>指定备份版本。</p><ul><li>旧版本备份：0。</li><li>开启高级备份：1。</li></ul>
     */
    public $BackupVersion;

    /**
     * @var integer <p>设置备份数据集存储空间使用率的告警阈值。- 单位：%。-  默认值：100。- 取值范围：[50,300]。待废弃,使用AlertThreshold</p>
     */
    public $AlarmWaterLevel;

    /**
     * @var string <p>长期保留周期。支持按周或按月选择特定日期的备份（例如，每月1日、15日的备份数据），将其保留更长周期。- 不开启（默认）：不启用长期保留功能。- 按周保留： 指定为 weekly。- 按月保留： 指定为 monthly。</p>
     */
    public $LongTermInterval;

    /**
     * @var integer <p>设置备份数据集存储空间使用率的告警阈值。- 单位：%。-  默认值：100。- 取值范围：[50,300]。</p>
     */
    public $AlertThreshold;

    /**
     * @param string $InstanceId <p>实例 ID。请登录 <a href="https://console.cloud.tencent.com/mongodb">MongoDB 控制台</a>在实例列表复制实例 ID。</p>
     * @param integer $BackupMethod <p>备份方式。</p><ul><li>0：逻辑备份。</li><li>1：物理备份。</li><li>3：快照备份。<br><strong>说明</strong>:</li><li>通用版实例支持逻辑备份与物理备份。云盘版实例支持物理备份与快照备份，暂不支持逻辑备份。</li><li>实例开通存储加密，则备份方式不能为物理备份。</li></ul>
     * @param integer $BackupTime <p>设置自动备份开始时间。取值范围为：[0,23]，例如：该参数设置为2，表示02:00开始备份。</p>
     * @param integer $BackupFrequency <p>指定每日自动备份频率。</p><ul><li>12: 每日备份2次，间隔约12小时。</li><li>24: 每日备份1次（默认），间隔约24小时。</li></ul>
     * @param boolean $Notify <p>设置自动备份发生错误时，是否发送失败告警。</p><ul><li>true：发送。</li><li>false：不发送。</li></ul>
     * @param integer $BackupRetentionPeriod <p>指定备份数据保留时长。</p><ul><li>单位：天，默认为 7 天。</li><li>取值范围：[7,365]。</li></ul>
     * @param string $ActiveWeekdays <p>指定每周内执行自动备份的具体日期。</p><ul><li>格式：请输入 0-6 之间的数字代表周日至周六（例如：1 代表周一），多个日期请用英文逗号 , 分隔。</li><li>示例：输入 1,3,5 表示系统将在每周的周一、周三、周五执行备份。</li><li>默认值：不设置，则默认为全周期 (0,1,2,3,4,5,6)，即每日执行备份。</li></ul>
     * @param string $LongTermUnit <p>长期保留周期。支持按周或按月选择特定日期的备份（例如，每月1日、15日的备份数据），将其保留更长周期。- 不开启（默认）：不启用长期保留功能。- 按周保留： 指定为 weekly。- 按月保留： 指定为 monthly。待废弃，使用LongTermInterval</p>
     * @param string $LongTermActiveDays <p>指定用于长期保留的具体备份日期。此设置仅在 <strong>LongTermUnit</strong> 被设为<strong>weekly</strong> 或 <strong>monthly</strong> 时生效。</p><ul><li>按周（weekly）保留：请输入 0-6 之间的数字来代表周日至周六。多个日期请用英文逗号分隔。</li><li>按月（monthly）保留：请输入 1-31 之间的数字来代表月份中的具体日期。多个日期请用英文逗号分隔。</li></ul>
     * @param integer $LongTermExpiredDays <p>长期备份保留时长。取值范围[30,1075]。</p>
     * @param integer $OplogExpiredDays <p>增量备份保留时长。</p><ul><li>单位：天。</li><li>默认值：7天。</li><li>取值范围：[7,365]。</li></ul>
     * @param integer $BackupVersion <p>指定备份版本。</p><ul><li>旧版本备份：0。</li><li>开启高级备份：1。</li></ul>
     * @param integer $AlarmWaterLevel <p>设置备份数据集存储空间使用率的告警阈值。- 单位：%。-  默认值：100。- 取值范围：[50,300]。待废弃,使用AlertThreshold</p>
     * @param string $LongTermInterval <p>长期保留周期。支持按周或按月选择特定日期的备份（例如，每月1日、15日的备份数据），将其保留更长周期。- 不开启（默认）：不启用长期保留功能。- 按周保留： 指定为 weekly。- 按月保留： 指定为 monthly。</p>
     * @param integer $AlertThreshold <p>设置备份数据集存储空间使用率的告警阈值。- 单位：%。-  默认值：100。- 取值范围：[50,300]。</p>
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

        if (array_key_exists("BackupFrequency",$param) and $param["BackupFrequency"] !== null) {
            $this->BackupFrequency = $param["BackupFrequency"];
        }

        if (array_key_exists("Notify",$param) and $param["Notify"] !== null) {
            $this->Notify = $param["Notify"];
        }

        if (array_key_exists("BackupRetentionPeriod",$param) and $param["BackupRetentionPeriod"] !== null) {
            $this->BackupRetentionPeriod = $param["BackupRetentionPeriod"];
        }

        if (array_key_exists("ActiveWeekdays",$param) and $param["ActiveWeekdays"] !== null) {
            $this->ActiveWeekdays = $param["ActiveWeekdays"];
        }

        if (array_key_exists("LongTermUnit",$param) and $param["LongTermUnit"] !== null) {
            $this->LongTermUnit = $param["LongTermUnit"];
        }

        if (array_key_exists("LongTermActiveDays",$param) and $param["LongTermActiveDays"] !== null) {
            $this->LongTermActiveDays = $param["LongTermActiveDays"];
        }

        if (array_key_exists("LongTermExpiredDays",$param) and $param["LongTermExpiredDays"] !== null) {
            $this->LongTermExpiredDays = $param["LongTermExpiredDays"];
        }

        if (array_key_exists("OplogExpiredDays",$param) and $param["OplogExpiredDays"] !== null) {
            $this->OplogExpiredDays = $param["OplogExpiredDays"];
        }

        if (array_key_exists("BackupVersion",$param) and $param["BackupVersion"] !== null) {
            $this->BackupVersion = $param["BackupVersion"];
        }

        if (array_key_exists("AlarmWaterLevel",$param) and $param["AlarmWaterLevel"] !== null) {
            $this->AlarmWaterLevel = $param["AlarmWaterLevel"];
        }

        if (array_key_exists("LongTermInterval",$param) and $param["LongTermInterval"] !== null) {
            $this->LongTermInterval = $param["LongTermInterval"];
        }

        if (array_key_exists("AlertThreshold",$param) and $param["AlertThreshold"] !== null) {
            $this->AlertThreshold = $param["AlertThreshold"];
        }
    }
}
