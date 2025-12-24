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
namespace TencentCloud\Wedata\V20210820\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 告警免打扰时间区间
 *
 * @method array getDaysOfWeek() 获取ISO标准，1表示周一，7表示周日。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDaysOfWeek(array $DaysOfWeek) 设置ISO标准，1表示周一，7表示周日。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getStartTime() 获取开始时间，精度时分秒，格式 HH:mm:ss
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setStartTime(string $StartTime) 设置开始时间，精度时分秒，格式 HH:mm:ss
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getEndTime() 获取结束时间，精度时分秒，格式 HH:mm:ss
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setEndTime(string $EndTime) 设置结束时间，精度时分秒，格式 HH:mm:ss
注意：此字段可能返回 null，表示取不到有效值。
 */
class AlarmQuietInterval extends AbstractModel
{
    /**
     * @var array ISO标准，1表示周一，7表示周日。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DaysOfWeek;

    /**
     * @var string 开始时间，精度时分秒，格式 HH:mm:ss
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $StartTime;

    /**
     * @var string 结束时间，精度时分秒，格式 HH:mm:ss
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $EndTime;

    /**
     * @param array $DaysOfWeek ISO标准，1表示周一，7表示周日。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $StartTime 开始时间，精度时分秒，格式 HH:mm:ss
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $EndTime 结束时间，精度时分秒，格式 HH:mm:ss
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
        if (array_key_exists("DaysOfWeek",$param) and $param["DaysOfWeek"] !== null) {
            $this->DaysOfWeek = $param["DaysOfWeek"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }
    }
}
