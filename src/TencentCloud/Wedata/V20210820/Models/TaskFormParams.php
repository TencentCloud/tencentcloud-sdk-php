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
 * 任务参数
 *
 * @method string getTaskId() 获取任务ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTaskId(string $TaskId) 设置任务ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getMapParamList() 获取参数值
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMapParamList(array $MapParamList) 设置参数值
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getWorkflowId() 获取工作流ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setWorkflowId(string $WorkflowId) 设置工作流ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getWorkflowName() 获取工作流名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setWorkflowName(string $WorkflowName) 设置工作流名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getInChargeId() 获取负责人ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setInChargeId(string $InChargeId) 设置负责人ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getInCharge() 获取负责人名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setInCharge(string $InCharge) 设置负责人名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getTaskName() 获取任务名
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTaskName(string $TaskName) 设置任务名
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getProductName() 获取任务类型
普通任务：dev
子任务：dev_container
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setProductName(string $ProductName) 设置任务类型
普通任务：dev
子任务：dev_container
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getLatestSavedVersion() 获取如果最新保存版本和调度版本不一致，显示最新保存版本
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLatestSavedVersion(string $LatestSavedVersion) 设置如果最新保存版本和调度版本不一致，显示最新保存版本
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getLatestSavedVersionId() 获取保存版本ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLatestSavedVersionId(string $LatestSavedVersionId) 设置保存版本ID
注意：此字段可能返回 null，表示取不到有效值。
 */
class TaskFormParams extends AbstractModel
{
    /**
     * @var string 任务ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TaskId;

    /**
     * @var array 参数值
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $MapParamList;

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
     * @var string 负责人ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $InChargeId;

    /**
     * @var string 负责人名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $InCharge;

    /**
     * @var string 任务名
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TaskName;

    /**
     * @var string 任务类型
普通任务：dev
子任务：dev_container
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ProductName;

    /**
     * @var string 如果最新保存版本和调度版本不一致，显示最新保存版本
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $LatestSavedVersion;

    /**
     * @var string 保存版本ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $LatestSavedVersionId;

    /**
     * @param string $TaskId 任务ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $MapParamList 参数值
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $WorkflowId 工作流ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $WorkflowName 工作流名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $InChargeId 负责人ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $InCharge 负责人名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $TaskName 任务名
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ProductName 任务类型
普通任务：dev
子任务：dev_container
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $LatestSavedVersion 如果最新保存版本和调度版本不一致，显示最新保存版本
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $LatestSavedVersionId 保存版本ID
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
        if (array_key_exists("TaskId",$param) and $param["TaskId"] !== null) {
            $this->TaskId = $param["TaskId"];
        }

        if (array_key_exists("MapParamList",$param) and $param["MapParamList"] !== null) {
            $this->MapParamList = [];
            foreach ($param["MapParamList"] as $key => $value){
                $obj = new ParamMapDsDto();
                $obj->deserialize($value);
                array_push($this->MapParamList, $obj);
            }
        }

        if (array_key_exists("WorkflowId",$param) and $param["WorkflowId"] !== null) {
            $this->WorkflowId = $param["WorkflowId"];
        }

        if (array_key_exists("WorkflowName",$param) and $param["WorkflowName"] !== null) {
            $this->WorkflowName = $param["WorkflowName"];
        }

        if (array_key_exists("InChargeId",$param) and $param["InChargeId"] !== null) {
            $this->InChargeId = $param["InChargeId"];
        }

        if (array_key_exists("InCharge",$param) and $param["InCharge"] !== null) {
            $this->InCharge = $param["InCharge"];
        }

        if (array_key_exists("TaskName",$param) and $param["TaskName"] !== null) {
            $this->TaskName = $param["TaskName"];
        }

        if (array_key_exists("ProductName",$param) and $param["ProductName"] !== null) {
            $this->ProductName = $param["ProductName"];
        }

        if (array_key_exists("LatestSavedVersion",$param) and $param["LatestSavedVersion"] !== null) {
            $this->LatestSavedVersion = $param["LatestSavedVersion"];
        }

        if (array_key_exists("LatestSavedVersionId",$param) and $param["LatestSavedVersionId"] !== null) {
            $this->LatestSavedVersionId = $param["LatestSavedVersionId"];
        }
    }
}
