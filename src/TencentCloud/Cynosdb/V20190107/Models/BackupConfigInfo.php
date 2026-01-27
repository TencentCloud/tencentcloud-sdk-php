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
namespace TencentCloud\Cynosdb\V20190107\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 备份设置
 *
 * @method boolean getBackupCustomAutoTime() 获取系统自动时间
 * @method void setBackupCustomAutoTime(boolean $BackupCustomAutoTime) 设置系统自动时间
 * @method integer getBackupTimeBeg() 获取表示全备开始时间，[0-24*3600]， 如0:00, 1:00, 2:00 分别为 0，3600， 7200
 * @method void setBackupTimeBeg(integer $BackupTimeBeg) 设置表示全备开始时间，[0-24*3600]， 如0:00, 1:00, 2:00 分别为 0，3600， 7200
 * @method integer getBackupTimeEnd() 获取表示全备结束时间，[0-24*3600]， 如0:00, 1:00, 2:00 分别为 0，3600， 7200
 * @method void setBackupTimeEnd(integer $BackupTimeEnd) 设置表示全备结束时间，[0-24*3600]， 如0:00, 1:00, 2:00 分别为 0，3600， 7200
 * @method array getBackupWeekDays() 获取该参数目前不支持修改，无需填写。备份频率，长度为7的数组，分别对应周日到周六的备份方式，full-全量备份，increment-增量备份
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setBackupWeekDays(array $BackupWeekDays) 设置该参数目前不支持修改，无需填写。备份频率，长度为7的数组，分别对应周日到周六的备份方式，full-全量备份，increment-增量备份
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getBackupIntervalTime() 获取间隔时间
 * @method void setBackupIntervalTime(integer $BackupIntervalTime) 设置间隔时间
 * @method integer getReserveDuration() 获取表示保留备份时长, 单位秒，超过该时间将被清理, 七天表示为3600247=604800，最大为158112000
 * @method void setReserveDuration(integer $ReserveDuration) 设置表示保留备份时长, 单位秒，超过该时间将被清理, 七天表示为3600247=604800，最大为158112000
 * @method string getCrossRegionsEnable() 获取跨地域备份开启
yes-开启
no-关闭
 * @method void setCrossRegionsEnable(string $CrossRegionsEnable) 设置跨地域备份开启
yes-开启
no-关闭
 * @method array getCrossRegions() 获取跨地域备份地域
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCrossRegions(array $CrossRegions) 设置跨地域备份地域
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getBackupTriggerStrategy() 获取动数据备份触发策略，periodically:自动周期备份,frequent:高频备份
 * @method void setBackupTriggerStrategy(string $BackupTriggerStrategy) 设置动数据备份触发策略，periodically:自动周期备份,frequent:高频备份
 */
class BackupConfigInfo extends AbstractModel
{
    /**
     * @var boolean 系统自动时间
     */
    public $BackupCustomAutoTime;

    /**
     * @var integer 表示全备开始时间，[0-24*3600]， 如0:00, 1:00, 2:00 分别为 0，3600， 7200
     */
    public $BackupTimeBeg;

    /**
     * @var integer 表示全备结束时间，[0-24*3600]， 如0:00, 1:00, 2:00 分别为 0，3600， 7200
     */
    public $BackupTimeEnd;

    /**
     * @var array 该参数目前不支持修改，无需填写。备份频率，长度为7的数组，分别对应周日到周六的备份方式，full-全量备份，increment-增量备份
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $BackupWeekDays;

    /**
     * @var integer 间隔时间
     */
    public $BackupIntervalTime;

    /**
     * @var integer 表示保留备份时长, 单位秒，超过该时间将被清理, 七天表示为3600247=604800，最大为158112000
     */
    public $ReserveDuration;

    /**
     * @var string 跨地域备份开启
yes-开启
no-关闭
     */
    public $CrossRegionsEnable;

    /**
     * @var array 跨地域备份地域
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CrossRegions;

    /**
     * @var string 动数据备份触发策略，periodically:自动周期备份,frequent:高频备份
     */
    public $BackupTriggerStrategy;

    /**
     * @param boolean $BackupCustomAutoTime 系统自动时间
     * @param integer $BackupTimeBeg 表示全备开始时间，[0-24*3600]， 如0:00, 1:00, 2:00 分别为 0，3600， 7200
     * @param integer $BackupTimeEnd 表示全备结束时间，[0-24*3600]， 如0:00, 1:00, 2:00 分别为 0，3600， 7200
     * @param array $BackupWeekDays 该参数目前不支持修改，无需填写。备份频率，长度为7的数组，分别对应周日到周六的备份方式，full-全量备份，increment-增量备份
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $BackupIntervalTime 间隔时间
     * @param integer $ReserveDuration 表示保留备份时长, 单位秒，超过该时间将被清理, 七天表示为3600247=604800，最大为158112000
     * @param string $CrossRegionsEnable 跨地域备份开启
yes-开启
no-关闭
     * @param array $CrossRegions 跨地域备份地域
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $BackupTriggerStrategy 动数据备份触发策略，periodically:自动周期备份,frequent:高频备份
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
        if (array_key_exists("BackupCustomAutoTime",$param) and $param["BackupCustomAutoTime"] !== null) {
            $this->BackupCustomAutoTime = $param["BackupCustomAutoTime"];
        }

        if (array_key_exists("BackupTimeBeg",$param) and $param["BackupTimeBeg"] !== null) {
            $this->BackupTimeBeg = $param["BackupTimeBeg"];
        }

        if (array_key_exists("BackupTimeEnd",$param) and $param["BackupTimeEnd"] !== null) {
            $this->BackupTimeEnd = $param["BackupTimeEnd"];
        }

        if (array_key_exists("BackupWeekDays",$param) and $param["BackupWeekDays"] !== null) {
            $this->BackupWeekDays = $param["BackupWeekDays"];
        }

        if (array_key_exists("BackupIntervalTime",$param) and $param["BackupIntervalTime"] !== null) {
            $this->BackupIntervalTime = $param["BackupIntervalTime"];
        }

        if (array_key_exists("ReserveDuration",$param) and $param["ReserveDuration"] !== null) {
            $this->ReserveDuration = $param["ReserveDuration"];
        }

        if (array_key_exists("CrossRegionsEnable",$param) and $param["CrossRegionsEnable"] !== null) {
            $this->CrossRegionsEnable = $param["CrossRegionsEnable"];
        }

        if (array_key_exists("CrossRegions",$param) and $param["CrossRegions"] !== null) {
            $this->CrossRegions = $param["CrossRegions"];
        }

        if (array_key_exists("BackupTriggerStrategy",$param) and $param["BackupTriggerStrategy"] !== null) {
            $this->BackupTriggerStrategy = $param["BackupTriggerStrategy"];
        }
    }
}
