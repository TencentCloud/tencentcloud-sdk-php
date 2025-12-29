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
 * 工作流信息
 *
 * @method string getWorkflowId() 获取工作流ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setWorkflowId(string $WorkflowId) 设置工作流ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getWorkflowName() 获取工作流名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setWorkflowName(string $WorkflowName) 设置工作流名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getWorkflowRunId() 获取工作流运行ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setWorkflowRunId(string $WorkflowRunId) 设置工作流运行ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getOptionCards() 获取选项卡
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setOptionCards(array $OptionCards) 设置选项卡
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getOutputs() 获取多气泡的输出结果
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setOutputs(array $Outputs) 设置多气泡的输出结果
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getWorkflowReleaseTime() 获取工作流发布时间，unix时间戳
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setWorkflowReleaseTime(string $WorkflowReleaseTime) 设置工作流发布时间，unix时间戳
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getContents() 获取工作流多气泡输出
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setContents(array $Contents) 设置工作流多气泡输出
注意：此字段可能返回 null，表示取不到有效值。
 */
class WorkflowInfo extends AbstractModel
{
    /**
     * @var string 工作流ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $WorkflowId;

    /**
     * @var string 工作流名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $WorkflowName;

    /**
     * @var string 工作流运行ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $WorkflowRunId;

    /**
     * @var array 选项卡
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $OptionCards;

    /**
     * @var array 多气泡的输出结果
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Outputs;

    /**
     * @var string 工作流发布时间，unix时间戳
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $WorkflowReleaseTime;

    /**
     * @var array 工作流多气泡输出
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Contents;

    /**
     * @param string $WorkflowId 工作流ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $WorkflowName 工作流名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $WorkflowRunId 工作流运行ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $OptionCards 选项卡
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $Outputs 多气泡的输出结果
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $WorkflowReleaseTime 工作流发布时间，unix时间戳
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $Contents 工作流多气泡输出
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
        if (array_key_exists("WorkflowId",$param) and $param["WorkflowId"] !== null) {
            $this->WorkflowId = $param["WorkflowId"];
        }

        if (array_key_exists("WorkflowName",$param) and $param["WorkflowName"] !== null) {
            $this->WorkflowName = $param["WorkflowName"];
        }

        if (array_key_exists("WorkflowRunId",$param) and $param["WorkflowRunId"] !== null) {
            $this->WorkflowRunId = $param["WorkflowRunId"];
        }

        if (array_key_exists("OptionCards",$param) and $param["OptionCards"] !== null) {
            $this->OptionCards = $param["OptionCards"];
        }

        if (array_key_exists("Outputs",$param) and $param["Outputs"] !== null) {
            $this->Outputs = $param["Outputs"];
        }

        if (array_key_exists("WorkflowReleaseTime",$param) and $param["WorkflowReleaseTime"] !== null) {
            $this->WorkflowReleaseTime = $param["WorkflowReleaseTime"];
        }

        if (array_key_exists("Contents",$param) and $param["Contents"] !== null) {
            $this->Contents = [];
            foreach ($param["Contents"] as $key => $value){
                $obj = new Content();
                $obj->deserialize($value);
                array_push($this->Contents, $obj);
            }
        }
    }
}
