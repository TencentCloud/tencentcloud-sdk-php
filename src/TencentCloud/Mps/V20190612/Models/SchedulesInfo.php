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
namespace TencentCloud\Mps\V20190612\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 编排详情。
 *
 * @method integer getScheduleId() 获取编排唯一标识。
 * @method void setScheduleId(integer $ScheduleId) 设置编排唯一标识。
 * @method string getScheduleName() 获取编排名称。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setScheduleName(string $ScheduleName) 设置编排名称。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getStatus() 获取编排状态，取值范围：
Enabled：已启用，
Disabled：已禁用。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setStatus(string $Status) 设置编排状态，取值范围：
Enabled：已启用，
Disabled：已禁用。
注意：此字段可能返回 null，表示取不到有效值。
 * @method WorkflowTrigger getTrigger() 获取编排绑定的触发规则。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTrigger(WorkflowTrigger $Trigger) 设置编排绑定的触发规则。
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getActivities() 获取编排任务列表。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setActivities(array $Activities) 设置编排任务列表。
注意：此字段可能返回 null，表示取不到有效值。
 * @method TaskOutputStorage getOutputStorage() 获取媒体处理的文件输出存储位置。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setOutputStorage(TaskOutputStorage $OutputStorage) 设置媒体处理的文件输出存储位置。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getOutputDir() 获取媒体处理生成的文件输出的目标目录。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setOutputDir(string $OutputDir) 设置媒体处理生成的文件输出的目标目录。
注意：此字段可能返回 null，表示取不到有效值。
 * @method TaskNotifyConfig getTaskNotifyConfig() 获取任务的事件通知配置。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTaskNotifyConfig(TaskNotifyConfig $TaskNotifyConfig) 设置任务的事件通知配置。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCreateTime() 获取创建时间，使用 [ISO 日期格式](https://cloud.tencent.com/document/product/862/37710#52)。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCreateTime(string $CreateTime) 设置创建时间，使用 [ISO 日期格式](https://cloud.tencent.com/document/product/862/37710#52)。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getUpdateTime() 获取最后编辑时间，使用  [ISO 日期格式](https://cloud.tencent.com/document/product/862/37710#52)。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUpdateTime(string $UpdateTime) 设置最后编辑时间，使用  [ISO 日期格式](https://cloud.tencent.com/document/product/862/37710#52)。
注意：此字段可能返回 null，表示取不到有效值。
 */
class SchedulesInfo extends AbstractModel
{
    /**
     * @var integer 编排唯一标识。
     */
    public $ScheduleId;

    /**
     * @var string 编排名称。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ScheduleName;

    /**
     * @var string 编排状态，取值范围：
Enabled：已启用，
Disabled：已禁用。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Status;

    /**
     * @var WorkflowTrigger 编排绑定的触发规则。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Trigger;

    /**
     * @var array 编排任务列表。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Activities;

    /**
     * @var TaskOutputStorage 媒体处理的文件输出存储位置。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $OutputStorage;

    /**
     * @var string 媒体处理生成的文件输出的目标目录。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $OutputDir;

    /**
     * @var TaskNotifyConfig 任务的事件通知配置。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TaskNotifyConfig;

    /**
     * @var string 创建时间，使用 [ISO 日期格式](https://cloud.tencent.com/document/product/862/37710#52)。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CreateTime;

    /**
     * @var string 最后编辑时间，使用  [ISO 日期格式](https://cloud.tencent.com/document/product/862/37710#52)。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $UpdateTime;

    /**
     * @param integer $ScheduleId 编排唯一标识。
     * @param string $ScheduleName 编排名称。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Status 编排状态，取值范围：
Enabled：已启用，
Disabled：已禁用。
注意：此字段可能返回 null，表示取不到有效值。
     * @param WorkflowTrigger $Trigger 编排绑定的触发规则。
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $Activities 编排任务列表。
注意：此字段可能返回 null，表示取不到有效值。
     * @param TaskOutputStorage $OutputStorage 媒体处理的文件输出存储位置。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $OutputDir 媒体处理生成的文件输出的目标目录。
注意：此字段可能返回 null，表示取不到有效值。
     * @param TaskNotifyConfig $TaskNotifyConfig 任务的事件通知配置。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CreateTime 创建时间，使用 [ISO 日期格式](https://cloud.tencent.com/document/product/862/37710#52)。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $UpdateTime 最后编辑时间，使用  [ISO 日期格式](https://cloud.tencent.com/document/product/862/37710#52)。
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
        if (array_key_exists("ScheduleId",$param) and $param["ScheduleId"] !== null) {
            $this->ScheduleId = $param["ScheduleId"];
        }

        if (array_key_exists("ScheduleName",$param) and $param["ScheduleName"] !== null) {
            $this->ScheduleName = $param["ScheduleName"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("Trigger",$param) and $param["Trigger"] !== null) {
            $this->Trigger = new WorkflowTrigger();
            $this->Trigger->deserialize($param["Trigger"]);
        }

        if (array_key_exists("Activities",$param) and $param["Activities"] !== null) {
            $this->Activities = [];
            foreach ($param["Activities"] as $key => $value){
                $obj = new Activity();
                $obj->deserialize($value);
                array_push($this->Activities, $obj);
            }
        }

        if (array_key_exists("OutputStorage",$param) and $param["OutputStorage"] !== null) {
            $this->OutputStorage = new TaskOutputStorage();
            $this->OutputStorage->deserialize($param["OutputStorage"]);
        }

        if (array_key_exists("OutputDir",$param) and $param["OutputDir"] !== null) {
            $this->OutputDir = $param["OutputDir"];
        }

        if (array_key_exists("TaskNotifyConfig",$param) and $param["TaskNotifyConfig"] !== null) {
            $this->TaskNotifyConfig = new TaskNotifyConfig();
            $this->TaskNotifyConfig->deserialize($param["TaskNotifyConfig"]);
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }
    }
}
