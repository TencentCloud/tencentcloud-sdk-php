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
 * ImportOfflineTask请求参数结构体
 *
 * @method string getProjectId() 获取项目id
 * @method void setProjectId(string $ProjectId) 设置项目id
 * @method array getTaskInfoList() 获取任务名称
 * @method void setTaskInfoList(array $TaskInfoList) 设置任务名称
 * @method integer getTaskNameExistMode() 获取重命名策略，0（跳过）、1（重命名）
 * @method void setTaskNameExistMode(integer $TaskNameExistMode) 设置重命名策略，0（跳过）、1（重命名）
 * @method string getWorkflowId() 获取工作流id
 * @method void setWorkflowId(string $WorkflowId) 设置工作流id
 * @method string getTaskFolderId() 获取任务文件夹id
 * @method void setTaskFolderId(string $TaskFolderId) 设置任务文件夹id
 */
class ImportOfflineTaskRequest extends AbstractModel
{
    /**
     * @var string 项目id
     */
    public $ProjectId;

    /**
     * @var array 任务名称
     */
    public $TaskInfoList;

    /**
     * @var integer 重命名策略，0（跳过）、1（重命名）
     */
    public $TaskNameExistMode;

    /**
     * @var string 工作流id
     */
    public $WorkflowId;

    /**
     * @var string 任务文件夹id
     */
    public $TaskFolderId;

    /**
     * @param string $ProjectId 项目id
     * @param array $TaskInfoList 任务名称
     * @param integer $TaskNameExistMode 重命名策略，0（跳过）、1（重命名）
     * @param string $WorkflowId 工作流id
     * @param string $TaskFolderId 任务文件夹id
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
        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }

        if (array_key_exists("TaskInfoList",$param) and $param["TaskInfoList"] !== null) {
            $this->TaskInfoList = [];
            foreach ($param["TaskInfoList"] as $key => $value){
                $obj = new TaskBaseInfo();
                $obj->deserialize($value);
                array_push($this->TaskInfoList, $obj);
            }
        }

        if (array_key_exists("TaskNameExistMode",$param) and $param["TaskNameExistMode"] !== null) {
            $this->TaskNameExistMode = $param["TaskNameExistMode"];
        }

        if (array_key_exists("WorkflowId",$param) and $param["WorkflowId"] !== null) {
            $this->WorkflowId = $param["WorkflowId"];
        }

        if (array_key_exists("TaskFolderId",$param) and $param["TaskFolderId"] !== null) {
            $this->TaskFolderId = $param["TaskFolderId"];
        }
    }
}
