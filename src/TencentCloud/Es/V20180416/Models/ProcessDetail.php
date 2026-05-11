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
 * 任务进度详情
 *
 * @method integer getCompleted() 获取<p>已完成数量</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCompleted(integer $Completed) 设置<p>已完成数量</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getRemain() 获取<p>剩余数量</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRemain(integer $Remain) 设置<p>剩余数量</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getTotal() 获取<p>总数量</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTotal(integer $Total) 设置<p>总数量</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getTaskType() 获取<p>任务类型：<br>60：重启型任务<br>70：分片迁移型任务<br>80：节点变配任务</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTaskType(integer $TaskType) 设置<p>任务类型：<br>60：重启型任务<br>70：分片迁移型任务<br>80：节点变配任务</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getEstimatedTimeRemaining() 获取<p>预估剩余时间</p><p>单位：秒</p>
 * @method void setEstimatedTimeRemaining(integer $EstimatedTimeRemaining) 设置<p>预估剩余时间</p><p>单位：秒</p>
 */
class ProcessDetail extends AbstractModel
{
    /**
     * @var integer <p>已完成数量</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Completed;

    /**
     * @var integer <p>剩余数量</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Remain;

    /**
     * @var integer <p>总数量</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Total;

    /**
     * @var integer <p>任务类型：<br>60：重启型任务<br>70：分片迁移型任务<br>80：节点变配任务</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TaskType;

    /**
     * @var integer <p>预估剩余时间</p><p>单位：秒</p>
     */
    public $EstimatedTimeRemaining;

    /**
     * @param integer $Completed <p>已完成数量</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Remain <p>剩余数量</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Total <p>总数量</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $TaskType <p>任务类型：<br>60：重启型任务<br>70：分片迁移型任务<br>80：节点变配任务</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $EstimatedTimeRemaining <p>预估剩余时间</p><p>单位：秒</p>
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
        if (array_key_exists("Completed",$param) and $param["Completed"] !== null) {
            $this->Completed = $param["Completed"];
        }

        if (array_key_exists("Remain",$param) and $param["Remain"] !== null) {
            $this->Remain = $param["Remain"];
        }

        if (array_key_exists("Total",$param) and $param["Total"] !== null) {
            $this->Total = $param["Total"];
        }

        if (array_key_exists("TaskType",$param) and $param["TaskType"] !== null) {
            $this->TaskType = $param["TaskType"];
        }

        if (array_key_exists("EstimatedTimeRemaining",$param) and $param["EstimatedTimeRemaining"] !== null) {
            $this->EstimatedTimeRemaining = $param["EstimatedTimeRemaining"];
        }
    }
}
