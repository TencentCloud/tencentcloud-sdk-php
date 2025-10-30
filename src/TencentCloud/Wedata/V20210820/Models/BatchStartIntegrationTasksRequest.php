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
 * BatchStartIntegrationTasks请求参数结构体
 *
 * @method integer getTaskType() 获取任务类型，201为实时任务，202为离线任务
 * @method void setTaskType(integer $TaskType) 设置任务类型，201为实时任务，202为离线任务
 * @method string getProjectId() 获取项目id
 * @method void setProjectId(string $ProjectId) 设置项目id
 * @method array getTaskIds() 获取任务id
 * @method void setTaskIds(array $TaskIds) 设置任务id
 * @method array getStartTaskInfoSet() 获取批量运行集成任务，目前仅实时集成用到了这个参数
 * @method void setStartTaskInfoSet(array $StartTaskInfoSet) 设置批量运行集成任务，目前仅实时集成用到了这个参数
 */
class BatchStartIntegrationTasksRequest extends AbstractModel
{
    /**
     * @var integer 任务类型，201为实时任务，202为离线任务
     */
    public $TaskType;

    /**
     * @var string 项目id
     */
    public $ProjectId;

    /**
     * @var array 任务id
     */
    public $TaskIds;

    /**
     * @var array 批量运行集成任务，目前仅实时集成用到了这个参数
     */
    public $StartTaskInfoSet;

    /**
     * @param integer $TaskType 任务类型，201为实时任务，202为离线任务
     * @param string $ProjectId 项目id
     * @param array $TaskIds 任务id
     * @param array $StartTaskInfoSet 批量运行集成任务，目前仅实时集成用到了这个参数
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
        if (array_key_exists("TaskType",$param) and $param["TaskType"] !== null) {
            $this->TaskType = $param["TaskType"];
        }

        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }

        if (array_key_exists("TaskIds",$param) and $param["TaskIds"] !== null) {
            $this->TaskIds = $param["TaskIds"];
        }

        if (array_key_exists("StartTaskInfoSet",$param) and $param["StartTaskInfoSet"] !== null) {
            $this->StartTaskInfoSet = [];
            foreach ($param["StartTaskInfoSet"] as $key => $value){
                $obj = new StartTaskInfo();
                $obj->deserialize($value);
                array_push($this->StartTaskInfoSet, $obj);
            }
        }
    }
}
