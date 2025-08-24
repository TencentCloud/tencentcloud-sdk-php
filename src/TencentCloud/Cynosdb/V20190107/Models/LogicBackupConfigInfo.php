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
 * @method string getLogicBackupEnable() 获取是否开启自动逻辑备份
 * @method void setLogicBackupEnable(string $LogicBackupEnable) 设置是否开启自动逻辑备份
 * @method integer getLogicBackupTimeBeg() 获取自动逻辑备份开始时间
 * @method void setLogicBackupTimeBeg(integer $LogicBackupTimeBeg) 设置自动逻辑备份开始时间
 * @method integer getLogicBackupTimeEnd() 获取自动逻辑备份结束时间
 * @method void setLogicBackupTimeEnd(integer $LogicBackupTimeEnd) 设置自动逻辑备份结束时间
 * @method integer getLogicReserveDuration() 获取自动逻辑备份保留时间
单位：秒
 * @method void setLogicReserveDuration(integer $LogicReserveDuration) 设置自动逻辑备份保留时间
单位：秒
 * @method string getLogicCrossRegionsEnable() 获取是否开启跨地域逻辑备份
可选值：ON/OFF
 * @method void setLogicCrossRegionsEnable(string $LogicCrossRegionsEnable) 设置是否开启跨地域逻辑备份
可选值：ON/OFF
 * @method array getLogicCrossRegions() 获取逻辑备份所跨地域
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLogicCrossRegions(array $LogicCrossRegions) 设置逻辑备份所跨地域
注意：此字段可能返回 null，表示取不到有效值。
 */
class LogicBackupConfigInfo extends AbstractModel
{
    /**
     * @var string 是否开启自动逻辑备份
     */
    public $LogicBackupEnable;

    /**
     * @var integer 自动逻辑备份开始时间
     */
    public $LogicBackupTimeBeg;

    /**
     * @var integer 自动逻辑备份结束时间
     */
    public $LogicBackupTimeEnd;

    /**
     * @var integer 自动逻辑备份保留时间
单位：秒
     */
    public $LogicReserveDuration;

    /**
     * @var string 是否开启跨地域逻辑备份
可选值：ON/OFF
     */
    public $LogicCrossRegionsEnable;

    /**
     * @var array 逻辑备份所跨地域
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $LogicCrossRegions;

    /**
     * @param string $LogicBackupEnable 是否开启自动逻辑备份
     * @param integer $LogicBackupTimeBeg 自动逻辑备份开始时间
     * @param integer $LogicBackupTimeEnd 自动逻辑备份结束时间
     * @param integer $LogicReserveDuration 自动逻辑备份保留时间
单位：秒
     * @param string $LogicCrossRegionsEnable 是否开启跨地域逻辑备份
可选值：ON/OFF
     * @param array $LogicCrossRegions 逻辑备份所跨地域
注意：此字段可能返回 null，表示取不到有效值。
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
    }
}
