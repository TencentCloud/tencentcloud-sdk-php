<?php
/*
 * Copyright (c) 2017-2018 THL A29 Limited, a Tencent company. All Rights Reserved.
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
 * @method integer getCompleted() 获取已完成数量
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCompleted(integer $Completed) 设置已完成数量
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getRemain() 获取剩余数量
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRemain(integer $Remain) 设置剩余数量
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getTotal() 获取总数量
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTotal(integer $Total) 设置总数量
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getTaskType() 获取任务类型：
60：重启型任务
70：分片迁移型任务
80：节点变配任务
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTaskType(integer $TaskType) 设置任务类型：
60：重启型任务
70：分片迁移型任务
80：节点变配任务
注意：此字段可能返回 null，表示取不到有效值。
 */
class ProcessDetail extends AbstractModel
{
    /**
     * @var integer 已完成数量
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Completed;

    /**
     * @var integer 剩余数量
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Remain;

    /**
     * @var integer 总数量
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Total;

    /**
     * @var integer 任务类型：
60：重启型任务
70：分片迁移型任务
80：节点变配任务
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TaskType;

    /**
     * @param integer $Completed 已完成数量
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Remain 剩余数量
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Total 总数量
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $TaskType 任务类型：
60：重启型任务
70：分片迁移型任务
80：节点变配任务
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
    }
}
