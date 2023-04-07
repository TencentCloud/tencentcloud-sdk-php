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
 * ModifySchedule请求参数结构体
 *
 * @method integer getScheduleId() 获取编排唯一标识。
 * @method void setScheduleId(integer $ScheduleId) 设置编排唯一标识。
 * @method string getScheduleName() 获取编排名称。
 * @method void setScheduleName(string $ScheduleName) 设置编排名称。
 * @method WorkflowTrigger getTrigger() 获取编排绑定的触发规则。
 * @method void setTrigger(WorkflowTrigger $Trigger) 设置编排绑定的触发规则。
 * @method array getActivities() 获取编排任务列表。
注意：内部不允许部分更新，如果需要更新需全量提交编排任务列表。
 * @method void setActivities(array $Activities) 设置编排任务列表。
注意：内部不允许部分更新，如果需要更新需全量提交编排任务列表。
 * @method TaskOutputStorage getOutputStorage() 获取媒体处理的文件输出存储位置。
 * @method void setOutputStorage(TaskOutputStorage $OutputStorage) 设置媒体处理的文件输出存储位置。
 * @method string getOutputDir() 获取媒体处理生成的文件输出的目标目录，必选以 / 开头和结尾。
注意：如果设置为空，则表示取消老配置的OutputDir值。
 * @method void setOutputDir(string $OutputDir) 设置媒体处理生成的文件输出的目标目录，必选以 / 开头和结尾。
注意：如果设置为空，则表示取消老配置的OutputDir值。
 * @method TaskNotifyConfig getTaskNotifyConfig() 获取任务的事件通知配置。
 * @method void setTaskNotifyConfig(TaskNotifyConfig $TaskNotifyConfig) 设置任务的事件通知配置。
 */
class ModifyScheduleRequest extends AbstractModel
{
    /**
     * @var integer 编排唯一标识。
     */
    public $ScheduleId;

    /**
     * @var string 编排名称。
     */
    public $ScheduleName;

    /**
     * @var WorkflowTrigger 编排绑定的触发规则。
     */
    public $Trigger;

    /**
     * @var array 编排任务列表。
注意：内部不允许部分更新，如果需要更新需全量提交编排任务列表。
     */
    public $Activities;

    /**
     * @var TaskOutputStorage 媒体处理的文件输出存储位置。
     */
    public $OutputStorage;

    /**
     * @var string 媒体处理生成的文件输出的目标目录，必选以 / 开头和结尾。
注意：如果设置为空，则表示取消老配置的OutputDir值。
     */
    public $OutputDir;

    /**
     * @var TaskNotifyConfig 任务的事件通知配置。
     */
    public $TaskNotifyConfig;

    /**
     * @param integer $ScheduleId 编排唯一标识。
     * @param string $ScheduleName 编排名称。
     * @param WorkflowTrigger $Trigger 编排绑定的触发规则。
     * @param array $Activities 编排任务列表。
注意：内部不允许部分更新，如果需要更新需全量提交编排任务列表。
     * @param TaskOutputStorage $OutputStorage 媒体处理的文件输出存储位置。
     * @param string $OutputDir 媒体处理生成的文件输出的目标目录，必选以 / 开头和结尾。
注意：如果设置为空，则表示取消老配置的OutputDir值。
     * @param TaskNotifyConfig $TaskNotifyConfig 任务的事件通知配置。
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
    }
}
