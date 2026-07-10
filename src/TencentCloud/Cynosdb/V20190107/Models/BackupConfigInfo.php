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
 * @method boolean getBackupCustomAutoTime() 获取<p>系统自动时间</p>
 * @method void setBackupCustomAutoTime(boolean $BackupCustomAutoTime) 设置<p>系统自动时间</p>
 * @method integer getBackupTimeBeg() 获取<p>表示全备开始时间，[0-24*3600]， 如0:00, 1:00, 2:00 分别为 0，3600， 7200</p>
 * @method void setBackupTimeBeg(integer $BackupTimeBeg) 设置<p>表示全备开始时间，[0-24*3600]， 如0:00, 1:00, 2:00 分别为 0，3600， 7200</p>
 * @method integer getBackupTimeEnd() 获取<p>表示全备结束时间，[0-24*3600]， 如0:00, 1:00, 2:00 分别为 0，3600， 7200</p>
 * @method void setBackupTimeEnd(integer $BackupTimeEnd) 设置<p>表示全备结束时间，[0-24*3600]， 如0:00, 1:00, 2:00 分别为 0，3600， 7200</p>
 * @method array getBackupWeekDays() 获取<p>该参数目前不支持修改，无需填写。备份频率，长度为7的数组，分别对应周日到周六的备份方式，full-全量备份，increment-增量备份</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setBackupWeekDays(array $BackupWeekDays) 设置<p>该参数目前不支持修改，无需填写。备份频率，长度为7的数组，分别对应周日到周六的备份方式，full-全量备份，increment-增量备份</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getBackupIntervalTime() 获取<p>间隔时间</p>
 * @method void setBackupIntervalTime(integer $BackupIntervalTime) 设置<p>间隔时间</p>
 * @method integer getReserveDuration() 获取<p>表示保留备份时长, 单位秒，超过该时间将被清理, 七天表示为3600247=604800，最大为158112000</p>
 * @method void setReserveDuration(integer $ReserveDuration) 设置<p>表示保留备份时长, 单位秒，超过该时间将被清理, 七天表示为3600247=604800，最大为158112000</p>
 * @method string getCrossRegionsEnable() 获取<p>跨地域备份开启<br>yes-开启<br>no-关闭</p>
 * @method void setCrossRegionsEnable(string $CrossRegionsEnable) 设置<p>跨地域备份开启<br>yes-开启<br>no-关闭</p>
 * @method array getCrossRegions() 获取<p>跨地域备份地域</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCrossRegions(array $CrossRegions) 设置<p>跨地域备份地域</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getCrossRegionSaveDays() 获取<p>跨地域备份保留时间</p><p>单位：天</p>
 * @method void setCrossRegionSaveDays(integer $CrossRegionSaveDays) 设置<p>跨地域备份保留时间</p><p>单位：天</p>
 * @method string getBackupTriggerStrategy() 获取<p>自动数据备份触发策略，periodically:自动周期备份,frequent:高频备份</p>
 * @method void setBackupTriggerStrategy(string $BackupTriggerStrategy) 设置<p>自动数据备份触发策略，periodically:自动周期备份,frequent:高频备份</p>
 * @method array getAutoCopyVaults() 获取<p>备份投递关系</p>
 * @method void setAutoCopyVaults(array $AutoCopyVaults) 设置<p>备份投递关系</p>
 */
class BackupConfigInfo extends AbstractModel
{
    /**
     * @var boolean <p>系统自动时间</p>
     */
    public $BackupCustomAutoTime;

    /**
     * @var integer <p>表示全备开始时间，[0-24*3600]， 如0:00, 1:00, 2:00 分别为 0，3600， 7200</p>
     */
    public $BackupTimeBeg;

    /**
     * @var integer <p>表示全备结束时间，[0-24*3600]， 如0:00, 1:00, 2:00 分别为 0，3600， 7200</p>
     */
    public $BackupTimeEnd;

    /**
     * @var array <p>该参数目前不支持修改，无需填写。备份频率，长度为7的数组，分别对应周日到周六的备份方式，full-全量备份，increment-增量备份</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $BackupWeekDays;

    /**
     * @var integer <p>间隔时间</p>
     */
    public $BackupIntervalTime;

    /**
     * @var integer <p>表示保留备份时长, 单位秒，超过该时间将被清理, 七天表示为3600247=604800，最大为158112000</p>
     */
    public $ReserveDuration;

    /**
     * @var string <p>跨地域备份开启<br>yes-开启<br>no-关闭</p>
     */
    public $CrossRegionsEnable;

    /**
     * @var array <p>跨地域备份地域</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CrossRegions;

    /**
     * @var integer <p>跨地域备份保留时间</p><p>单位：天</p>
     */
    public $CrossRegionSaveDays;

    /**
     * @var string <p>自动数据备份触发策略，periodically:自动周期备份,frequent:高频备份</p>
     */
    public $BackupTriggerStrategy;

    /**
     * @var array <p>备份投递关系</p>
     */
    public $AutoCopyVaults;

    /**
     * @param boolean $BackupCustomAutoTime <p>系统自动时间</p>
     * @param integer $BackupTimeBeg <p>表示全备开始时间，[0-24*3600]， 如0:00, 1:00, 2:00 分别为 0，3600， 7200</p>
     * @param integer $BackupTimeEnd <p>表示全备结束时间，[0-24*3600]， 如0:00, 1:00, 2:00 分别为 0，3600， 7200</p>
     * @param array $BackupWeekDays <p>该参数目前不支持修改，无需填写。备份频率，长度为7的数组，分别对应周日到周六的备份方式，full-全量备份，increment-增量备份</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $BackupIntervalTime <p>间隔时间</p>
     * @param integer $ReserveDuration <p>表示保留备份时长, 单位秒，超过该时间将被清理, 七天表示为3600247=604800，最大为158112000</p>
     * @param string $CrossRegionsEnable <p>跨地域备份开启<br>yes-开启<br>no-关闭</p>
     * @param array $CrossRegions <p>跨地域备份地域</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $CrossRegionSaveDays <p>跨地域备份保留时间</p><p>单位：天</p>
     * @param string $BackupTriggerStrategy <p>自动数据备份触发策略，periodically:自动周期备份,frequent:高频备份</p>
     * @param array $AutoCopyVaults <p>备份投递关系</p>
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

        if (array_key_exists("CrossRegionSaveDays",$param) and $param["CrossRegionSaveDays"] !== null) {
            $this->CrossRegionSaveDays = $param["CrossRegionSaveDays"];
        }

        if (array_key_exists("BackupTriggerStrategy",$param) and $param["BackupTriggerStrategy"] !== null) {
            $this->BackupTriggerStrategy = $param["BackupTriggerStrategy"];
        }

        if (array_key_exists("AutoCopyVaults",$param) and $param["AutoCopyVaults"] !== null) {
            $this->AutoCopyVaults = [];
            foreach ($param["AutoCopyVaults"] as $key => $value){
                $obj = new CreateBackupVaultItem();
                $obj->deserialize($value);
                array_push($this->AutoCopyVaults, $obj);
            }
        }
    }
}
