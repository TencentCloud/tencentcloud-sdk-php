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
 * 逻辑备份配置信息
 *
 * @method string getLogicBackupEnable() 获取<p>是否开启自动逻辑备份</p>
 * @method void setLogicBackupEnable(string $LogicBackupEnable) 设置<p>是否开启自动逻辑备份</p>
 * @method integer getLogicBackupTimeBeg() 获取<p>自动逻辑备份开始时间</p>
 * @method void setLogicBackupTimeBeg(integer $LogicBackupTimeBeg) 设置<p>自动逻辑备份开始时间</p>
 * @method integer getLogicBackupTimeEnd() 获取<p>自动逻辑备份结束时间</p>
 * @method void setLogicBackupTimeEnd(integer $LogicBackupTimeEnd) 设置<p>自动逻辑备份结束时间</p>
 * @method integer getLogicReserveDuration() 获取<p>自动逻辑备份保留时间<br>单位：秒</p>
 * @method void setLogicReserveDuration(integer $LogicReserveDuration) 设置<p>自动逻辑备份保留时间<br>单位：秒</p>
 * @method string getLogicCrossRegionsEnable() 获取<p>是否开启跨地域逻辑备份<br>可选值：ON/OFF</p>
 * @method void setLogicCrossRegionsEnable(string $LogicCrossRegionsEnable) 设置<p>是否开启跨地域逻辑备份<br>可选值：ON/OFF</p>
 * @method array getLogicCrossRegions() 获取<p>逻辑备份所跨地域</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLogicCrossRegions(array $LogicCrossRegions) 设置<p>逻辑备份所跨地域</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getAutoCopyVaults() 获取<p>备份投递关系</p>
 * @method void setAutoCopyVaults(array $AutoCopyVaults) 设置<p>备份投递关系</p>
 * @method integer getLogicCrossRegionSaveDays() 获取<p>天</p><p>单位：跨地域逻辑备份保留时间</p>
 * @method void setLogicCrossRegionSaveDays(integer $LogicCrossRegionSaveDays) 设置<p>天</p><p>单位：跨地域逻辑备份保留时间</p>
 */
class LogicBackupConfigInfo extends AbstractModel
{
    /**
     * @var string <p>是否开启自动逻辑备份</p>
     */
    public $LogicBackupEnable;

    /**
     * @var integer <p>自动逻辑备份开始时间</p>
     */
    public $LogicBackupTimeBeg;

    /**
     * @var integer <p>自动逻辑备份结束时间</p>
     */
    public $LogicBackupTimeEnd;

    /**
     * @var integer <p>自动逻辑备份保留时间<br>单位：秒</p>
     */
    public $LogicReserveDuration;

    /**
     * @var string <p>是否开启跨地域逻辑备份<br>可选值：ON/OFF</p>
     */
    public $LogicCrossRegionsEnable;

    /**
     * @var array <p>逻辑备份所跨地域</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $LogicCrossRegions;

    /**
     * @var array <p>备份投递关系</p>
     */
    public $AutoCopyVaults;

    /**
     * @var integer <p>天</p><p>单位：跨地域逻辑备份保留时间</p>
     */
    public $LogicCrossRegionSaveDays;

    /**
     * @param string $LogicBackupEnable <p>是否开启自动逻辑备份</p>
     * @param integer $LogicBackupTimeBeg <p>自动逻辑备份开始时间</p>
     * @param integer $LogicBackupTimeEnd <p>自动逻辑备份结束时间</p>
     * @param integer $LogicReserveDuration <p>自动逻辑备份保留时间<br>单位：秒</p>
     * @param string $LogicCrossRegionsEnable <p>是否开启跨地域逻辑备份<br>可选值：ON/OFF</p>
     * @param array $LogicCrossRegions <p>逻辑备份所跨地域</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $AutoCopyVaults <p>备份投递关系</p>
     * @param integer $LogicCrossRegionSaveDays <p>天</p><p>单位：跨地域逻辑备份保留时间</p>
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
        if (array_key_exists("LogicBackupEnable",$param) and $param["LogicBackupEnable"] !== null) {
            $this->LogicBackupEnable = $param["LogicBackupEnable"];
        }

        if (array_key_exists("LogicBackupTimeBeg",$param) and $param["LogicBackupTimeBeg"] !== null) {
            $this->LogicBackupTimeBeg = $param["LogicBackupTimeBeg"];
        }

        if (array_key_exists("LogicBackupTimeEnd",$param) and $param["LogicBackupTimeEnd"] !== null) {
            $this->LogicBackupTimeEnd = $param["LogicBackupTimeEnd"];
        }

        if (array_key_exists("LogicReserveDuration",$param) and $param["LogicReserveDuration"] !== null) {
            $this->LogicReserveDuration = $param["LogicReserveDuration"];
        }

        if (array_key_exists("LogicCrossRegionsEnable",$param) and $param["LogicCrossRegionsEnable"] !== null) {
            $this->LogicCrossRegionsEnable = $param["LogicCrossRegionsEnable"];
        }

        if (array_key_exists("LogicCrossRegions",$param) and $param["LogicCrossRegions"] !== null) {
            $this->LogicCrossRegions = $param["LogicCrossRegions"];
        }

        if (array_key_exists("AutoCopyVaults",$param) and $param["AutoCopyVaults"] !== null) {
            $this->AutoCopyVaults = [];
            foreach ($param["AutoCopyVaults"] as $key => $value){
                $obj = new CreateBackupVaultItem();
                $obj->deserialize($value);
                array_push($this->AutoCopyVaults, $obj);
            }
        }

        if (array_key_exists("LogicCrossRegionSaveDays",$param) and $param["LogicCrossRegionSaveDays"] !== null) {
            $this->LogicCrossRegionSaveDays = $param["LogicCrossRegionSaveDays"];
        }
    }
}
