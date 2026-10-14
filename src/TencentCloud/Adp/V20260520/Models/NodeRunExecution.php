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
namespace TencentCloud\Adp\V20260520\Models;
use TencentCloud\Common\AbstractModel;

/**
 * NodeRunExecution
 *
 * @method BatchRunSummary getBatchRunSummary() 获取<p>批次运行汇总</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setBatchRunSummary(BatchRunSummary $BatchRunSummary) 设置<p>批次运行汇总</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getEndTime() 获取<p>结束时间（毫秒时间戳）</p>
 * @method void setEndTime(string $EndTime) 设置<p>结束时间（毫秒时间戳）</p>
 * @method string getStartTime() 获取<p>开始时间（毫秒时间戳）</p>
 * @method void setStartTime(string $StartTime) 设置<p>开始时间（毫秒时间戳）</p>
 */
class NodeRunExecution extends AbstractModel
{
    /**
     * @var BatchRunSummary <p>批次运行汇总</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $BatchRunSummary;

    /**
     * @var string <p>结束时间（毫秒时间戳）</p>
     */
    public $EndTime;

    /**
     * @var string <p>开始时间（毫秒时间戳）</p>
     */
    public $StartTime;

    /**
     * @param BatchRunSummary $BatchRunSummary <p>批次运行汇总</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $EndTime <p>结束时间（毫秒时间戳）</p>
     * @param string $StartTime <p>开始时间（毫秒时间戳）</p>
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
        if (array_key_exists("BatchRunSummary",$param) and $param["BatchRunSummary"] !== null) {
            $this->BatchRunSummary = new BatchRunSummary();
            $this->BatchRunSummary->deserialize($param["BatchRunSummary"]);
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }
    }
}
