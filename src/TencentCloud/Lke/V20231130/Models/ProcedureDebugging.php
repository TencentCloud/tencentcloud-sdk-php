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
 * 调试信息
 *
 * @method string getContent() 获取检索query
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setContent(string $Content) 设置检索query
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getSystem() 获取系统prompt
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSystem(string $System) 设置系统prompt
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getHistories() 获取多轮历史信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setHistories(array $Histories) 设置多轮历史信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getKnowledge() 获取检索知识
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setKnowledge(array $Knowledge) 设置检索知识
注意：此字段可能返回 null，表示取不到有效值。
 * @method TaskFlowSummary getTaskFlow() 获取任务流程
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTaskFlow(TaskFlowSummary $TaskFlow) 设置任务流程
注意：此字段可能返回 null，表示取不到有效值。
 */
class ProcedureDebugging extends AbstractModel
{
    /**
     * @var string 检索query
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Content;

    /**
     * @var string 系统prompt
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $System;

    /**
     * @var array 多轮历史信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Histories;

    /**
     * @var array 检索知识
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Knowledge;

    /**
     * @var TaskFlowSummary 任务流程
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TaskFlow;

    /**
     * @param string $Content 检索query
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $System 系统prompt
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $Histories 多轮历史信息
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $Knowledge 检索知识
注意：此字段可能返回 null，表示取不到有效值。
     * @param TaskFlowSummary $TaskFlow 任务流程
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
        if (array_key_exists("Content",$param) and $param["Content"] !== null) {
            $this->Content = $param["Content"];
        }

        if (array_key_exists("System",$param) and $param["System"] !== null) {
            $this->System = $param["System"];
        }

        if (array_key_exists("Histories",$param) and $param["Histories"] !== null) {
            $this->Histories = [];
            foreach ($param["Histories"] as $key => $value){
                $obj = new HistorySummary();
                $obj->deserialize($value);
                array_push($this->Histories, $obj);
            }
        }

        if (array_key_exists("Knowledge",$param) and $param["Knowledge"] !== null) {
            $this->Knowledge = [];
            foreach ($param["Knowledge"] as $key => $value){
                $obj = new KnowledgeSummary();
                $obj->deserialize($value);
                array_push($this->Knowledge, $obj);
            }
        }

        if (array_key_exists("TaskFlow",$param) and $param["TaskFlow"] !== null) {
            $this->TaskFlow = new TaskFlowSummary();
            $this->TaskFlow->deserialize($param["TaskFlow"]);
        }
    }
}
