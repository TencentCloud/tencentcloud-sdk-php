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
namespace TencentCloud\Workbuddyenterprise\V20260709\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 定时任务执行聚合统计
 *
 * @method integer getTotalCount() 获取<p>总执行次数</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTotalCount(integer $TotalCount) 设置<p>总执行次数</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getSuccessCount() 获取<p>成功次数</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSuccessCount(integer $SuccessCount) 设置<p>成功次数</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getFailedCount() 获取<p>失败次数</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setFailedCount(integer $FailedCount) 设置<p>失败次数</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getAvgDurationMs() 获取<p>平均执行时长（毫秒）</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAvgDurationMs(integer $AvgDurationMs) 设置<p>平均执行时长（毫秒）</p>
注意：此字段可能返回 null，表示取不到有效值。
 */
class ScheduledTaskLogStats extends AbstractModel
{
    /**
     * @var integer <p>总执行次数</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TotalCount;

    /**
     * @var integer <p>成功次数</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SuccessCount;

    /**
     * @var integer <p>失败次数</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $FailedCount;

    /**
     * @var integer <p>平均执行时长（毫秒）</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AvgDurationMs;

    /**
     * @param integer $TotalCount <p>总执行次数</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $SuccessCount <p>成功次数</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $FailedCount <p>失败次数</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $AvgDurationMs <p>平均执行时长（毫秒）</p>
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
        if (array_key_exists("TotalCount",$param) and $param["TotalCount"] !== null) {
            $this->TotalCount = $param["TotalCount"];
        }

        if (array_key_exists("SuccessCount",$param) and $param["SuccessCount"] !== null) {
            $this->SuccessCount = $param["SuccessCount"];
        }

        if (array_key_exists("FailedCount",$param) and $param["FailedCount"] !== null) {
            $this->FailedCount = $param["FailedCount"];
        }

        if (array_key_exists("AvgDurationMs",$param) and $param["AvgDurationMs"] !== null) {
            $this->AvgDurationMs = $param["AvgDurationMs"];
        }
    }
}
