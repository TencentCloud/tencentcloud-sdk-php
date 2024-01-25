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
namespace TencentCloud\Wedata\V20210820\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 工作流列表信息-项目克隆使用
 *
 * @method string getWorkflowId() 获取工作流id
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setWorkflowId(string $WorkflowId) 设置工作流id
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getWorkflowName() 获取工作流名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setWorkflowName(string $WorkflowName) 设置工作流名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getFolder() 获取文件夹名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setFolder(string $Folder) 设置文件夹名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getTaskNum() 获取任务数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTaskNum(integer $TaskNum) 设置任务数
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getOwner() 获取责任人id
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setOwner(string $Owner) 设置责任人id
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getOwnerName() 获取责任人名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setOwnerName(string $OwnerName) 设置责任人名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getLatestSubmitTime() 获取工作流最近一次提交时间（未提交则为 null）
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLatestSubmitTime(string $LatestSubmitTime) 设置工作流最近一次提交时间（未提交则为 null）
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getTasks() 获取工作流任务列表（当前未使用）
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTasks(array $Tasks) 设置工作流任务列表（当前未使用）
注意：此字段可能返回 null，表示取不到有效值。
 */
class ProjectCloneWorkflowInfo extends AbstractModel
{
    /**
     * @var string 工作流id
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $WorkflowId;

    /**
     * @var string 工作流名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $WorkflowName;

    /**
     * @var string 文件夹名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Folder;

    /**
     * @var integer 任务数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TaskNum;

    /**
     * @var string 责任人id
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Owner;

    /**
     * @var string 责任人名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $OwnerName;

    /**
     * @var string 工作流最近一次提交时间（未提交则为 null）
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $LatestSubmitTime;

    /**
     * @var array 工作流任务列表（当前未使用）
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Tasks;

    /**
     * @param string $WorkflowId 工作流id
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $WorkflowName 工作流名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Folder 文件夹名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $TaskNum 任务数
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Owner 责任人id
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $OwnerName 责任人名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $LatestSubmitTime 工作流最近一次提交时间（未提交则为 null）
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $Tasks 工作流任务列表（当前未使用）
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

        if (array_key_exists("Folder",$param) and $param["Folder"] !== null) {
            $this->Folder = $param["Folder"];
        }

        if (array_key_exists("TaskNum",$param) and $param["TaskNum"] !== null) {
            $this->TaskNum = $param["TaskNum"];
        }

        if (array_key_exists("Owner",$param) and $param["Owner"] !== null) {
            $this->Owner = $param["Owner"];
        }

        if (array_key_exists("OwnerName",$param) and $param["OwnerName"] !== null) {
            $this->OwnerName = $param["OwnerName"];
        }

        if (array_key_exists("LatestSubmitTime",$param) and $param["LatestSubmitTime"] !== null) {
            $this->LatestSubmitTime = $param["LatestSubmitTime"];
        }

        if (array_key_exists("Tasks",$param) and $param["Tasks"] !== null) {
            $this->Tasks = [];
            foreach ($param["Tasks"] as $key => $value){
                $obj = new ProjectCloneTaskInfo();
                $obj->deserialize($value);
                array_push($this->Tasks, $obj);
            }
        }
    }
}
