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
namespace TencentCloud\Lke\V20231130\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 任务流程调试信息
 *
 * @method string getIntentName() 获取任务流程名
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIntentName(string $IntentName) 设置任务流程名
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getUpdatedSlotValues() 获取实体列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUpdatedSlotValues(array $UpdatedSlotValues) 设置实体列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getRunNodes() 获取节点列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRunNodes(array $RunNodes) 设置节点列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getPurposes() 获取意图判断
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPurposes(array $Purposes) 设置意图判断
注意：此字段可能返回 null，表示取不到有效值。
 */
class TaskFlowSummary extends AbstractModel
{
    /**
     * @var string 任务流程名
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $IntentName;

    /**
     * @var array 实体列表
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $UpdatedSlotValues;

    /**
     * @var array 节点列表
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RunNodes;

    /**
     * @var array 意图判断
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Purposes;

    /**
     * @param string $IntentName 任务流程名
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $UpdatedSlotValues 实体列表
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $RunNodes 节点列表
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $Purposes 意图判断
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
        if (array_key_exists("IntentName",$param) and $param["IntentName"] !== null) {
            $this->IntentName = $param["IntentName"];
        }

        if (array_key_exists("UpdatedSlotValues",$param) and $param["UpdatedSlotValues"] !== null) {
            $this->UpdatedSlotValues = [];
            foreach ($param["UpdatedSlotValues"] as $key => $value){
                $obj = new ValueInfo();
                $obj->deserialize($value);
                array_push($this->UpdatedSlotValues, $obj);
            }
        }

        if (array_key_exists("RunNodes",$param) and $param["RunNodes"] !== null) {
            $this->RunNodes = [];
            foreach ($param["RunNodes"] as $key => $value){
                $obj = new RunNodeInfo();
                $obj->deserialize($value);
                array_push($this->RunNodes, $obj);
            }
        }

        if (array_key_exists("Purposes",$param) and $param["Purposes"] !== null) {
            $this->Purposes = $param["Purposes"];
        }
    }
}
