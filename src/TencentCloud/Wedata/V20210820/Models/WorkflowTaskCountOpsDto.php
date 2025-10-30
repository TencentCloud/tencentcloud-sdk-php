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
 * 工作流任务统计
 *
 * @method integer getCount() 获取工作流任务数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCount(integer $Count) 设置工作流任务数
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getTypeCount() 获取任务类型维度统计
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTypeCount(array $TypeCount) 设置任务类型维度统计
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getCycleCount() 获取任务周期类型维度统计
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCycleCount(array $CycleCount) 设置任务周期类型维度统计
注意：此字段可能返回 null，表示取不到有效值。
 */
class WorkflowTaskCountOpsDto extends AbstractModel
{
    /**
     * @var integer 工作流任务数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Count;

    /**
     * @var array 任务类型维度统计
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TypeCount;

    /**
     * @var array 任务周期类型维度统计
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CycleCount;

    /**
     * @param integer $Count 工作流任务数
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $TypeCount 任务类型维度统计
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $CycleCount 任务周期类型维度统计
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
        if (array_key_exists("Count",$param) and $param["Count"] !== null) {
            $this->Count = $param["Count"];
        }

        if (array_key_exists("TypeCount",$param) and $param["TypeCount"] !== null) {
            $this->TypeCount = [];
            foreach ($param["TypeCount"] as $key => $value){
                $obj = new PairDto();
                $obj->deserialize($value);
                array_push($this->TypeCount, $obj);
            }
        }

        if (array_key_exists("CycleCount",$param) and $param["CycleCount"] !== null) {
            $this->CycleCount = [];
            foreach ($param["CycleCount"] as $key => $value){
                $obj = new PairDto();
                $obj->deserialize($value);
                array_push($this->CycleCount, $obj);
            }
        }
    }
}
