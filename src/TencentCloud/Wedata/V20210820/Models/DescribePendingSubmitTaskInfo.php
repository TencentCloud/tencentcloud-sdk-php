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
 * 待提交任务信息
 *
 * @method string getTaskId() 获取任务编号
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTaskId(string $TaskId) 设置任务编号
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getTaskName() 获取任务名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTaskName(string $TaskName) 设置任务名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getModifyType() 获取修改类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setModifyType(string $ModifyType) 设置修改类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getTaskStatus() 获取任务状态
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTaskStatus(string $TaskStatus) 设置任务状态
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getSubmitPreCheck() 获取提交预检查（Y/N）
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSubmitPreCheck(string $SubmitPreCheck) 设置提交预检查（Y/N）
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getSubmitPreCheckDetailList() 获取提交预检查提交可能会失败的原因
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSubmitPreCheckDetailList(array $SubmitPreCheckDetailList) 设置提交预检查提交可能会失败的原因
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getExecutorGroupId() 获取资源组编号
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setExecutorGroupId(string $ExecutorGroupId) 设置资源组编号
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getExecutorGroupName() 获取资源组名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setExecutorGroupName(string $ExecutorGroupName) 设置资源组名称
注意：此字段可能返回 null，表示取不到有效值。
 */
class DescribePendingSubmitTaskInfo extends AbstractModel
{
    /**
     * @var string 任务编号
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TaskId;

    /**
     * @var string 任务名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TaskName;

    /**
     * @var string 修改类型
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ModifyType;

    /**
     * @var string 任务状态
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TaskStatus;

    /**
     * @var string 提交预检查（Y/N）
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SubmitPreCheck;

    /**
     * @var array 提交预检查提交可能会失败的原因
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SubmitPreCheckDetailList;

    /**
     * @var string 资源组编号
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ExecutorGroupId;

    /**
     * @var string 资源组名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ExecutorGroupName;

    /**
     * @param string $TaskId 任务编号
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $TaskName 任务名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ModifyType 修改类型
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $TaskStatus 任务状态
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $SubmitPreCheck 提交预检查（Y/N）
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $SubmitPreCheckDetailList 提交预检查提交可能会失败的原因
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ExecutorGroupId 资源组编号
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ExecutorGroupName 资源组名称
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

        if (array_key_exists("TaskName",$param) and $param["TaskName"] !== null) {
            $this->TaskName = $param["TaskName"];
        }

        if (array_key_exists("ModifyType",$param) and $param["ModifyType"] !== null) {
            $this->ModifyType = $param["ModifyType"];
        }

        if (array_key_exists("TaskStatus",$param) and $param["TaskStatus"] !== null) {
            $this->TaskStatus = $param["TaskStatus"];
        }

        if (array_key_exists("SubmitPreCheck",$param) and $param["SubmitPreCheck"] !== null) {
            $this->SubmitPreCheck = $param["SubmitPreCheck"];
        }

        if (array_key_exists("SubmitPreCheckDetailList",$param) and $param["SubmitPreCheckDetailList"] !== null) {
            $this->SubmitPreCheckDetailList = [];
            foreach ($param["SubmitPreCheckDetailList"] as $key => $value){
                $obj = new TaskSubmitPreCheckDetailInfo();
                $obj->deserialize($value);
                array_push($this->SubmitPreCheckDetailList, $obj);
            }
        }

        if (array_key_exists("ExecutorGroupId",$param) and $param["ExecutorGroupId"] !== null) {
            $this->ExecutorGroupId = $param["ExecutorGroupId"];
        }

        if (array_key_exists("ExecutorGroupName",$param) and $param["ExecutorGroupName"] !== null) {
            $this->ExecutorGroupName = $param["ExecutorGroupName"];
        }
    }
}
