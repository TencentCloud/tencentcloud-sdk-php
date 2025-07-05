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
namespace TencentCloud\Es\V20180416\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 置放群组异步任务维护的时间段
 *
 * @method array getPeriods() 获取支持开启异步任务的日期
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPeriods(array $Periods) 设置支持开启异步任务的日期
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getTimeStart() 获取支持开启异步的开始时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTimeStart(string $TimeStart) 设置支持开启异步的开始时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getTimeEnd() 获取支持开启异步的结束时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTimeEnd(string $TimeEnd) 设置支持开启异步的结束时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getTimeZone() 获取支持开启异步的时区
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTimeZone(string $TimeZone) 设置支持开启异步的时区
注意：此字段可能返回 null，表示取不到有效值。
 */
class EnableScheduleOperationDuration extends AbstractModel
{
    /**
     * @var array 支持开启异步任务的日期
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Periods;

    /**
     * @var string 支持开启异步的开始时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TimeStart;

    /**
     * @var string 支持开启异步的结束时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TimeEnd;

    /**
     * @var string 支持开启异步的时区
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TimeZone;

    /**
     * @param array $Periods 支持开启异步任务的日期
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $TimeStart 支持开启异步的开始时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $TimeEnd 支持开启异步的结束时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $TimeZone 支持开启异步的时区
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
        if (array_key_exists("Periods",$param) and $param["Periods"] !== null) {
            $this->Periods = $param["Periods"];
        }

        if (array_key_exists("TimeStart",$param) and $param["TimeStart"] !== null) {
            $this->TimeStart = $param["TimeStart"];
        }

        if (array_key_exists("TimeEnd",$param) and $param["TimeEnd"] !== null) {
            $this->TimeEnd = $param["TimeEnd"];
        }

        if (array_key_exists("TimeZone",$param) and $param["TimeZone"] !== null) {
            $this->TimeZone = $param["TimeZone"];
        }
    }
}
