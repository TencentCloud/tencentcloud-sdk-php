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
namespace TencentCloud\Tke\V20220501\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 托管节点池运维窗口设置
 *
 * @method string getAutoUpgradeStartTime() 获取自动升级开始时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAutoUpgradeStartTime(string $AutoUpgradeStartTime) 设置自动升级开始时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDuration() 获取自动升级持续时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDuration(string $Duration) 设置自动升级持续时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getWeeklyPeriod() 获取运维日期
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setWeeklyPeriod(array $WeeklyPeriod) 设置运维日期
注意：此字段可能返回 null，表示取不到有效值。
 */
class AutoUpgradeOptions extends AbstractModel
{
    /**
     * @var string 自动升级开始时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AutoUpgradeStartTime;

    /**
     * @var string 自动升级持续时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Duration;

    /**
     * @var array 运维日期
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $WeeklyPeriod;

    /**
     * @param string $AutoUpgradeStartTime 自动升级开始时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Duration 自动升级持续时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $WeeklyPeriod 运维日期
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
        if (array_key_exists("AutoUpgradeStartTime",$param) and $param["AutoUpgradeStartTime"] !== null) {
            $this->AutoUpgradeStartTime = $param["AutoUpgradeStartTime"];
        }

        if (array_key_exists("Duration",$param) and $param["Duration"] !== null) {
            $this->Duration = $param["Duration"];
        }

        if (array_key_exists("WeeklyPeriod",$param) and $param["WeeklyPeriod"] !== null) {
            $this->WeeklyPeriod = $param["WeeklyPeriod"];
        }
    }
}
