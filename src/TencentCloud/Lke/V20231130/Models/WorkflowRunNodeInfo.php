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
namespace TencentCloud\Lke\V20231130\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 工作流运行节点信息
 *
 * @method string getNodeId() 获取节点ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setNodeId(string $NodeId) 设置节点ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getNodeType() 获取节点类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setNodeType(integer $NodeType) 设置节点类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getNodeName() 获取节点名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setNodeName(string $NodeName) 设置节点名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getStatus() 获取状态
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setStatus(integer $Status) 设置状态
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getInput() 获取输入
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setInput(string $Input) 设置输入
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getOutput() 获取输出
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setOutput(string $Output) 设置输出
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getTaskOutput() 获取任务输出
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTaskOutput(string $TaskOutput) 设置任务输出
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getFailMessage() 获取错误信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setFailMessage(string $FailMessage) 设置错误信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getCostMilliSeconds() 获取花费时长
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCostMilliSeconds(integer $CostMilliSeconds) 设置花费时长
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getStatisticInfos() 获取大模型输出信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setStatisticInfos(array $StatisticInfos) 设置大模型输出信息
注意：此字段可能返回 null，表示取不到有效值。
 */
class WorkflowRunNodeInfo extends AbstractModel
{
    /**
     * @var string 节点ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $NodeId;

    /**
     * @var integer 节点类型
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $NodeType;

    /**
     * @var string 节点名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $NodeName;

    /**
     * @var integer 状态
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Status;

    /**
     * @var string 输入
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Input;

    /**
     * @var string 输出
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Output;

    /**
     * @var string 任务输出
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TaskOutput;

    /**
     * @var string 错误信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $FailMessage;

    /**
     * @var integer 花费时长
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CostMilliSeconds;

    /**
     * @var array 大模型输出信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $StatisticInfos;

    /**
     * @param string $NodeId 节点ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $NodeType 节点类型
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $NodeName 节点名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Status 状态
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Input 输入
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Output 输出
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $TaskOutput 任务输出
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $FailMessage 错误信息
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $CostMilliSeconds 花费时长
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $StatisticInfos 大模型输出信息
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
        if (array_key_exists("NodeId",$param) and $param["NodeId"] !== null) {
            $this->NodeId = $param["NodeId"];
        }

        if (array_key_exists("NodeType",$param) and $param["NodeType"] !== null) {
            $this->NodeType = $param["NodeType"];
        }

        if (array_key_exists("NodeName",$param) and $param["NodeName"] !== null) {
            $this->NodeName = $param["NodeName"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("Input",$param) and $param["Input"] !== null) {
            $this->Input = $param["Input"];
        }

        if (array_key_exists("Output",$param) and $param["Output"] !== null) {
            $this->Output = $param["Output"];
        }

        if (array_key_exists("TaskOutput",$param) and $param["TaskOutput"] !== null) {
            $this->TaskOutput = $param["TaskOutput"];
        }

        if (array_key_exists("FailMessage",$param) and $param["FailMessage"] !== null) {
            $this->FailMessage = $param["FailMessage"];
        }

        if (array_key_exists("CostMilliSeconds",$param) and $param["CostMilliSeconds"] !== null) {
            $this->CostMilliSeconds = $param["CostMilliSeconds"];
        }

        if (array_key_exists("StatisticInfos",$param) and $param["StatisticInfos"] !== null) {
            $this->StatisticInfos = [];
            foreach ($param["StatisticInfos"] as $key => $value){
                $obj = new StatisticInfo();
                $obj->deserialize($value);
                array_push($this->StatisticInfos, $obj);
            }
        }
    }
}
